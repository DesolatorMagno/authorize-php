<?php

namespace DesolatorMagno\AuthorizePhp\Util;

use DesolatorMagno\AuthorizePhp\Api\Constants\ANetEnvironment;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class AuthorizeApiClient
{

    use BoomRemover;

    private string $url;
    private Client $client;
    private bool $verify_peer = true; // attempt trust validation of SSL certificates when establishing secure connections.

    public function __construct()
    {
        $this->url = sprintf('%s/xml/v1/request.api', ANetEnvironment::CUSTOM);
        $this->client = new Client();
    }

    protected function setUrl(string $endPoint): void
    {
        $this->url = sprintf('%s/xml/v1/request.api', $endPoint);
    }

    public function setPostUrl(string $endPoint): void
    {
        $this->setUrl($endPoint);
    }

    private function getCurlOptions(string $xmlRequest): array
    {
        $options = [
            //CURLOPT_INTERFACE      => 'xxx.xxx.xxx.xxx',
            CURLOPT_POSTFIELDS     => $xmlRequest,
            CURLOPT_HEADER         => 0,
            CURLOPT_TIMEOUT        => 45,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYHOST => 2,
        ];
        //$this->logger->info(sprintf(" Url: %s", $post_url));
        // Do not log requests that could contain CC info.
        //$this->logger->info(sprintf("Request to AnetApi: \n%s", $xmlRequest));

        if ($this->verify_peer) {
            $options[CURLOPT_CAINFO] = dirname(__FILE__, 2) . '/ssl/cert.pem';

        } else {
            Log::channel('authorize')->error('Invalid SSL option for the request');
            Log::channel('authorize')->info('SSL Path:');
            Log::channel('authorize')->info(dirname(__FILE__, 2) . '/ssl/cert.pem');
            return [];
        }

        if (str_contains($this->url, 'xml')) {
            $options[CURLOPT_HTTPHEADER] = ['Content-Type: text/json'];
        }

        return $options;
    }

    public function sendRequest(string $xmlRequest): array|null
    {
        $options = $this->getCurlOptions($xmlRequest);
        if ($options == []) return [];

        try {
            Log::channel('authorize')->debug("Url:  {$this->url}");

            $apiResponse = $this->client->post($this->url, [
                'curl' => $options
            ]);
            //Log::channel('authorize')->debug($options);

            $xmlResponse = $apiResponse->getBody();
            //Log::channel('authorize')->info("Response from AnetApi: $xmlResponse");
            //Log::channel('authorize')->info($response);
            return $this->removeBoom($xmlResponse);

        } catch (GuzzleException $ex) {
            Log::channel('authorize')->error($ex->getMessage());
            $errorMessage = sprintf("\n%s:Error making http request via curl: Code:'%s', Message:'%s', Trace:'%s', File:'%s':'%s'",
                $this->now(), $ex->getCode(), $ex->getMessage(), $ex->getTraceAsString(), $ex->getFile(), $ex->getLine());
            Log::channel('authorize')->error($errorMessage);
        } catch (Exception $e) {
            Log::channel('authorize')->error('Error with Guzzle');
            Log::channel('authorize')->error($e->getMessage());
        }

        return [];

    }

    protected function now(): string
    {
        return date(DATE_RFC2822);
    }
}

<?php

namespace DesolatorMagno\AuthorizePhp\Api\Controller\Base;


use DesolatorMagno\AuthorizePhp\Api\Constants\ANetEnvironment;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;
use DesolatorMagno\AuthorizePhp\Util\AuthorizeApiClient;
//use DesolatorMagno\AuthorizePhp\Util\\Log;
use DesolatorMagno\AuthorizePhp\Util\LogFactory;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use Exception;
use InvalidArgumentException;
use ReflectionClass;
//use Log;

abstract class ApiOperationBase implements IApiOperation
{
    private AnetApiRequestType $apiRequest;
    protected ?AnetApiResponseType $apiResponse = null;
    private string $apiResponseType;
    public AuthorizeApiClient $httpClient;
    public ?\Log $logger;

    /**
     * @throws InvalidArgumentException if invalid request
     */
    public function __construct(AnetApiRequestType $request, string $responseType)
    {
        if (null == $responseType || '' == $responseType) {
            throw new InvalidArgumentException("responseType cannot be null or empty");
        }

        if (null != $this->apiResponse) {
            throw new InvalidArgumentException("response has to be null");
        }

        $this->apiRequest = $request;
        $this->validate();

        $this->apiResponseType = $responseType;
        $this->httpClient = new AuthorizeApiClient();

        //$this->logger = LogFactory::getLog(get_class($this));
        //$this->httpClient = new HttpClient;

        /*\Log::withContext([
            'request-id' => $requestId
        ]);*/
    }

    public function getApiResponse(): ?AnetApiResponseType
    {
        return $this->apiResponse;
    }

    /**
     * @throws Exception
     */
    public function executeWithApiResponse($endPoint = ANetEnvironment::CUSTOM): ?AnetApiResponseType
    {
        $this->execute($endPoint);
        return $this->apiResponse;
    }

    /**
     * @throws Exception
     */
    public function execute($endPoint = ANetEnvironment::CUSTOM)
    {
        $this->beforeExecute();

        $this->apiRequest->setClientId("sdk-php-" . ANetEnvironment::VERSION);
        //\Log::channel('authorize')->info('Request Creation Begin');
        //\Log::channel('authorize')->debug($this->apiRequest->jsonSerialize());

        $mapper = Mapper::Instance();
        $requestRoot = $mapper->getXmlName((new ReflectionClass($this->apiRequest))->getName());
        $requestData = json_encode($requestRoot);

        $requestArray = [$requestRoot => $this->apiRequest];

        //\Log::channel('authorize')->info('Request  Creation End');

        $this->httpClient->setPostUrl($endPoint);

        $requestData = json_encode($requestArray);
        \Log::channel('authorize')->debug($requestData);

        $jsonResponse = $this->httpClient->sendRequest($requestData);
        //\Log::channel('authorize')->info('Request Data');
        \Log::channel('authorize')->info($jsonResponse);

        if (is_null($jsonResponse)) {
            \Log::channel('authorize')->error('Error getting response from API');
            $this->apiResponse = null;
            $this->afterExecute();
            return;
        }

        \Log::channel('authorize')->info(gettype($jsonResponse));

        $response = json_decode($jsonResponse, true);
        \Log::channel('authorize')->info(gettype($response));
        \Log::channel('authorize')->info($response);

        $this->apiResponse = new $this->apiResponseType();
        $this->apiResponse->set($jsonResponse);
        \Log::channel('authorize')->info($this->apiResponse->jsonSerialize());
        //\Log::channel('authorize')->info(serialize($this->apiResponse));

        $this->afterExecute();
    }

    private function validate()
    {
        $merchantAuthentication = $this->apiRequest->getMerchantAuthentication();
        if (null == $merchantAuthentication) {
            throw new InvalidArgumentException("MerchantAuthentication cannot be null");
        }

        $this->validateRequest();
    }

    protected function beforeExecute()
    {
    }

    protected function afterExecute()
    {
    }

    protected function validateRequest()
    {
    } //need to make this abstract

    protected function now()
    {
        return date( DATE_RFC2822);
    }
}

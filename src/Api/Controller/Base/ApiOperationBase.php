<?php

namespace DesolatorMagno\AuthorizePhp\Api\Controller\Base;


use DesolatorMagno\AuthorizePhp\Api\Constants\ANetEnvironment;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;
use DesolatorMagno\AuthorizePhp\Util\AuthorizeApiClient;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use Exception;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use ReflectionClass;
//use Log;

abstract class ApiOperationBase implements IApiOperation
{
    private AnetApiRequestType $apiRequest;
    protected ?AnetApiResponseType $apiResponse = null;
    private string $apiResponseType;
    public AuthorizeApiClient $httpClient;

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
        Log::channel('authorize')->info('***** Start Authorize Process *****');
        $this->execute($endPoint);
        Log::channel('authorize')->info('***** End Authorize Process *****');

        return $this->apiResponse;
    }

    /**
     * @throws Exception
     */
    public function execute($endPoint = ANetEnvironment::CUSTOM)
    {
        $this->beforeExecute();
        $this->apiRequest->setClientId("sdk-php-" . ANetEnvironment::VERSION);
        Log::channel('authorize')->info('Request Creation Begin');
        //Too much useless data in there.
        //Log::channel('authorize')->debug($this->apiRequest->jsonSerialize());

        $mapper = Mapper::Instance();
        $requestRoot = $mapper->getXmlName((new ReflectionClass($this->apiRequest))->getName());
        //$requestData = json_encode($requestRoot);

        $requestArray = [$requestRoot => $this->apiRequest];

        Log::channel('authorize')->info('Request  Creation End');

        $this->httpClient->setPostUrl($endPoint);

        // TODO: Block credit card number
        $requestData = json_encode($requestArray);
        Log::channel('authorize')->info('<== Request Data ==>');
        Log::channel('authorize')->info($requestData);
        Log::channel('authorize')->info('<== Request Data =/>');

        $jsonResponse = $this->httpClient->sendRequest($requestData);
        //\Log::channel('authorize')->info($jsonResponse);

        if (is_null($jsonResponse)) {
            Log::channel('authorize')->error('Error getting response from API');
            $this->apiResponse = null;
            $this->afterExecute();
            return;
        }

        $this->apiResponse = new $this->apiResponseType();
        $this->apiResponse->set($jsonResponse);
        Log::channel('authorize')->info('<== Response Data ==>');
        Log::channel('authorize')->info($this->apiResponse->jsonSerialize());
        Log::channel('authorize')->info('<== Response Data =/>');


        //Log::channel('authorize')->info(serialize($this->apiResponse));
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

<?php
namespace DesolatorMagno\AuthorizePhp\Api\Controller\Base;

use DesolatorMagno\AuthorizePhp\Api\Constants\ANetEnvironment;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AnetApiResponseType;
use DesolatorMagno\AuthorizePhp\Util\Helpers;
use DesolatorMagno\AuthorizePhp\Util\HttpClient;
use DesolatorMagno\AuthorizePhp\Util\LogFactory as LogFactory;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use InvalidArgumentException;
use ReflectionClass;

// use JMS\Serializer\SerializerBuilder;
// use JMS\Serializer\handler\HandlerRegistryInterface;
// use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
// use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;


abstract class OldApiOperationBase implements IApiOperation
{
    /**
     * @var AnetApiRequestType
     */
    private $apiRequest = null;

    /**
     * @var AnetApiResponseType
     */
    private $apiResponse = null;

    /**
     * @var String
     */
    private $apiResponseType = '';

     /**
     * @var HttpClient;
     */
    public $httpClient = null;
    private $logger = null;
    /**
     * Constructor.
     *
     * @param AnetApiRequestType $request ApiRequest to send
     * @param string $responseType response type expected
     * @throws InvalidArgumentException if invalid request
     */
    public function __construct(AnetApiRequestType $request, $responseType)
    {
        $this->logger = LogFactory::getLog(get_class($this));

        if ( null == $request)
        {
            throw new InvalidArgumentException('request cannot be null');
        }

        if ( $responseType == null || $responseType === '')
        {
            throw new InvalidArgumentException('responseType cannot be null or empty');
        }

        if ( null != $this->apiResponse)
        {
            throw new InvalidArgumentException('response has to be null');
        }

        $this->apiRequest = $request;
        $this->validate();

        $this->apiResponseType = $responseType;
        $this->httpClient = new HttpClient;

/*        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir( __DIR__ . '/../../yml/v1', 'DesolatorMagno\AuthorizePhp\Api\Contract\V1');//..\..\yml\V1\ //'/../lib/net/authorize/api/yml/v1'
        $serializerBuilder->configureHandlers(
            function (HandlerRegistryInterface $h)

            use($serializerBuilder)
            {
                $serializerBuilder->addDefaultHandlers();
                $h->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
                $h->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            }
        );
        $this->serializer = $serializerBuilder->build();*/
    }

    /**
     * Retrieves response
     * @return AnetApiResponseType
     */
    public function getApiResponse(): ANetApiResponseType
    {
        return $this->apiResponse;
    }

    /**
     * Sends request and retrieves response
     * @return AnetApiResponseType
     */
    public function executeWithApiResponse($endPoint = ANetEnvironment::CUSTOM): ANetApiResponseType
    {
        $this->execute($endPoint);
        return $this->apiResponse;
    }

    public function execute($endPoint = ANetEnvironment::CUSTOM): void
    {
        $this->beforeExecute();

    $this->apiRequest->setClientId('sdk-php-' . ANetEnvironment::VERSION);

        $this->logger->info('Request Creation Begin');
        $this->logger->debug($this->apiRequest);
        // $xmlRequest = $this->serializer->serialize($this->apiRequest, 'xml');
        //$requestArray = [lcfirst((new \ReflectionClass($this->apiRequest))->getShortName()) => $this->apiRequest];

        // $requestRoot = (new \DesolatorMagno\AuthorizePhp\Api\Contract\V1\Mapper)->getXmlName((new \ReflectionClass($this->apiRequest))->getName());
        // $requestRoot = (\DesolatorMagno\AuthorizePhp\Api\Contract\V1\Mapper::Instance())->getXmlName((new \ReflectionClass($this->apiRequest))->getName());
        $mapper = Mapper::Instance();
        $requestRoot = $mapper->getXmlName((new ReflectionClass($this->apiRequest))->getName());

        $requestArray = [$requestRoot => $this->apiRequest];

        $this->logger->info('Request  Creation End');

        $this->httpClient->setPostUrl( $endPoint);
        /*$xmlResponse = $this->httpClient->_sendRequest($xmlRequest);
        if ( null == $xmlResponse)
        {
            throw new \Exception( "Error getting valid response from api. Check log file for error details");
        }
        $this->logger->info("Response De-Serialization Begin");
        $this->apiResponse = $this->serializer->deserialize( $xmlResponse, $this->apiResponseType , 'xml');
        $this->logger->info("Response De-Serialization End");*/

        $jsonResponse = $this->httpClient->_sendRequest(json_encode($requestArray));
        if($jsonResponse != null){
            //decoding json and removing bom
            $possibleBOM = substr($jsonResponse, 0, 3);
            $utfBOM = pack('CCC', 0xef, 0xbb, 0xbf);

            if (0 === strncmp($possibleBOM, $utfBOM, 3)) {
                $response = json_decode( substr($jsonResponse,3), true);
            }
            else {
                $response = json_decode($jsonResponse, true);
            }
            $this->apiResponse = new $this->apiResponseType();
            $this->apiResponse->set($response);
        }
        else {
            $this->logger->error('Error getting response from API');
            $this->apiResponse = null;
        }

        $this->afterExecute();
    }

    private function validate()
    {
        $merchantAuthentication = $this->apiRequest->getMerchantAuthentication();
        if ( null == $merchantAuthentication)
        {
            throw new InvalidArgumentException('MerchantAuthentication cannot be null');
        }

        $this->validateRequest();
    }

    protected function beforeExecute() {}
    protected function afterExecute()  {}
    protected function validateRequest() {} //need to make this abstract

    protected function now()
    {
        return date( DATE_RFC2822);
    }
}

<?php
namespace DesolatorMagno\AuthorizePhp\Api\Controller\Base;

interface IApiOperation
{
    /**
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType
     */
    public function getApiResponse();
    /**
 * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType
 */
public function executeWithApiResponse( $endPoint = null);
    /**
 * @return void
 */
public function execute( $endPoint = null);
    /*
        //TS GetApiResponse();
        AuthorizeNet.Api.Contracts.V1.ANetApiResponse GetErrorResponse();
        //TS ExecuteWithApiResponse(AuthorizeNet.Environment environment = null);
        //void Execute(AuthorizeNet.Environment environment = null);
        AuthorizeNet.Api.Contracts.V1.messageTypeEnum GetResultCode();
        List<string> GetResults();
    */
}

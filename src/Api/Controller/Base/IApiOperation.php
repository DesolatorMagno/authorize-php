<?php
namespace DesolatorMagno\AuthorizePhp\Api\Controller\Base;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;

interface IApiOperation
{

public function getApiResponse(): ANetApiResponseType;

public function executeWithApiResponse(string|null $endPoint = null): ANetApiResponseType;

public function execute(string|null $endPoint = null): void;
    /*
        //TS GetApiResponse();
        AuthorizeNet.Api.Contracts.V1.ANetApiResponse GetErrorResponse();
        //TS ExecuteWithApiResponse(AuthorizeNet.Environment environment = null);
        //void Execute(AuthorizeNet.Environment environment = null);
        AuthorizeNet.Api.Contracts.V1.messageTypeEnum GetResultCode();
        List<string> GetResults();
    */
}

<?php
namespace DesolatorMagno\AuthorizePhp\api\controller;

use DesolatorMagno\AuthorizePhp\api\contract\v1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\api\controller\base\ApiOperationBase;

class GetSettledBatchListController extends ApiOperationBase
{
    public function __construct(AnetApiRequestType $request)
    {
        $responseType = 'DesolatorMagno\AuthorizePhp\api\contract\v1\GetSettledBatchListResponse';
        parent::__construct($request, $responseType);
    }

    protected function validateRequest()
    {
        //validate required fields of $this->apiRequest->

        //validate non-required fields of $this->apiRequest->
    }
}
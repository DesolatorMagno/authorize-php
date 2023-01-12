<?php
namespace DesolatorMagno\AuthorizePhp\Api\Controller;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\Api\Controller\Base\ApiOperationBase;

class GetCustomerProfileIdsController extends ApiOperationBase
{
    public function __construct(AnetApiRequestType $request)
    {
        $responseType = 'DesolatorMagno\AuthorizePhp\Api\Contract\V1\GetCustomerProfileIdsResponse';
        parent::__construct($request, $responseType);
    }

    protected function validateRequest()
    {
        //validate required fields of $this->apiRequest->

        //validate non-required fields of $this->apiRequest->
    }
}

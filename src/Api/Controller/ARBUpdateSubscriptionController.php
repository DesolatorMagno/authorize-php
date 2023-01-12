<?php
namespace DesolatorMagno\AuthorizePhp\api\Controller;

use DesolatorMagno\AuthorizePhp\api\contract\v1\AnetApiRequestType;
use DesolatorMagno\AuthorizePhp\api\Controller\Base\ApiOperationBase;

class ARBUpdateSubscriptionController extends ApiOperationBase
{
    public function __construct(AnetApiRequestType $request)
    {
        $responseType = 'DesolatorMagno\AuthorizePhp\api\contract\v1\ARBUpdateSubscriptionResponse';
        parent::__construct($request, $responseType);
    }

    protected function validateRequest()
    {
        //validate required fields of $this->apiRequest->

        //validate non-required fields of $this->apiRequest->
    }
}

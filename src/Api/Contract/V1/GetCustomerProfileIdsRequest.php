<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetCustomerProfileIdsRequest
 */
class GetCustomerProfileIdsRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;

}

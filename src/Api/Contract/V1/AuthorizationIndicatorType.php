<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing AuthorizationIndicatorType
 *
 *
 * XSD Type: authorizationIndicatorType
 */
class AuthorizationIndicatorType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $authorizationIndicator
     */
    private $authorizationIndicator = null;

    /**
     * Gets as authorizationIndicator
     *
     * @return string
     */
    public function getAuthorizationIndicator()
    {
        return $this->authorizationIndicator;
    }

    /**
     * Sets a new authorizationIndicator
     *
     * @param string $authorizationIndicator
     * @return self
     */
    public function setAuthorizationIndicator($authorizationIndicator)
    {
        $this->authorizationIndicator = $authorizationIndicator;
        return $this;
    }

}

<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetHostedPaymentPageResponse
 */
class GetHostedPaymentPageResponse extends ANetApiResponseType
{

    /**
     * @property string $token
     */
    private $token = null;

    /**
     * Gets as token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets a new token
     *
     * @param string $token
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

}

<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ARBGetSubscriptionStatusResponse
 */
class ARBGetSubscriptionStatusResponse extends ANetApiResponseType
{

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;
        return $this;
    }

}

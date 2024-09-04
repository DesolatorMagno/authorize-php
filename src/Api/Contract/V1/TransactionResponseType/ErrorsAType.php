<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing ErrorsAType
 */
class ErrorsAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     * $error
     */
    private $error = null;

    /**
     * Adds as error
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType
     * $error
     */
    public function addToError(ErrorAType $error): self
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetError($index): bool
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param scalar $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     * $error
     * @return self
     */
    public function setError(array $error): self
    {
        $this->error = $error;
        return $this;
    }

}

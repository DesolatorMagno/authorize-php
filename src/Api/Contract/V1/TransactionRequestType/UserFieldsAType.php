<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing UserFieldsAType
 */
class UserFieldsAType implements \JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[] $userField
     */
    private $userField = null;

    /**
     * Adds as userField
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType $userField
     *@return self
     */
    public function addToUserField(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType $userField): self
    {
        $this->userField[] = $userField;
        return $this;
    }

    /**
     * isset userField
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUserField($index): bool
    {
        return isset($this->userField[$index]);
    }

    /**
     * unset userField
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUserField($index)
    {
        unset($this->userField[$index]);
    }

    /**
     * Gets as userField
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[]
     */
    public function getUserField()
    {
        return $this->userField;
    }

    /**
     * Sets a new userField
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[] $userField
     * @return self
     */
    public function setUserField(array $userField)
    {
        $this->userField = $userField;
        return $this;
    }

}

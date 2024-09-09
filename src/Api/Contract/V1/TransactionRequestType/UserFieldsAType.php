<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing UserFieldsAType
 */
class UserFieldsAType implements JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property UserFieldType[] $userField
     */
    private $userField = null;

    /**
     * Adds as userField
     *
     * @param UserFieldType $userField
     *@return self
     */
    public function addToUserField(UserFieldType $userField): self
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
     * @return UserFieldType[]
     */
    public function getUserField()
    {
        return $this->userField;
    }

    /**
     * Sets a new userField
     *
     * @param UserFieldType[] $userField
     * @return self
     */
    public function setUserField(array $userField)
    {
        $this->userField = $userField;
        return $this;
    }

}

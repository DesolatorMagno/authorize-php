<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing MobileDeviceLoginResponse
 */
class MobileDeviceLoginResponse extends ANetApiResponseType
{

    /**
     * @property MerchantContactType $merchantContact
     */
    private $merchantContact = null;

    /**
     * @property PermissionType[] $userPermissions
     */
    private $userPermissions = null;

    /**
     * @property TransRetailInfoType $merchantAccount
     */
    private $merchantAccount = null;

    /**
     * Gets as merchantContact
     *
     * @return MerchantContactType
     */
    public function getMerchantContact()
    {
        return $this->merchantContact;
    }

    /**
     * Sets a new merchantContact
     *
     * @param MerchantContactType $merchantContact
     * @return self
     */
    public function setMerchantContact(MerchantContactType $merchantContact)
    {
        $this->merchantContact = $merchantContact;
        return $this;
    }

    /**
     * Adds as permission
     *
     * @param PermissionType $permission
     *@return self
     */
    public function addToUserPermissions(PermissionType $permission)
    {
        $this->userPermissions[] = $permission;
        return $this;
    }

    /**
     * isset userPermissions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUserPermissions($index)
    {
        return isset($this->userPermissions[$index]);
    }

    /**
     * unset userPermissions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUserPermissions($index)
    {
        unset($this->userPermissions[$index]);
    }

    /**
     * Gets as userPermissions
     *
     * @return PermissionType[]
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Sets a new userPermissions
     *
     * @param PermissionType[] $userPermissions
     * @return self
     */
    public function setUserPermissions(array $userPermissions)
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }

    /**
     * Gets as merchantAccount
     *
     * @return TransRetailInfoType
     */
    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }

    /**
     * Sets a new merchantAccount
     *
     * @param TransRetailInfoType $merchantAccount
     * @return self
     */
    public function setMerchantAccount(TransRetailInfoType $merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }


}

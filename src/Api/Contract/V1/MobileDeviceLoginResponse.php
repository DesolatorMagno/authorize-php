<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing MobileDeviceLoginResponse
 */
class MobileDeviceLoginResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MerchantContactType $merchantContact
     */
    private $merchantContact = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PermissionType[] $userPermissions
     */
    private $userPermissions = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $merchantAccount
     */
    private $merchantAccount = null;

    /**
     * Gets as merchantContact
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MerchantContactType
     */
    public function getMerchantContact()
    {
        return $this->merchantContact;
    }

    /**
     * Sets a new merchantContact
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MerchantContactType $merchantContact
     * @return self
     */
    public function setMerchantContact(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\MerchantContactType $merchantContact)
    {
        $this->merchantContact = $merchantContact;
        return $this;
    }

    /**
     * Adds as permission
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PermissionType $permission
     *@return self
     */
    public function addToUserPermissions(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PermissionType $permission)
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
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PermissionType[]
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    /**
     * Sets a new userPermissions
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PermissionType[] $userPermissions
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
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType
     */
    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }

    /**
     * Sets a new merchantAccount
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $merchantAccount
     * @return self
     */
    public function setMerchantAccount(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }


    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = \DesolatorMagno\AuthorizePhp\util\Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class() , $key);

				if($classDetails !== NULL ) {
					if ($classDetails->isArray) {
						if ($classDetails->isCustomDefined) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new $classDetails->className;
								$type->set($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new \DateTime($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else {
							foreach($value AS $keyChild => $valueChild) {
								$this->{'addTo' . $key}($valueChild);
							}
						}
					}
					else {
						if ($classDetails->isCustomDefined){
							$type = new $classDetails->className;
							$type->set($value);
							$this->{'set' . $key}($type);
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							$type = new \DateTime($value);
							$this->{'set' . $key}($type);
						}
						else {
							$this->{'set' . $key}($value);
						}
					}
				}
			}
		}
    }

}

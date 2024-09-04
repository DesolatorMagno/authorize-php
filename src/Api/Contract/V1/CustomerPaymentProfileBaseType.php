<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing CustomerPaymentProfileBaseType
 *
 *
 * XSD Type: customerPaymentProfileBaseType
 */
class CustomerPaymentProfileBaseType implements \JsonSerializable
{

    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property string $customerType
     */
    private $customerType = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo
     */
    private $billTo = null;

    /**
     * Gets as customerType
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Sets a new customerType
     *
     * @param string $customerType
     * @return self
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * Gets as billTo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * Sets a new billTo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo
     * @return self
     */
    public function setBillTo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo)
    {
        $this->billTo = $billTo;
        return $this;
    }

}

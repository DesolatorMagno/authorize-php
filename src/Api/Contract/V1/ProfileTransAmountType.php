<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ProfileTransAmountType
 *
 *
 * XSD Type: profileTransAmountType
 */
class ProfileTransAmountType implements \JsonSerializable
{

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     */
    private $tax = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     */
    private $shipping = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     */
    private $duty = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     */
    private $lineItems = null;

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as tax
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     * @return self
     */
    public function setTax(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as shipping
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets a new shipping
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     * @return self
     */
    public function setShipping(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * Gets as duty
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     * @return self
     */
    public function setDuty(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Adds as lineItems
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItems
     *@return self
     */
    public function addToLineItems(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItems)
    {
        $this->lineItems[] = $lineItems;
        return $this;
    }

    /**
     * isset lineItems
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLineItems($index)
    {
        return isset($this->lineItems[$index]);
    }

    /**
     * unset lineItems
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLineItems($index)
    {
        unset($this->lineItems[$index]);
    }

    /**
     * Gets as lineItems
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * Sets a new lineItems
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }


    // Json Serialize Code
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = \DesolatorMagno\AuthorizePhp\util\Mapper::Instance();
        foreach($values as $key => $value){
            $classDetails = $mapper->getClass(get_class() , $key);
            if (isset($value)){
                if ($classDetails->className === 'Date'){
                    $dateTime = $value->format('Y-m-d');
                    $values[$key] = $dateTime;
                }
                else if ($classDetails->className === 'DateTime'){
                    $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                    $values[$key] = $dateTime;
                }
                if (is_array($value)){
                    if (!$classDetails->isInlineArray){
                        $subKey = $classDetails->arrayEntryname;
                        $subArray = [$subKey => $value];
                        $values[$key] = $subArray;
                    }
                }
            }
        }
        return $values;
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

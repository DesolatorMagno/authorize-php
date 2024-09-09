<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuDetailsType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;
use JsonSerializable;

/**
 * Class representing AuUpdateType
 *
 *
 * XSD Type: auUpdateType
 */
class AuUpdateType extends AuDetailsType implements JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property CreditCardMaskedType $newCreditCard
     */
    private $newCreditCard = null;

    /**
     * @property CreditCardMaskedType $oldCreditCard
     */
    private $oldCreditCard = null;

    /**
     * Gets as newCreditCard
     *
     * @return CreditCardMaskedType
     */
    public function getNewCreditCard()
    {
        return $this->newCreditCard;
    }

    /**
     * Sets a new newCreditCard
     *
     * @param CreditCardMaskedType $newCreditCard
     * @return self
     */
    public function setNewCreditCard(CreditCardMaskedType $newCreditCard)
    {
        $this->newCreditCard = $newCreditCard;
        return $this;
    }

    /**
     * Gets as oldCreditCard
     *
     * @return CreditCardMaskedType
     */
    public function getOldCreditCard()
    {
        return $this->oldCreditCard;
    }

    /**
     * Sets a new oldCreditCard
     *
     * @param CreditCardMaskedType $oldCreditCard
     * @return self
     */
    public function setOldCreditCard(CreditCardMaskedType $oldCreditCard)
    {
        $this->oldCreditCard = $oldCreditCard;
        return $this;
    }

}

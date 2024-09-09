<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuDetailsType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;
use JsonSerializable;

/**
 * Class representing AuDeleteType
 *
 *
 * XSD Type: auDeleteType
 */
class AuDeleteType extends AuDetailsType implements JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property CreditCardMaskedType $creditCard
     */
    private $creditCard = null;

    /**
     * Gets as creditCard
     *
     * @return CreditCardMaskedType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param CreditCardMaskedType $creditCard
     * @return self
     */
    public function setCreditCard(CreditCardMaskedType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

}

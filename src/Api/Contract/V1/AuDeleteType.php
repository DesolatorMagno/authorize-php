<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuDetailsType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;

/**
 * Class representing AuDeleteType
 *
 *
 * XSD Type: auDeleteType
 */
class AuDeleteType extends AuDetailsType implements \JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard
     */
    private $creditCard = null;

    /**
     * Gets as creditCard
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard
     * @return self
     */
    public function setCreditCard(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

}

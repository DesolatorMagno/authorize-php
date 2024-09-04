<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuDetailsType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;

/**
 * Class representing AuUpdateType
 *
 *
 * XSD Type: auUpdateType
 */
class AuUpdateType extends AuDetailsType implements \JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $newCreditCard
     */
    private $newCreditCard = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $oldCreditCard
     */
    private $oldCreditCard = null;

    /**
     * Gets as newCreditCard
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType
     */
    public function getNewCreditCard()
    {
        return $this->newCreditCard;
    }

    /**
     * Sets a new newCreditCard
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $newCreditCard
     * @return self
     */
    public function setNewCreditCard(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $newCreditCard)
    {
        $this->newCreditCard = $newCreditCard;
        return $this;
    }

    /**
     * Gets as oldCreditCard
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType
     */
    public function getOldCreditCard()
    {
        return $this->oldCreditCard;
    }

    /**
     * Sets a new oldCreditCard
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $oldCreditCard
     * @return self
     */
    public function setOldCreditCard(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $oldCreditCard)
    {
        $this->oldCreditCard = $oldCreditCard;
        return $this;
    }

}

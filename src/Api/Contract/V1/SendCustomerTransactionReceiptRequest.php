<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing SendCustomerTransactionReceiptRequest
 */
class SendCustomerTransactionReceiptRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $transId
     */
    private $transId = null;

    /**
     * @property string $customerEmail
     */
    private $customerEmail = null;

    /**
     * @property EmailSettingsType $emailSettings
     */
    private $emailSettings = null;

    /**
     * Gets as transId
     *
     * @return string
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * Sets a new transId
     *
     * @param string $transId
     * @return self
     */
    public function setTransId($transId)
    {
        $this->transId = $transId;
        return $this;
    }

    /**
     * Gets as customerEmail
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Sets a new customerEmail
     *
     * @param string $customerEmail
     * @return self
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    /**
     * Gets as emailSettings
     *
     * @return EmailSettingsType
     */
    public function getEmailSettings()
    {
        return $this->emailSettings;
    }

    /**
     * Sets a new emailSettings
     *
     * @param EmailSettingsType $emailSettings
     * @return self
     */
    public function setEmailSettings(EmailSettingsType $emailSettings)
    {
        $this->emailSettings = $emailSettings;
        return $this;
    }

}

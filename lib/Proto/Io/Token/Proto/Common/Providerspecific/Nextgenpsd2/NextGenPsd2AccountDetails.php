<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/nextgenpsd2.proto

namespace Io\Token\Proto\Common\Providerspecific\Nextgenpsd2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.nextgenpsd2.NextGenPsd2AccountDetails</code>
 */
class NextGenPsd2AccountDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string iban = 1;</code>
     */
    private $iban = '';
    /**
     * Generated from protobuf field <code>string bban = 2;</code>
     */
    private $bban = '';
    /**
     * Generated from protobuf field <code>string msisdn = 3;</code>
     */
    private $msisdn = '';
    /**
     * Generated from protobuf field <code>string currency = 4;</code>
     */
    private $currency = '';
    /**
     * Generated from protobuf field <code>string product = 5;</code>
     */
    private $product = '';
    /**
     * ExternalCashAccountType1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string cash_account_type = 6;</code>
     */
    private $cash_account_type = '';
    /**
     * Generated from protobuf field <code>string bic = 7;</code>
     */
    private $bic = '';
    /**
     * Generated from protobuf field <code>string linked_accounts = 8;</code>
     */
    private $linked_accounts = '';
    /**
     * Generated from protobuf field <code>string usuage = 9;</code>
     */
    private $usuage = '';
    /**
     * Generated from protobuf field <code>string details = 10;</code>
     */
    private $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iban
     *     @type string $bban
     *     @type string $msisdn
     *     @type string $currency
     *     @type string $product
     *     @type string $cash_account_type
     *           ExternalCashAccountType1Code from ISO 20022.
     *     @type string $bic
     *     @type string $linked_accounts
     *     @type string $usuage
     *     @type string $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Nextgenpsd2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string iban = 1;</code>
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Generated from protobuf field <code>string iban = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIban($var)
    {
        GPBUtil::checkString($var, True);
        $this->iban = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bban = 2;</code>
     * @return string
     */
    public function getBban()
    {
        return $this->bban;
    }

    /**
     * Generated from protobuf field <code>string bban = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBban($var)
    {
        GPBUtil::checkString($var, True);
        $this->bban = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msisdn = 3;</code>
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * Generated from protobuf field <code>string msisdn = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMsisdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->msisdn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string currency = 4;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Generated from protobuf field <code>string currency = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product = 5;</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Generated from protobuf field <code>string product = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->product = $var;

        return $this;
    }

    /**
     * ExternalCashAccountType1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string cash_account_type = 6;</code>
     * @return string
     */
    public function getCashAccountType()
    {
        return $this->cash_account_type;
    }

    /**
     * ExternalCashAccountType1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string cash_account_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCashAccountType($var)
    {
        GPBUtil::checkString($var, True);
        $this->cash_account_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bic = 7;</code>
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Generated from protobuf field <code>string bic = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBic($var)
    {
        GPBUtil::checkString($var, True);
        $this->bic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string linked_accounts = 8;</code>
     * @return string
     */
    public function getLinkedAccounts()
    {
        return $this->linked_accounts;
    }

    /**
     * Generated from protobuf field <code>string linked_accounts = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedAccounts($var)
    {
        GPBUtil::checkString($var, True);
        $this->linked_accounts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string usuage = 9;</code>
     * @return string
     */
    public function getUsuage()
    {
        return $this->usuage;
    }

    /**
     * Generated from protobuf field <code>string usuage = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUsuage($var)
    {
        GPBUtil::checkString($var, True);
        $this->usuage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string details = 10;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>string details = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

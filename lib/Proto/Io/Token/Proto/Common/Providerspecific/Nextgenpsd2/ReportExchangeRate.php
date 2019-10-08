<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/nextgenpsd2.proto

namespace Io\Token\Proto\Common\Providerspecific\Nextgenpsd2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.nextgenpsd2.ReportExchangeRate</code>
 */
class ReportExchangeRate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string source_currency = 1;</code>
     */
    private $source_currency = '';
    /**
     * Generated from protobuf field <code>string exchange_rate = 2;</code>
     */
    private $exchange_rate = '';
    /**
     * Generated from protobuf field <code>string unit_currency = 3;</code>
     */
    private $unit_currency = '';
    /**
     * Generated from protobuf field <code>string target_currency = 4;</code>
     */
    private $target_currency = '';
    /**
     * Generated from protobuf field <code>string quotation_date = 5;</code>
     */
    private $quotation_date = '';
    /**
     * Generated from protobuf field <code>string contract_identification = 6;</code>
     */
    private $contract_identification = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_currency
     *     @type string $exchange_rate
     *     @type string $unit_currency
     *     @type string $target_currency
     *     @type string $quotation_date
     *     @type string $contract_identification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Nextgenpsd2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string source_currency = 1;</code>
     * @return string
     */
    public function getSourceCurrency()
    {
        return $this->source_currency;
    }

    /**
     * Generated from protobuf field <code>string source_currency = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string exchange_rate = 2;</code>
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->exchange_rate;
    }

    /**
     * Generated from protobuf field <code>string exchange_rate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExchangeRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->exchange_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string unit_currency = 3;</code>
     * @return string
     */
    public function getUnitCurrency()
    {
        return $this->unit_currency;
    }

    /**
     * Generated from protobuf field <code>string unit_currency = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit_currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string target_currency = 4;</code>
     * @return string
     */
    public function getTargetCurrency()
    {
        return $this->target_currency;
    }

    /**
     * Generated from protobuf field <code>string target_currency = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string quotation_date = 5;</code>
     * @return string
     */
    public function getQuotationDate()
    {
        return $this->quotation_date;
    }

    /**
     * Generated from protobuf field <code>string quotation_date = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQuotationDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->quotation_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contract_identification = 6;</code>
     * @return string
     */
    public function getContractIdentification()
    {
        return $this->contract_identification;
    }

    /**
     * Generated from protobuf field <code>string contract_identification = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setContractIdentification($var)
    {
        GPBUtil::checkString($var, True);
        $this->contract_identification = $var;

        return $this;
    }

}

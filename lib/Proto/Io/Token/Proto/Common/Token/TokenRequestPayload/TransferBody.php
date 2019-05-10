<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token\TokenRequestPayload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.token.TokenRequestPayload.TransferBody</code>
 */
class TransferBody extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
     */
    private $currency = '';
    /**
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 2;</code>
     */
    private $amount = '';
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 3;</code>
     */
    private $destinations;
    /**
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 4;</code>
     */
    private $lifetime_amount = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $currency
     *           Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *     @type string $amount
     *           Optional: Single token charge request acceptable range. Double.
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $destinations
     *     @type string $lifetime_amount
     *           Optional: Token total lifetime amount. Double.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Optional: ISO4217, 3 letter currency code such as "USD" or "EUR".
     *
     * Generated from protobuf field <code>string currency = 1;</code>
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
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 2;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Optional: Single token charge request acceptable range. Double.
     *
     * Generated from protobuf field <code>string amount = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 3;</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint::class);
        $this->destinations = $arr;

        return $this;
    }

    /**
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 4;</code>
     * @return string
     */
    public function getLifetimeAmount()
    {
        return $this->lifetime_amount;
    }

    /**
     * Optional: Token total lifetime amount. Double.
     *
     * Generated from protobuf field <code>string lifetime_amount = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLifetimeAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->lifetime_amount = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferBody::class, \Io\Token\Proto\Common\Token\TokenRequestPayload_TransferBody::class);

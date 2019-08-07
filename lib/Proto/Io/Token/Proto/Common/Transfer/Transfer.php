<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transfer.proto

namespace Io\Token\Proto\Common\Transfer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transfer record as persisted on the ledger.
 *
 * Generated from protobuf message <code>io.token.proto.common.transfer.Transfer</code>
 */
class Transfer extends \Google\Protobuf\Internal\Message
{
    /**
     * Computed as the hash of the transfer payload.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Bank transaction reference id.
     *
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     */
    private $transaction_id = '';
    /**
     * Generated from protobuf field <code>int64 created_at_ms = 3;</code>
     */
    private $created_at_ms = 0;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transfer.TransferPayload payload = 4;</code>
     */
    private $payload = null;
    /**
     * Signatures
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.Signature payload_signatures = 5;</code>
     */
    private $payload_signatures;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.TransactionStatus status = 6;</code>
     */
    private $status = 0;
    /**
     * Currency Ledger order id.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     */
    private $order_id = '';
    /**
     * Instant (currency ledger) or default
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer.Method method = 8;</code>
     */
    private $method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Computed as the hash of the transfer payload.
     *     @type string $transaction_id
     *           Bank transaction reference id.
     *     @type int|string $created_at_ms
     *     @type \Io\Token\Proto\Common\Transfer\TransferPayload $payload
     *     @type \Io\Token\Proto\Common\Security\Signature[]|\Google\Protobuf\Internal\RepeatedField $payload_signatures
     *           Signatures
     *     @type int $status
     *     @type string $order_id
     *           Currency Ledger order id.
     *     @type int $method
     *           Instant (currency ledger) or default
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Computed as the hash of the transfer payload.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Computed as the hash of the transfer payload.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Bank transaction reference id.
     *
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Bank transaction reference id.
     *
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created_at_ms = 3;</code>
     * @return int|string
     */
    public function getCreatedAtMs()
    {
        return $this->created_at_ms;
    }

    /**
     * Generated from protobuf field <code>int64 created_at_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_at_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transfer.TransferPayload payload = 4;</code>
     * @return \Io\Token\Proto\Common\Transfer\TransferPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transfer.TransferPayload payload = 4;</code>
     * @param \Io\Token\Proto\Common\Transfer\TransferPayload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Transfer\TransferPayload::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Signatures
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.Signature payload_signatures = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayloadSignatures()
    {
        return $this->payload_signatures;
    }

    /**
     * Signatures
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.security.Signature payload_signatures = 5;</code>
     * @param \Io\Token\Proto\Common\Security\Signature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayloadSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Security\Signature::class);
        $this->payload_signatures = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.TransactionStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.TransactionStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Transaction\TransactionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Currency Ledger order id.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Currency Ledger order id.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Instant (currency ledger) or default
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer.Method method = 8;</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Instant (currency ledger) or default
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer.Method method = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Transfer\Transfer_Method::class);
        $this->method = $var;

        return $this;
    }

}


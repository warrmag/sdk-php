<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetTransactionResponse</code>
 */
class GetTransactionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.Transaction transaction = 1;</code>
     */
    private $transaction = null;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.RequestStatus status = 2;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Transaction\Transaction $transaction
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.Transaction transaction = 1;</code>
     * @return \Io\Token\Proto\Common\Transaction\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.Transaction transaction = 1;</code>
     * @param \Io\Token\Proto\Common\Transaction\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Transaction\Transaction::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.RequestStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.RequestStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Transaction\RequestStatus::class);
        $this->status = $var;

        return $this;
    }

}


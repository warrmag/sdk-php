<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.VerifyAliasOnBehalfRequest</code>
 */
class VerifyAliasOnBehalfRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Bank ID of verifier
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     */
    private $bank_id = '';
    /**
     * Payload containing memberId and alias
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.VerifyAliasPayload payload = 2;</code>
     */
    private $payload = null;
    /**
     * Signature of the verify alias payload
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 3;</code>
     */
    private $signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_id
     *           Bank ID of verifier
     *     @type \Io\Token\Proto\Common\Alias\VerifyAliasPayload $payload
     *           Payload containing memberId and alias
     *     @type \Io\Token\Proto\Common\Security\Signature $signature
     *           Signature of the verify alias payload
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Bank ID of verifier
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Bank ID of verifier
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_id = $var;

        return $this;
    }

    /**
     * Payload containing memberId and alias
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.VerifyAliasPayload payload = 2;</code>
     * @return \Io\Token\Proto\Common\Alias\VerifyAliasPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Payload containing memberId and alias
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.VerifyAliasPayload payload = 2;</code>
     * @param \Io\Token\Proto\Common\Alias\VerifyAliasPayload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Alias\VerifyAliasPayload::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Signature of the verify alias payload
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 3;</code>
     * @return \Io\Token\Proto\Common\Security\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Signature of the verify alias payload
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 3;</code>
     * @param \Io\Token\Proto\Common\Security\Signature $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Security\Signature::class);
        $this->signature = $var;

        return $this;
    }

}


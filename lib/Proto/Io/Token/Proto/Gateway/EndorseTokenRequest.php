<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.EndorseTokenRequest</code>
 */
class EndorseTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of token to endorse
     *
     * Generated from protobuf field <code>string token_id = 1;</code>
     */
    private $token_id = '';
    /**
     * Signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 2;</code>
     */
    private $signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token_id
     *           The id of token to endorse
     *     @type \Io\Token\Proto\Common\Security\Signature $signature
     *           Signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of token to endorse
     *
     * Generated from protobuf field <code>string token_id = 1;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * The id of token to endorse
     *
     * Generated from protobuf field <code>string token_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * Signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 2;</code>
     * @return \Io\Token\Proto\Common\Security\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature signature = 2;</code>
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

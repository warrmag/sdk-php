<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: security.proto

namespace Io\Token\Proto\Common\Security;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.security.Signature</code>
 */
class Signature extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of signing member
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    private $member_id = '';
    /**
     * ID of public key to verify signature
     *
     * Generated from protobuf field <code>string key_id = 2;</code>
     */
    private $key_id = '';
    /**
     * signature
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     */
    private $signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     *           ID of signing member
     *     @type string $key_id
     *           ID of public key to verify signature
     *     @type string $signature
     *           signature
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Security::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of signing member
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * ID of signing member
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * ID of public key to verify signature
     *
     * Generated from protobuf field <code>string key_id = 2;</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * ID of public key to verify signature
     *
     * Generated from protobuf field <code>string key_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

    /**
     * signature
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * signature
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

}


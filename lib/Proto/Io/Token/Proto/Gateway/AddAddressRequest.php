<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.AddAddressRequest</code>
 */
class AddAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * display name, such as "Office"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * shipping address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     */
    private $address = null;
    /**
     * signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature address_signature = 3;</code>
     */
    private $address_signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           display name, such as "Office"
     *     @type \Io\Token\Proto\Common\Address\Address $address
     *           shipping address
     *     @type \Io\Token\Proto\Common\Security\Signature $address_signature
     *           signature
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * display name, such as "Office"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * display name, such as "Office"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * shipping address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @return \Io\Token\Proto\Common\Address\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * shipping address
     *
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @param \Io\Token\Proto\Common\Address\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Address\Address::class);
        $this->address = $var;

        return $this;
    }

    /**
     * signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature address_signature = 3;</code>
     * @return \Io\Token\Proto\Common\Security\Signature
     */
    public function getAddressSignature()
    {
        return $this->address_signature;
    }

    /**
     * signature
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Signature address_signature = 3;</code>
     * @param \Io\Token\Proto\Common\Security\Signature $var
     * @return $this
     */
    public function setAddressSignature($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Security\Signature::class);
        $this->address_signature = $var;

        return $this;
    }

}


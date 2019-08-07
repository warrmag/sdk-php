<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: member.proto

namespace Io\Token\Proto\Common\Member;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.member.ReceiptContact</code>
 */
class ReceiptContact extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string value = 1 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $value = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.member.ReceiptContact.Type type = 2;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string value = 1 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 1 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.member.ReceiptContact.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.member.ReceiptContact.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Member\ReceiptContact_Type::class);
        $this->type = $var;

        return $this;
    }

}


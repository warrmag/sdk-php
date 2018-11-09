<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: member.proto

namespace Io\Token\Proto\Common\Member\MemberRecoveryOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.member.MemberRecoveryOperation.Authorization</code>
 */
class Authorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    private $member_id = '';
    /**
     * Generated from protobuf field <code>string prev_hash = 2;</code>
     */
    private $prev_hash = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.security.Key member_key = 3;</code>
     */
    private $member_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     *     @type string $prev_hash
     *     @type \Io\Token\Proto\Common\Security\Key $member_key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
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
     * Generated from protobuf field <code>string prev_hash = 2;</code>
     * @return string
     */
    public function getPrevHash()
    {
        return $this->prev_hash;
    }

    /**
     * Generated from protobuf field <code>string prev_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrevHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->prev_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.security.Key member_key = 3;</code>
     * @return \Io\Token\Proto\Common\Security\Key
     */
    public function getMemberKey()
    {
        return $this->member_key;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.security.Key member_key = 3;</code>
     * @param \Io\Token\Proto\Common\Security\Key $var
     * @return $this
     */
    public function setMemberKey($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Security\Key::class);
        $this->member_key = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Authorization::class, \Io\Token\Proto\Common\Member\MemberRecoveryOperation_Authorization::class);

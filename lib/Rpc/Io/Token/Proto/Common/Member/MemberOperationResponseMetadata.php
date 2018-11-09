<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: member.proto

namespace Io\Token\Proto\Common\Member;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata associated with MemberUpdateResponse.
 *
 * Generated from protobuf message <code>io.token.proto.common.member.MemberOperationResponseMetadata</code>
 */
class MemberOperationResponseMetadata extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Member\MemberOperationResponseMetadata\AddAliasResponseMetadata $add_alias_response_metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.member.MemberOperationResponseMetadata.AddAliasResponseMetadata add_alias_response_metadata = 1;</code>
     * @return \Io\Token\Proto\Common\Member\MemberOperationResponseMetadata\AddAliasResponseMetadata
     */
    public function getAddAliasResponseMetadata()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.member.MemberOperationResponseMetadata.AddAliasResponseMetadata add_alias_response_metadata = 1;</code>
     * @param \Io\Token\Proto\Common\Member\MemberOperationResponseMetadata\AddAliasResponseMetadata $var
     * @return $this
     */
    public function setAddAliasResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Member\MemberOperationResponseMetadata_AddAliasResponseMetadata::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

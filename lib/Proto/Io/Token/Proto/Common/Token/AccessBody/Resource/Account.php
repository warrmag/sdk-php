<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token\AccessBody\Resource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides access to basic info about a specific member account
 * (can call getAccount() on this account).
 *
 * Generated from protobuf message <code>io.token.proto.common.token.AccessBody.Resource.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of account
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    private $account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *           ID of account
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of account
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * ID of account
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, \Io\Token\Proto\Common\Token\AccessBody_Resource_Account::class);


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transferinstructions.proto

namespace Io\Token\Proto\Common\Transferinstructions\TransferDestination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ACH transfer
 *
 * Generated from protobuf message <code>io.token.proto.common.transferinstructions.TransferDestination.Ach</code>
 */
class Ach extends \Google\Protobuf\Internal\Message
{
    /**
     * Routing number
     *
     * Generated from protobuf field <code>string routing = 1;</code>
     */
    private $routing = '';
    /**
     * Generated from protobuf field <code>string account = 2;</code>
     */
    private $account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $routing
     *           Routing number
     *     @type string $account
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transferinstructions::initOnce();
        parent::__construct($data);
    }

    /**
     * Routing number
     *
     * Generated from protobuf field <code>string routing = 1;</code>
     * @return string
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Routing number
     *
     * Generated from protobuf field <code>string routing = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRouting($var)
    {
        GPBUtil::checkString($var, True);
        $this->routing = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account = 2;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>string account = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Ach::class, \Io\Token\Proto\Common\Transferinstructions\TransferDestination_Ach::class);

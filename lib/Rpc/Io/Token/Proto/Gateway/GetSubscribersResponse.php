<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetSubscribersResponse</code>
 */
class GetSubscribersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * notification subscriber info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.subscriber.Subscriber subscribers = 1;</code>
     */
    private $subscribers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Subscriber\Subscriber[]|\Google\Protobuf\Internal\RepeatedField $subscribers
     *           notification subscriber info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * notification subscriber info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.subscriber.Subscriber subscribers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * notification subscriber info
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.subscriber.Subscriber subscribers = 1;</code>
     * @param \Io\Token\Proto\Common\Subscriber\Subscriber[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscribers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Subscriber\Subscriber::class);
        $this->subscribers = $arr;

        return $this;
    }

}

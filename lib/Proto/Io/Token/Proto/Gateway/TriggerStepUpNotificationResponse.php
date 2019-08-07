<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.TriggerStepUpNotificationResponse</code>
 */
class TriggerStepUpNotificationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * was notification accepted?
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotifyStatus status = 1;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           was notification accepted?
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * was notification accepted?
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotifyStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * was notification accepted?
     *
     * Generated from protobuf field <code>.io.token.proto.common.notification.NotifyStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Notification\NotifyStatus::class);
        $this->status = $var;

        return $this;
    }

}


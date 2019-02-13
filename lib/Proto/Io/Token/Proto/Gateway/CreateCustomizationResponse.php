<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.CreateCustomizationResponse</code>
 */
class CreateCustomizationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string customization_id = 1;</code>
     */
    private $customization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customization_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string customization_id = 1;</code>
     * @return string
     */
    public function getCustomizationId()
    {
        return $this->customization_id;
    }

    /**
     * Generated from protobuf field <code>string customization_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomizationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customization_id = $var;

        return $this;
    }

}


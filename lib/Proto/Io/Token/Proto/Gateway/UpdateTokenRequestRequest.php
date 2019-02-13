<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.UpdateTokenRequestRequest</code>
 */
class UpdateTokenRequestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestOptions request_options = 2;</code>
     */
    private $request_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type \Io\Token\Proto\Common\Token\TokenRequestOptions $request_options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestOptions request_options = 2;</code>
     * @return \Io\Token\Proto\Common\Token\TokenRequestOptions
     */
    public function getRequestOptions()
    {
        return $this->request_options;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestOptions request_options = 2;</code>
     * @param \Io\Token\Proto\Common\Token\TokenRequestOptions $var
     * @return $this
     */
    public function setRequestOptions($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenRequestOptions::class);
        $this->request_options = $var;

        return $this;
    }

}


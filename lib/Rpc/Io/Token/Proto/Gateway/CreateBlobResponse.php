<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.CreateBlobResponse</code>
 */
class CreateBlobResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of new blob
     *
     * Generated from protobuf field <code>string blob_id = 1;</code>
     */
    private $blob_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $blob_id
     *           ID of new blob
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of new blob
     *
     * Generated from protobuf field <code>string blob_id = 1;</code>
     * @return string
     */
    public function getBlobId()
    {
        return $this->blob_id;
    }

    /**
     * ID of new blob
     *
     * Generated from protobuf field <code>string blob_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBlobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->blob_id = $var;

        return $this;
    }

}

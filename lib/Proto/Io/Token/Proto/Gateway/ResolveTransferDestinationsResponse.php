<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.ResolveTransferDestinationsResponse</code>
 */
class ResolveTransferDestinationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 1;</code>
     */
    private $destinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $destinations
     * }
     */
    public function __construct($data = NULL) {
        \Io\Token\GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 1;</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint::class);
        $this->destinations = $arr;

        return $this;
    }

}


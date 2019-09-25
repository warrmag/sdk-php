<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: polishapi.proto

namespace Io\Token\Proto\Common\Providerspecific\Polishapi;

/**
 * Protobuf type <code>io.token.proto.common.providerspecific.polishapi.DeliveryMode</code>
 */
class DeliveryMode
{
    /**
     * Generated from protobuf enum <code>INVALID_DELIVERY_MODE = 0;</code>
     */
    const INVALID_DELIVERY_MODE = 0;
    /**
     * only applies to non-EEA destinations
     *
     * Generated from protobuf enum <code>STANDARD_D2 = 1;</code>
     */
    const STANDARD_D2 = 1;
    /**
     * only applies to EEA destinations
     *
     * Generated from protobuf enum <code>STANDARD_D1 = 2;</code>
     */
    const STANDARD_D1 = 2;
    /**
     * only applies to non-EEA destinations
     *
     * Generated from protobuf enum <code>URGENT_D1 = 3;</code>
     */
    const URGENT_D1 = 3;
    /**
     * applies to all destinations
     *
     * Generated from protobuf enum <code>EXPRESS_D0 = 4;</code>
     */
    const EXPRESS_D0 = 4;
}

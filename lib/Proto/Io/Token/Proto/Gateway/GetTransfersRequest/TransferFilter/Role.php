<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway\GetTransfersRequest\TransferFilter;

/**
 * Protobuf type <code>io.token.proto.gateway.GetTransfersRequest.TransferFilter.Role</code>
 */
class Role
{
    /**
     * Generated from protobuf enum <code>ANY = 0;</code>
     */
    const ANY = 0;
    /**
     * Generated from protobuf enum <code>PAYER = 1;</code>
     */
    const PAYER = 1;
    /**
     * Generated from protobuf enum <code>PAYEE = 2;</code>
     */
    const PAYEE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Role::class, \Io\Token\Proto\Gateway\GetTransfersRequest_TransferFilter_Role::class);

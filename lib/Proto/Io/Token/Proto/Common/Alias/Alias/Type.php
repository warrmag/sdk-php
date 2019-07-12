<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: alias.proto

namespace Io\Token\Proto\Common\Alias\Alias;

/**
 * Protobuf type <code>io.token.proto.common.alias.Alias.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>INVALID = 0;</code>
     */
    const INVALID = 0;
    /**
     * Unknown type. Useful for UI: For example, if user wants to pay "sandy&#64;example.com",
     * let server determine that's an EMAIL alias.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Email address. For example, "sandy&#64;example.com"
     *
     * Generated from protobuf enum <code>EMAIL = 2;</code>
     */
    const EMAIL = 2;
    /**
     * unused
     *
     * Generated from protobuf enum <code>PHONE = 3;</code>
     */
    const PHONE = 3;
    /**
     * unused
     *
     * Generated from protobuf enum <code>DOMAIN = 4;</code>
     */
    const DOMAIN = 4;
    /**
     * deprecated
     *
     * Generated from protobuf enum <code>USERNAME = 5;</code>
     */
    const USERNAME = 5;
    /**
     * for banks only
     *
     * Generated from protobuf enum <code>BANK = 6;</code>
     */
    const BANK = 6;
    /**
     * Custom type, for instance a bank specific customer ID.
     *
     * Generated from protobuf enum <code>CUSTOM = 7;</code>
     */
    const CUSTOM = 7;
    /**
     * The unique PSD2 auth number of the company that provides eIDAS certificate
     *
     * Generated from protobuf enum <code>EIDAS = 8;</code>
     */
    const EIDAS = 8;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Io\Token\Proto\Common\Alias\Alias_Type::class);


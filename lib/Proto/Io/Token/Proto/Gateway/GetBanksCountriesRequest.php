<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetBanksCountriesRequest</code>
 */
class GetBanksCountriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * (Optional) Filter by criteria in bank filter. Results must match all filter criteria.
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankFilter filter = 1;</code>
     */
    private $filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Bank\BankFilter $filter
     *           (Optional) Filter by criteria in bank filter. Results must match all filter criteria.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * (Optional) Filter by criteria in bank filter. Results must match all filter criteria.
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankFilter filter = 1;</code>
     * @return \Io\Token\Proto\Common\Bank\BankFilter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * (Optional) Filter by criteria in bank filter. Results must match all filter criteria.
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankFilter filter = 1;</code>
     * @param \Io\Token\Proto\Common\Bank\BankFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Bank\BankFilter::class);
        $this->filter = $var;

        return $this;
    }

}


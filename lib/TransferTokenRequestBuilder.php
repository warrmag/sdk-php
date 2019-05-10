<?php


namespace Tokenio;


use Io\Token\Proto\Common\Token\TokenRequestPayload\TransferBody;
use Io\Token\Proto\Common\Transferinstructions\TransferEndpoint;

class TransferTokenRequestBuilder extends TokenRequestBuilder
{
    public function __construct($amount, $currency)
    {
        parent::__construct(null);
        //parent::this = $this;
        $transferBody = new TransferBody();
        $transferBody->setLifetimeAmount($amount);
        $transferBody->setCurrency($currency);
        $this->requestPayload->setTransferBody($transferBody);
    }

    /**
     * Optional. Sets the destination country in order to narrow down
     * the country selection in the web-app UI.
     *
     * @param string destinationCountry destination country
     * @return TransferTokenRequestBuilder
     */
    public function setDestinationCountry($destinationCountry)
    {
        $this->requestPayload->setDestinationCountry($destinationCountry);
        return $this;
    }

    /**
     * Adds a transfer destination to a transfer token request.
     *
     * @param TransferEndpoint destination
     * @return TransferTokenRequestBuilder
     */
    public function addDestination($destination)
    {
        $this->requestPayload->getTransferBody()->getDestinations()[] = $destination;
        return $this;
    }

    /**
     * Sets the maximum amount per charge on a transfer token request.
     *
     * @param string chargeAmount
     * @return TransferTokenRequestBuilder
     */
    public function setChargeAmount($chargeAmount)
    {
        $this->requestPayload->getTransferBody()->setAmount($chargeAmount);
        return $this;
    }
}
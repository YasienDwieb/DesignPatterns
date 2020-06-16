<?php

namespace DesignPatterns\Factory\Logistics;

use DesignPatterns\Factory\Transport\ITransport;

abstract class Logistics
{
    public abstract function createTransport(): ITransport;

    public function planDelivery()
    {
        $shippingFacility = $this->createTransport();
        $shippingFacility->deliver();
    }

}
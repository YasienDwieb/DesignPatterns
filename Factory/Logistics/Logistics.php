<?php
namespace DesignPatterns\Factory\Logistics;

use DesignPatterns\Factory\Transport\ITransport;

class Logistics {
    public function createTransport() : ITransport {
        return new Truck();
    }
    
    public function planDelivery()
    {
        $shippingFacility = $this->createTransport();
        $shippingFacility->deliver();
    }

}
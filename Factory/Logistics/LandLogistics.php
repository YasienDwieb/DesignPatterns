<?php

namespace DesignPatterns\Factory\Logistics;

use DesignPatterns\Factory\Transport\{ITransport, Truck};

class LandLogistics extends Logistics {
    public function createTransport(): ITransport
    {
        return new Truck();
    }
}
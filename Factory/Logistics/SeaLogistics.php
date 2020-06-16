<?php


namespace DesignPatterns\Factory\Logistics;

use DesignPatterns\Factory\Transport\{ITransport, Ship};

class SeaLogistics extends Logistics
{
    public function createTransport(): ITransport
    {
        return new Ship();
    }
}
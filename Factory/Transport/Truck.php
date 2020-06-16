<?php

namespace DesignPatterns\Factory\Transport;

class Truck implements ITransport
{
    public function deliver()
    {
        echo 'I will deliver with truck';
    }
}
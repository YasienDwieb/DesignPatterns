<?php

namespace DesignPatterns\Factory\Transport;

class Ship implements ITransport
{
    public function deliver()
    {
        echo 'I will deliver with Ship';
    }
}
<?php

namespace DesignPatterns\AbstractFactory\Products;

class WinButton implements Button
{
    public function paint()
    {
        return 'I look like a Windows Button';
    }
}
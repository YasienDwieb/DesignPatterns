<?php

namespace DesignPatterns\AbstractFactory\Products;

class MacButton implements Button
{
    public function paint()
    {
        return 'I look like a Mac Button';
    }
}
<?php

namespace DesignPatterns\AbstractFactory\Products;

class MacTextBox implements TextBox
{
    public function paint()
    {
        return 'I look like a Mac TextBox';
    }
}
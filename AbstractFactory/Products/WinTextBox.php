<?php

namespace DesignPatterns\AbstractFactory\Products;

class WinTextBox implements TextBox
{
    public function paint()
    {
        return 'I look like a Windows TextBox';
    }
}
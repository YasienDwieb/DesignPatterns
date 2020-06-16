<?php

namespace DesignPatterns\AbstractFactory\Products;

class WinCheckBox implements CheckBox
{
    public function paint()
    {
        return 'I look like a Windows CheckBox';
    }
}
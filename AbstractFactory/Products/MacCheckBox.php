<?php

namespace DesignPatterns\AbstractFactory\Products;

class MacCheckBox implements CheckBox
{
    public function paint()
    {
        return 'I look like a Mac CheckBox';
    }
}
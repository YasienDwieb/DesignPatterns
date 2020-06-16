<?php

namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\{Button, CheckBox, MacButton, MacCheckBox, MacTextBox, TextBox};

class MacFactory implements GUIFactory
{

    public function createTextBox(): TextBox
    {
        return new MacTextBox();
    }

    public function createCheckBox(): CheckBox
    {
        return new MacCheckBox();
    }

    public function createButton(): Button
    {
        return new MacButton();
    }
}
<?php

namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\{Button, CheckBox, TextBox, WinButton, WinCheckBox, WinTextBox};

class WinFactory implements GUIFactory
{

    public function createTextBox(): TextBox
    {
        return new WinTextBox();
    }

    public function createCheckBox(): CheckBox
    {
        return new WinCheckBox();
    }

    public function createButton(): Button
    {
        return new WinButton();
    }
}
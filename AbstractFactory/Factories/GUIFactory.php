<?php

namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\{Button, CheckBox, TextBox};

interface GUIFactory
{
    public function createTextBox(): TextBox;

    public function createCheckBox(): CheckBox;

    public function createButton(): Button;
}
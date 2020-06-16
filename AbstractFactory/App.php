<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;
require_once '../vendor/autoload.php';

use DesignPatterns\AbstractFactory\Factories\{GUIFactory, WinFactory, MacFactory};

class App
{
    private $currentOS;

    public function __construct($currentOS)
    {
        $this->currentOS = $currentOS;
    }

    /**
     * @return GUIFactory
     * @throws \Exception
     */
    public function initialize(): GUIFactory
    {
        switch ($this->currentOS) {
            case "win":
                return new WinFactory();
            case "mac":
                return new MacFactory();
            default:
                throw new \Exception("This platform is not supported yet");
        }
    }
}

$app = new App("win");

try {
    $guiFactory = $app->initialize();
    echo "The textBox paints: " . $guiFactory->createTextBox()->paint() . "<br/>";
    echo "The checkbox paints: " . $guiFactory->createCheckBox()->paint() . "<br/>";
    echo "The button paints: " . $guiFactory->createButton()->paint() . "<br/>";
} catch (\Exception $e) {
    error_log('Error occurred: ' . $e->getMessage());
}
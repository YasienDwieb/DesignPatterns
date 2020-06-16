<?php
declare(strict_types=1);

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\Logistics\{Logistics, LandLogistics, SeaLogistics};

require_once '../vendor/autoload.php';

class App
{
    /**
     * @throws \Exception
     */
    private function initialize(): Logistics
    {
        $shippingEnvironment = "sea";

        switch ($shippingEnvironment) {
            case "land":
                return new LandLogistics();
                break;
            case "sea":
                return new SeaLogistics();
                break;
            default:
                throw new \Exception('This environment is not supported');
                break;
        }
    }

    public function main()
    {
        try {
            $shippingFacility = $this->initialize();
            $shippingFacility->planDelivery();
        } catch (\Exception $e) {
            error_log('Error occurred: ' . $e->getMessage());
        }
    }
}

$app = new App();
$app->main();
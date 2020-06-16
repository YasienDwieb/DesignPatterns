<?php
declare(strict_types=1);

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\Logistics\{Logistics, LandLogistics, SeaLogistics};

require_once '../vendor/autoload.php';

class App
{
    private Logistics $shippingFacility;

    /**
     * @throws \Exception
     */
    private function initialize()
    {
        $shippingEnvironment = "sea";

        switch ($shippingEnvironment) {
            case "land":
                $this->shippingFacility = new LandLogistics();
                break;
            case "sea":
                $this->shippingFacility = new SeaLogistics();
                break;
            default:
                throw new \Exception('This environment is not supported');
                break;
        }
    }

    public function main()
    {
        try {
            $this->initialize();
            $this->shippingFacility->planDelivery();
    } catch (\Exception $e) {
            error_log('Error occured: ' . $e->getMessage());
        }
    }
}

$app = new App();
$app->main();
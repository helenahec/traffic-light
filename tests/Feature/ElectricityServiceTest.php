<?php

namespace Tests\Feature;

use Tests\TestCase;

class ElectricityServiceTest extends TestCase

{
    public function test_live_api_fetches_carbon_intensity()

    {
        $service = new \App\Services\ElectricityService();
        $intensity = $service->getCarbonIntensity();

        $this->assertIsFloat($intensity); 
        $this->assertGreaterThan(0, $intensity); 

    }
    
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ElectricityService;

class TrafficLightCommand extends Command

{
    protected $signature = 'traffic:light';
    protected $description = 'Determine the traffic light based on carbon intensity';

    private $electricityService;

    public function __construct(ElectricityService $electricityService)

    {
        parent::__construct();

        $this->electricityService = $electricityService;
    }

    public function handle()

    {
        $intensity = $this->electricityService->getCarbonIntensity();

        if ($intensity === null) 
        {
            $this->error('Could not fetch carbon intensity.');

            return;
        }

        $status = $this->determineLight($intensity);

        $this->info("The traffic light is: $status");
    }

    private function determineLight(float $intensity): string
    
    {
        if ($intensity > 400) return 'red';
        if ($intensity < 200) return 'green';

        return 'yellow';
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;

class TrafficLightCommandTest extends TestCase

{

    public function test_command_outputs_correct_traffic_light_with_live_data()
    
    {
        $this->artisan('traffic:light')
            ->expectsOutputToContain('The traffic light is:')
            ->assertExitCode(0);
    }
}
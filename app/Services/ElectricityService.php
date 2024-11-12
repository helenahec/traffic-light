<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ElectricityService

{
    public function getCarbonIntensity(): ?float

    {
        $response = Http::withToken(env('ELECTRICITYMAPS_API_KEY'))
            ->get('https://api.electricitymap.org/v3/carbon-intensity/latest', [
                'zone' => 'DE',
            ]);

        if ($response->successful()) 
        
        {
            return $response->json()['carbonIntensity'] ?? null;
        }

        return null; 

    }
    
}

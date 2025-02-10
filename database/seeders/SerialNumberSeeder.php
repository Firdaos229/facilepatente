<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SerialNumber;

class SerialNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serialNumbers = [
            'NA325895500P', 'NA325895501P', 'NA325895502P', 'NA325895503P',
            'NA325895504P', 'NA325895505P', 'NA325895506P', 'NA325895507P',
            'NA325895508P', 'NA325895509P', 'NA325895510P', 'NA325895511P',
            'NA325895512P', 'NA325895513P', 'NA325895514P', 'NA325895515P',
            'NA325895516P', 'NA325895517P', 'NA325895518P', 'NA325895519P',
            'NA325895520P', 'NA325895521P', 'NA325895522P', 'NA325895523P',
            'NA325895524P', 'NA325895525P', 'NA325895526P', 'NA325895527P',
            'NA325895528P', 'NA325895529P', 'NA325895530P', 'NA325895531P',
            'NA325895532P', 'NA325895533P', 'NA325895534P', 'NA325895535P',
            'NA325895536P', 'NA325895537P', 'NA325895538P', 'NA325895539P',
            'NA325895540P', 'NA325895541P', 'NA325895542P', 'NA325895543P',
            'NA325895544P', 'NA325895545P', 'NA325895546P', 'NA325895547P',
            'NA325895548P', 'NA325895549P', 'NA325895550P', 'NA325895551P',
        ];
    
        foreach ($serialNumbers as $number) {
            SerialNumber::create([
                'serial_number' => $number,
            ]);
        }
    }
}

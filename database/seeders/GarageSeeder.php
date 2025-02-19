<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pincode;
use App\Models\Service;

class GarageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Pincodes
        $pincode1 = Pincode::create(['pincode' => '110001', 'garage_name' => 'Garage A', 'address' => 'Address A']);
        $pincode2 = Pincode::create(['pincode' => '560001', 'garage_name' => 'Garage B', 'address' => 'Address B']);

        // Create Services
        $service1 = Service::create(['name' => 'Car Repair']);
        $service2 = Service::create(['name' => 'Bike Service']);
        $service3 = Service::create(['name' => 'Oil Change']);

        // Attach services to pincodes
        $pincode1->services()->attach([$service1->id, $service2->id]);
        $pincode2->services()->attach([$service2->id, $service3->id]);
    }
}

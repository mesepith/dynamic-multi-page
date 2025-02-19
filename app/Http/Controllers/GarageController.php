<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pincode;

class GarageController extends Controller {
    public function home() {
        $defaultPincode = Pincode::first(); // Get the first pincode as default
        $services = $defaultPincode->services ?? collect();
        $allPincodes = Pincode::all(); // Get all pincodes

        return view('home', compact('defaultPincode', 'services', 'allPincodes'));
    }

    public function pincode($pincode) {
        $selectedPincode = Pincode::where('pincode', $pincode)->firstOrFail();
        $services = $selectedPincode->services;
        $allPincodes = Pincode::all(); // Get all pincodes

        return view('pincode', compact('selectedPincode', 'services', 'allPincodes'));
    }
}


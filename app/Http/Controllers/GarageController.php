<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pincode;

class GarageController extends Controller {
    public function show($pincode = null) {
        $allPincodes = Pincode::all(); // Get all pincodes
        
        if ($pincode) {
            $selectedPincode = Pincode::where('pincode', $pincode)->firstOrFail();
        } else {
            $selectedPincode = Pincode::first(); // Default pincode
        }
        
        $services = $selectedPincode->services ?? collect();

        return view('garage', compact('selectedPincode', 'services', 'allPincodes'));
    }
}


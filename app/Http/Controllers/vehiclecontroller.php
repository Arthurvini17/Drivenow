<?php

namespace App\Http\Controllers;

use App\Livewire\Vehicle;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class vehiclecontroller extends Controller
{
    // public function index()
    // {
    //     $vehicles = Vehicles::all();
    //     return view('livewire.vehicle', ['vehicles' => $vehicles]);
    // }





    public function show($id)
    {
        $vehicles = Vehicles::find($id);
        return view('livewire.show-vehicle', ['vehicles' => $vehicles]);
    }


    public function create()
    {
        return view('livewire.create_vehicle');
    }
}

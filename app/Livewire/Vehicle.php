<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Component;

class Vehicle extends Component
{

    public $vehicles;



    public function render(Vehicles $vehicles)
    {
        $this->vehicles = Vehicles::all();
        return view('livewire.vehicle', ['vehicles' => $vehicles]);
    }


    // public function show($vehicles){
    //    $vehicles = Vehicles::find($id);
    //     return view('livewire.show-vehicle', ['vehicle' => $vehicles]);
    // }
}

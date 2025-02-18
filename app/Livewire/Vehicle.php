<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicle extends Component
{

    //inicia a variavel search

    public $search = '';

    use WithPagination;

      public function render()
    {
        return view('livewire.vehicle', ['vehicles' => Vehicles::where('name_vehicle', 'like', '%' .  $this->search . '%')->paginate(10)
    ]);
    }


    // public function show($vehicles){
    //    $vehicles = Vehicles::find($id);
    //     return view('livewire.show-vehicle', ['vehicle' => $vehicles]);
    // }
}

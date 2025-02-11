<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicle extends Component
{


    use WithPagination;

    public function render()
    {
        // Aqui, $vehicles é uma variável local, não uma propriedade do componente.
        $vehicles = Vehicles::paginate(5);

        return view('livewire.vehicle', ['vehicles' => $vehicles]);
    }


    // public function show($vehicles){
    //    $vehicles = Vehicles::find($id);
    //     return view('livewire.show-vehicle', ['vehicle' => $vehicles]);
    // }
}

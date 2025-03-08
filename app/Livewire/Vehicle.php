<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicle extends Component
{

  //inicia a variavel search
  public $search = '';


  public function render()
  {
    return view('livewire.vehicle', [
      'vehicles' => Vehicles::where('model', 'like', '%' .  $this->search . '%')
        ->orWhere('marca', 'like', '%' . $this->search . '%')
        ->latest()->paginate(4)
    ]);
  }


  // public function show($vehicles){
  //    $vehicles = Vehicles::find($id);
  //     return view('livewire.show-vehicle', ['vehicle' => $vehicles]);
  // }
}

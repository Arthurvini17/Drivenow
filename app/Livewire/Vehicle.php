<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicle extends Component
{

  //inicia a variavel search

  public $search = '';

  public $model, $marca, $year, $price, $description;

  use WithPagination;


  protected $rules = [
    'model' => 'required',
    'marca' => 'required',
    'year' => 'required',
    'price' => 'required',
    'description' => 'nullable',
  ];

  public function store_vehicle()
  {
    $validatedData = $this->validate();

    Vehicles::create($validatedData);

    $this->reset();

    session()->flash('message', 'Veículo cadastrado com sucesso!');
    dd($validatedData);
  }



  public function render()
  {
    return view('livewire.vehicle', [
      'vehicles' => Vehicles::where('model', 'like', '%' .  $this->search . '%')->paginate(4)
    ]);
  }


  // public function show($vehicles){
  //    $vehicles = Vehicles::find($id);
  //     return view('livewire.show-vehicle', ['vehicle' => $vehicles]);
  // }
}

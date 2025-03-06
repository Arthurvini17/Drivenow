<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateVehicle extends Component
{



    #[Validate('required', message: 'Coloque o modelo do seu veiculo')]
    public $model = '';

    #[Validate('required', message: 'Coloque a marca do veiculo')]
    public $marca = '';

    #[Validate('required', message: 'Preencha com o ano do veiculo')]
    public $year = '';

    #[Validate('required', message: 'Coloque o preço do seu veiculo')]
    public $price = '';

    #[Validate('required', message: 'Coloque uma descrição para seu veiculo. Ex: avarias detalhes etc...')]
    public $description;





    public function store_vehicle()
    {
        $validated = $this->validate();
        Vehicles::create($validated);
    }



    public function render()
    {
        return view('livewire.create-vehicle');
    }
}

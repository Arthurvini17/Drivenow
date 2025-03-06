<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVehicle extends Component
{
    use WithFileUploads;


    #[Validate('required', message: 'Coloque uma imagens do seu veiculo')]
    public $image = '';

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
        $imagePath = $this->image->store('images', 'public');

        $this->validate();


        auth()->user()->vehicles()->create([
            'image' => $this->$imagePath,
            'year' => $this->year,
            'marca' => $this->marca,
            'price' => $this->price,
            'description' => $this->description,
            'model' => $this->model,
        ]);

        return redirect()->route('home.index');
    }



    public function render()
    {
        return view('livewire.create-vehicle');
    }
}

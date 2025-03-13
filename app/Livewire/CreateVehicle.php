<?php

namespace App\Livewire;

use App\Models\Vehicles;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVehicle extends Component
{
    use WithFileUploads;


    #[Validate('required', message: 'Coloque uma imagen do seu veiculo')]

    public $image = '';

    #[Validate('required', message: 'Coloque o modelo do seu veiculo')]
    #[Validate('max:50', message: 'Texto maior que o permitido')]
    public $model = '';

    #[Validate('required', message: 'Coloque a marca do veiculo')]
    #[Validate('max:50', message: 'Texto maior que o permitido')]
    public $marca = '';

    #[Validate('required', message: 'Preencha com o ano do veiculo')]
    public $year = '';

    #[Validate('required', message: 'Coloque o preço do seu veiculo')]
    public $price = '';

    #[Validate('required', message: 'Coloque uma descrição para seu veiculo. Ex: avarias detalhes etc...')]
    #[Validate('max:300', message: 'Maximo de caracteres permitido: :max')]

    public $description;





    public function store_vehicle()
    {
        //salvando a imagem na pasta public 
        if ($this->image) {
            $imagePath = $this->image->store('images', 'public');

            $validated['image'] = $imagePath;
        }

        //valida os dados de acordo com os validates passado
        $validated = $this->validate();

        //criaçaõ do veiculo apenas com usuarios logados
        auth()->user()->vehicles()->create([
            'image' => $imagePath,
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

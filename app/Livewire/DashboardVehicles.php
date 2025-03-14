<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Vehicles;
use Livewire\WithPagination;

use function Pest\Laravel\delete;

class DashboardVehicles extends Component
{


    use WithPagination;


    public function deleteVehicles($vehicleId)
    {
        $vehicle = Vehicles::find($vehicleId);

        if ($vehicle) {
            $vehicle->delete();
        }
    }


    public function render()
    {

        $user = auth()->user(); //obtem o usuario autenticado
        $vehicles = $user->vehicles()->paginate(5); //buscando veiculos associado ao usuario

        return view('livewire.dashboard-vehicles', ['vehicles' => $vehicles]);
    }
}

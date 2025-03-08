<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class DashboardVehicles extends Component
{



    public function render()
    {

        $user = auth()->user(); //obtem o usuario autenticado
        $vehicles = $user->vehicles; //buscando veiculos associado ao usuario
        return view('livewire.dashboard-vehicles', ['vehicles' => $vehicles]);
    }
}

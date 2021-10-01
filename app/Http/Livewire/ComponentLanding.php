<?php

namespace App\Http\Livewire;

use App\Models\Empresas;
use Livewire\Component;

class ComponentLanding extends Component
{
    public function render()
    {
        return view('livewire.component-landing', ['Empresas' => $this->index()]);
    }

    public function index()
    {
        $empresa = Empresas::all();
        return $empresa;
    }
}

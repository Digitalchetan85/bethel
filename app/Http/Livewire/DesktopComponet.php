<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DesktopComponet extends Component
{
    public function render()
    {
        return view('livewire.desktop-componet')->layout('layouts.base');
    }
}

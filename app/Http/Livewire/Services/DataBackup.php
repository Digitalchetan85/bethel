<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class DataBackup extends Component
{
    public function render()
    {
        return view('livewire.services.data-backup')->layout('layouts.base');
    }
}

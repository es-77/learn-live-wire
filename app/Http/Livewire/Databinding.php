<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Databinding extends Component
{
    public $name = "Emmanuel";

    public function render()
    {
        return view('livewire.databinding');
    }
}
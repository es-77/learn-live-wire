<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public  $name = "Emmanuel";
    public  $lastName = "Saleem";
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.clicker');
    }
}
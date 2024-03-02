<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PassDatatoComponentsMount extends Component
{
    public $name, $age;

    public function  mount($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function render()
    {
        return view('livewire.pass-datato-components-mount');
    }
}

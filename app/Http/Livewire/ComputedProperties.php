<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Computed;

class ComputedProperties extends Component
{
    #[Computed()]
    // #[Computed]
    public function users()
    {
        return User::all();
    }
    public function render()
    {
        return view('livewire.computed-properties');
    }
}

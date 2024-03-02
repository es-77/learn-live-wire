<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Livepropertyupdate extends Component
{
    public $name = '';
    public function render()
    {
        $users = User::where('name', 'like', $this->name . '%')->get();
        return view('livewire.livepropertyupdate', [
            'users' => $users
        ]);
    }
}

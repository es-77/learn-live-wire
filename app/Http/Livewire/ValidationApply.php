<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ValidationApply extends Component
{
    public $name, $email, $password;
    public function createUser()
    {
        $this->validate([
            'name' => ['required'],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => ['required']
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
    }
    public function render()
    {
        $users =  User::all();
        return view('livewire.validation-apply', [
            "users" => $users
        ]);
    }
}
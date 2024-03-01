<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class RuntimevalidationApply extends Component
{
    public $name;
    public $email;
    public $password;
    public function createUser()
    {
        $this->validate($this->validationField());
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
    }
    public function updated($field)
    {
        $this->validateOnly($field, $this->validationField());
    }

    public function validationField()
    {
        return [
            'name' => ['required'],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => ['required']
        ];
    }
    public function render()
    {
        $users =  User::all();
        return view('livewire.runtimevalidation-apply', [
            'users' => $users
        ]);
    }
}
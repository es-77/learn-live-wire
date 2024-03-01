<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EventCommunicationComponentsUserCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public function createUser()
    {
        $this->validate($this->validationField());
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        $this->reset(["name", "email", "password"]);
        session()->flash('message', 'Usuario Creado Correctamente');
        // $this->dispatch('user-created');
        // $this->dispatch('user-created', $user);
        $this->emit('user-created', $user);
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
        return view('livewire.event-communication-components-user-create');
    }
}
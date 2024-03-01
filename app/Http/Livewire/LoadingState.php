<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoadingState extends Component
{
    use WithFileUploads;

    public $name, $email, $password, $image, $filePath;
    public function createUser()
    {
        $this->validate([
            'name' => ['required'],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => ['required'],
            'image' => ['required']
        ]);
        if ($this->image) {
            $this->filePath = $this->image->store('upload', 'public');
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'file' => $this->filePath,
            'password' => bcrypt($this->password)
        ]);
    }
    public function render()
    {
        return view('livewire.loading-state');
    }
}
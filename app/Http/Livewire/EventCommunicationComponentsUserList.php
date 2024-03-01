<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\on;

class EventCommunicationComponentsUserList extends Component
{
    use WithPagination;

    // public $users = [];

    // #[on('user-created')]
    // public function updatelist($user = null)
    // {
    //     dd(123);
    //     // Refresh the list of users
    //     $this->resetPage();
    // }

    protected $listeners = ['user-created' => 'updatelist'];

    public function updatelist($user)
    {
        $this->resetPage();
        // dd(123);
        // $this->users[] = $user;
        // $this->resetPage();
    }

    public function render()
    {
        return view(
            'livewire.event-communication-components-user-list',
            [
                'users' => User::paginate(2)
            ]
        );
    }
}
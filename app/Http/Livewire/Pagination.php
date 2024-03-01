<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::paginate(2);
        return view('livewire.pagination', [
            'users' => $users
        ]);
    }
}
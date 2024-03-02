<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PollingRefesh extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.polling-refesh', [
            'users' => User::paginate(2)
        ]);
    }
}

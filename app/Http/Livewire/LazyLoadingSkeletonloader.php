<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LazyLoadingSkeletonloader extends Component
{
    public function placeholder()
    {
        return view('placeholder');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.lazy-loading-skeletonloader', compact('users'));
    }
}
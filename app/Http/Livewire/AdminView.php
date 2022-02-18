<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminView extends Component
{
    public $users, $complaints;

    public function render()
    {
        return view('livewire.admin-view')->with([
            'users', $this->users,
            'complaints', $this->complaints,
        ]);
    }
}

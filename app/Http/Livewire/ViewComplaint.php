<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Complaint;

class ViewComplaint extends Component
{
    public $view;

    protected $listeners = [
        'ViewComplaint'
    ];

    public function ViewComplaint($dataId)
    {
        $this->view->prepend(Complaint::find($dataId));
    }

    public function mount()
    {
        $this->view = Complaint::where('user_id', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.view-complaint');
    }
}

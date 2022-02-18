<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Complaint;

class View extends Component
{
    public $complaints;

    public function delete($id)
    {
        $delete = Complaint::find($id)->delete();
        return redirect()->back()->with('alert', 'Complaint deleted');
      }

    public function render()
    {
        return view('livewire.view')->with('complaints', $this->complaints);
    }
}

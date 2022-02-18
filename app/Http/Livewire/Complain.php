<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Complain extends Component
{
    public $category, $description;

    public function submit()
    {
        $this->validate([
            'category' => 'required',
            'description' => 'required'
        ]);

        $data = auth()->user()->complaint()->create([
            'category' => $this->category,
            'description' => $this->description
        ]);

        $this->emit('ViewComplaint', $data->id);

        $this->category = '';
        $this->description = '';

        return back()->with('info', 'You just submitted a complain');
    }
    public function render()
    {
        return view('livewire.complain');
    }
}

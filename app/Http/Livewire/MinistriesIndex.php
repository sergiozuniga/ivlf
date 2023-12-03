<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MinistriesIndex extends Component
{
    
    public $ministry;

    public function mount($id)
    {
        $this->ministry = $id;
    }

    public function render()
    {
        return view('livewire.ministries', [
            'ministry' => $this->ministry
        ]);
    }
}

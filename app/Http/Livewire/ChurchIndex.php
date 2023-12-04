<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChurchIndex extends Component
{
    
    public $church;

    public function mount($id)
    {
        $this->church = $id;
    }

    public function render()
    {
        return view('livewire.church', [
            'church' => $this->church
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Peticion;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Livewire\Component;

class ContactsIndex extends Component
{
    public $nombre, $email, $sujeto, $peticion;

    public function email() 
    {
        $data = [
            'nombre'    => $this->nombre,
            'email'     => $this->email,
            'sujeto'    => $this->sujeto,
            'peticion'  => $this->peticion,
            'respuesta' => ''                   
        ];

        Mail::to($this->email, $this->nombre)
            ->send(new SendMail($data));
    }

    public function save()
    {
        $this->validate([
            'nombre'   => 'required',
            'email'    => 'required',
            'sujeto'   => 'required',
            'peticion' => 'required'
        ]);

        Peticion::create([
            'nombre'   => $this->nombre,
            'email'    => $this->email,
            'sujeto'   => $this->sujeto,
            'peticion' => $this->peticion
        ]);
        $this->email();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}

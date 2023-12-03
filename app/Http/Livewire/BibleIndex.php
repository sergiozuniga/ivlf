<?php

namespace App\Http\Livewire;
use App\Models\Libro;
use App\Models\Versiculo;

use Livewire\Component;

class BibleIndex extends Component
{
    public $view = 'bible';

    public $testamento;

    public $libros = [], $versiculos = [], $num_lib = null, $nom_lib = null, $num_cap = null, $tot_cap = null;

    public function mount($id)
    {
        $this->testamento = $id;
    }

    public function bible($num_lib)
    {
        if ($num_lib < 40){
            $this->testamento = 1;  
        }
        else{
            $this->testamento = 2;  
        }
        $this->view       = 'bible';
    }

    public function book($num_lib, $nom_lib, $tot_cap)
    {
        $this->libros     = [];
        $this->versiculos = [];
        $this->num_lib    = $num_lib;
        $this->nom_lib    = $nom_lib;
        $this->num_cap    = null;
        $this->tot_cap    = $tot_cap;
        $this->view       = 'book';
    }

    public function chaper($num_lib, $nom_lib, $num_cap, $tot_cap)
    {
        $this->versiculos = Versiculo::where('num_libro', $num_lib)
                                ->where('num_capitulo', $num_cap)
                                ->get();
        $this->libros     = [];
        $this->tot_cap    = $tot_cap;
        $this->num_lib    = $num_lib;
        $this->nom_lib    = $nom_lib;
        $this->num_cap    = $num_cap;
        $this->view       = 'chaper';
    }

    public function render()
    {
        if ($this->testamento == 1){
            $this->libros = Libro::where('id', '<', 40)->get();
        }
        else{
            $this->libros = Libro::where('id', '>', 39)->get();
        }

        return view('livewire.bible-show', [
            'libros'     => $this->libros, 
            'versiculos' => $this->versiculos, 
            'num_lib'    => $this->num_lib, 
            'nom_lib'    => $this->nom_lib, 
            'num_cap'    => $this->nom_lib, 
            'tot_cap'    => $this->tot_cap, 
            'host'       => asset('audio')
        ]);
    }
}

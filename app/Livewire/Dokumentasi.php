<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\dokumentasi as Dokumentasis;

class Dokumentasi extends Component
{
    public $docs;

    public function mount()
   
    { 
       
        $this->docs = Dokumentasis::all();

    }

    public function render()
    {
        $post = Dokumentasis::paginate(6);
        return view('components.card-pete',compact('post'));

      
    }
}

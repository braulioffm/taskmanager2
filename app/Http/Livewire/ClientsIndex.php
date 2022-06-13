<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Client;

use Livewire\WithPagination;

class ClientsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $clients = Client::where('name', 'LIKE','%' . $this->search . '%')->paginate(5);

        return view('livewire.clients-index', compact('clients'));

        //return dd($projects);
    }

}

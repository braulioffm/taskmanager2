<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Project;

use Livewire\WithPagination;

class ProjectsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $projects = Project::paginate(5);

        return view('livewire.projects-index', compact('projects'));

        //return dd($projects);
    }

}

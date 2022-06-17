<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

use App\Models\Task;

use App\Models\Project;

class ProjectTaskBox extends Component
{

    public $taskStatus;

    public $title;

    public $project;

    public function render()
    {
        $project = $this->project;
        $tasks = Task::where('project_id', $project->id)->get();


        return view('livewire.projects.project-task-box', compact('tasks', 'project'));
    }
}

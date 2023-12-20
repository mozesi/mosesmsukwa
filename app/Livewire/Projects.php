<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project as MyProject;

class Projects extends Component
{
    public $myProjects;

    public function render()
    {
        $this->myProjects = MyProject::All();
        return view('livewire.projects');
    }
}

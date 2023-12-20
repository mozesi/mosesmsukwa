<?php

namespace App\Livewire;

use Livewire\Component;
use App\Model\Project as MyProject;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.projects');
    }
}

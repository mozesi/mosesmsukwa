<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Work;

class Experience extends Component
{
    public $myExperience;

    public function render()
    {
        $this->myExperience = Work::all();

        return view('livewire.experience');
    }
}

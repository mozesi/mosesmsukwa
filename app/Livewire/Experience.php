<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Work;

class Experience extends Component
{
    public $myExperience;

    public function render()
    {
        $this->myExperience = Work::orderBy('start_date', 'DESC')->get();

        return view('livewire.experience');
    }
}

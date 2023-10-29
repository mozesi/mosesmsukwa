<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Education as MyEducation;

class Education extends Component
{
    public $myEducations;

    public function render()
    {
        $this->myEducations = MyEducation::all();
        return view('livewire.education');
    }
}

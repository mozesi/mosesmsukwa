<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Skill as MySkill;

class Skill extends Component
{
    public $mySkills;

    public function render()
    {
        $this->mySkills = MySkill::All();
        return view('livewire.skill');
    }
}

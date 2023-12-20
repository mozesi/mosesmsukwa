<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile as MyProfile;
use App\Models\Project;


class Profile extends Component
{

    public $myProfile;
    public $recentProjects;

    public function render()
    {
        $myUSerId =1;

        $this->myProfile = MyProfile::find($myUSerId);
        $this->recentProjects = Project::all();

        return view('livewire.profile');
    }

    public function downloadResume(){
        dump('download resume');

    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile as MyProfile;


class Profile extends Component
{

    public $myProfile;

    public function render()
    {
        $this->myProfile = MyProfile::find(1);

        return view('livewire.profile');
    }
}

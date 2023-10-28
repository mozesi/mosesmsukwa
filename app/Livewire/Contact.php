<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as ContactMe;

class Contact extends Component
{

    public $email;
    public $subject;
    public $description;

    public function render()
    {
        return view('livewire.contact');
    }


    public function contactMe(){
    ContactMe::create([
        'email' => $this->email,
        'subject' => $this->subject,
        'description' => $this->description,
    ]);
    }
}

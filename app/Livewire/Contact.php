<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Contact as ContactMe;

class Contact extends Component
{

    public $email;
    public $subject;
    public $description;

    protected $rules = [
        'email' =>'required',
        'subject' =>'required',
        'description' => 'required'
    ];

    public function render()
    {
        return view('livewire.contact');
    }


    public function contactMe()
    {
        $this->validate();

        ContactMe::create([
            'email' => $this->email,
            'subject' => $this->subject,
            'description' => $this->description,
        ]);
    }
}

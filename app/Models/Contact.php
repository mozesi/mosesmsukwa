<?php

namespace App\Models;

use App\Events\ContactCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $dispatchesEvents =[
        'created' => ContactCreated::class,
    ];
}

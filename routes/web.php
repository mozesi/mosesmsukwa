<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Profile;
use App\Livewire\Education;
use App\Livewire\Experience;
use App\Livewire\Projects;
use App\Livewire\Contact;
use App\Livewire\Articles;

use App\Models\Skill;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Profile::class);
Route::get('/education', Education::class);
Route::get('/experience', Experience::class);
Route::get('/projects', Projects::class);
Route::get('/contact', Contact::class);
Route::get('/articles', Articles::class);


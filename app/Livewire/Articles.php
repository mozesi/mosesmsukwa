<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $articles;
    public function render()
    {
        $this-> articles = Article::all();
        return view('livewire.articles');
    }
}

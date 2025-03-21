<?php

namespace App\Livewire;


use App\Models\Article;
use Illuminate\Support\Facades\App;
use Livewire\Component;


class RecentPost extends Component
{
    public $myRecentArticles;

    public function render()
    {
        $this->myRecentArticles = Article::all();
        return view('livewire.recent-post');
    }
}

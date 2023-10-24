<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    use HasFactory;

    public function articles(): HasMany
    {
        return $this->HasMany(Article::class);
    }

    public function certificates(): HasMany
    {
        return $this->HasMany(Certificate::class);
    }

    public function education(): HasMany
    {
        return $this->HasMany(Education::class);
    }

    public function projects(): HasMany
    {
        return $this->HasMany(Project::class);
    }

    public function socials(): HasMany
    {
        return $this->HasMany(Social::class);
    }

    public function works(): HasMany
    {
        return $this->HasMany(Work::class);
    }
}

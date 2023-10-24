<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Social extends Model
{
    use HasFactory;
    protected $casts = [
        'icon' => 'array',
    ];

    public function profile():BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}

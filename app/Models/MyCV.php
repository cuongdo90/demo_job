<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCV extends Model
{
    use HasFactory;
    protected $table ='mycv';

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

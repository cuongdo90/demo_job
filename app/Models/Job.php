<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table='job_posts';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

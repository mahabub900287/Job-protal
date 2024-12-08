<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }

    public function countJobPosts()
    {
        return $this->jobPosts()->count();
    }
}

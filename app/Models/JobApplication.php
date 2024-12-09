<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_post_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'state',
        'zip',
        'cv',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function job_post()
    {
        return $this->belongsTo(JobPost::class , 'job_post_id');
    }
}

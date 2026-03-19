<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_key',
        'title',
        'cover',
        'content',
        'material',
        'robotics_kit'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
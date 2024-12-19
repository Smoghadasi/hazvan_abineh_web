<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    use HasFactory;
    protected $uploads = '/uploads/';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute($photo)
    {
        return $this->files . $photo;
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'image', 'tech', 'experience_id'];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}

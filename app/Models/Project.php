<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'tech', 'experience_id'];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}

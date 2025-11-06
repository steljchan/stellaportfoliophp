<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'level', 'icon', 'progress'];

    protected $table = 'skills'; 

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'excerpt', 'image', 'category', 'date', 'read_time', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}


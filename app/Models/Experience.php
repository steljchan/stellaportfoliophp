<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi massal (harus sesuai dengan struktur tabel dan seeder)
    protected $fillable = [
        'title',
        'company',
        'description',
        'start_date',
        'end_date',
        'icon',
    ];

    // Relasi: satu Experience bisa punya banyak Project
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

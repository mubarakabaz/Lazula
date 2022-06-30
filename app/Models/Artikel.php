<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'judul',
        'slug',
        'excerpt',
        'body',
        'kategori_id',
        'user_id',
        'gambar_artikel',
        'thumbnail_artikel',
        'is_active',
        'viewers',
    ];

    protected $hidden = [];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

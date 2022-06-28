<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'judul',
        'slug',
        'excerpt',
        'body',
        'kategori_id',
        'user_id',
        'original_gambar',
        'thumbnail',
        'is_active',
        'viewers',
    ];

    protected $hidden = [];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}

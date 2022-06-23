<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    const BODY_LENGTH = 200;

    protected $table = 'artikel';

    protected $fillable = [
        'judul',
        'slug',
        'excerpt',
        'body',
        'kategori_id',
        'user_id',
        'gambar_artikel',
        'is_active',
        'viewers',
    ];

    protected $hidden = [];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function limit(){
        return Str::limit($this->body, self::BODY_LENGTH);
    }

}

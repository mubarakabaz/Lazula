<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalibrasi extends Model
{
    use HasFactory;

    protected $table = 'kalibrasi';

    protected $fillable = [
        'phSetA',
        'phSetB',
        'tdsSetA',
        'tdsSetB',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
    
}

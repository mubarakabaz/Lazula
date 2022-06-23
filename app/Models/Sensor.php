<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensor';

    protected $fillable = [
        'suhu',
        'ph',
        'tds',
        'ppu',
        'ppd',
        'ppn',
        'pab',
    ];

    protected $hidden = [];
}

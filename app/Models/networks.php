<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class networks extends Model
{
    use HasFactory;
    protected $fillable = [
        'mame',
        'icon',
        'status'
    ];
}

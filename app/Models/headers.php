<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headers extends Model
{
    use HasFactory;
	protected $fillable = [
		'tile',
		'description',
		'image',
		'status'
	];
   
}

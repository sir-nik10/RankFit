<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
     // Specify the table name if it's not the plural of the model name
     protected $table = 'exercise';

     // Specify the columns that can be mass-assigned
     protected $fillable = ['name'];

    use HasFactory;
}

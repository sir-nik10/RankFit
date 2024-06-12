<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted',
        'private',
        'user_id',
        'exercise_id',
        'type',
        'name',
        'measurement',
    ];
}

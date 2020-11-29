<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Model;

class Mongo extends Model
{
    use HasFactory;
    protected $collection = 'users';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristics extends Model
{
    use HasFactory;
    protected $table = 'charecteristics';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;
    protected $table= 'bookings';
    protected $primarykey = 'id';
    public $incrementing = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResBookings extends Model
{
    use HasFactory;
    protected $table = 'res_bookings';
    protected $primaryKey = 'bookings_id';
    public $incrementing = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBookings extends Model
{
    use HasFactory;
    protected $table = 'room_bookings';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

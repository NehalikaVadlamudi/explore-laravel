<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRooms extends Model
{
    use HasFactory;
    protected $table = 'hotel_rooms';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

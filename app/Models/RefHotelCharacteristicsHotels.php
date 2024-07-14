<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefHotelCharacteristicsHotels extends Model
{
    use HasFactory;
    protected $table = 'ref_hotel_characteristics_hotels';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

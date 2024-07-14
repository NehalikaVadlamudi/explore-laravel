<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRatePeriods extends Model
{
    use HasFactory;
    protected $table = 'room_rates_periods';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

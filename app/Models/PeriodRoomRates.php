<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodRoomRates extends Model
{
    use HasFactory;
    protected $table = 'period_room_rates';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

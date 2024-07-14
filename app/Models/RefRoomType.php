<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefRoomType extends Model
{
    use HasFactory;
    protected $table = 'ref_room_type';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

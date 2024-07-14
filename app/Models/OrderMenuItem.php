<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMenuItem extends Model
{
    use HasFactory;
    protected $table = 'order_menu_item';
    protected $primaryKey = 'order_menu_item_id';
    public $incrementing = false;
}

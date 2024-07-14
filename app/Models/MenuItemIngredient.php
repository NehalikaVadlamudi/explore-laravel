<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItemIngredient extends Model
{
    use HasFactory;
    protected $table = 'menu_item_ingredient';
    protected $primaryKey = 'menu_item_ingredient_id';
    public $incrementing = true;
}

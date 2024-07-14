<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientType extends Model
{
    use HasFactory;
    protected $table = 'ingredient_type';
    protected $primaryKey = 'ingredient_type_id';
    public $incrementing = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinning extends Model
{
    use HasFactory;
    protected $table = 'dinning';
    protected $primaryKey = 'dinning_table_id';
    public $incrementing = true;
}

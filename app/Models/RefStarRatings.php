<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefStarRatings extends Model
{
    use HasFactory;
    protected $table = 'ref_star_ratings';
    protected $primaryKey = 'id';
    public $incrementing = true;
}

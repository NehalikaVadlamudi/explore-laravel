<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffRole extends Model
{
    use HasFactory;
    protected $table = 'staff_role';
    protected $primaryKey = 'staff_role_id';
    public $incrementing = false;
}

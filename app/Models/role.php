<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $guarded = [];

    const ADMIN_ID = 1;
    const USER_ID = 2;
}

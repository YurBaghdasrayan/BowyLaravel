<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function category()
    {
        $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function favourites()
    {
        return $this->hasMany(Favourites::class, 'product_id');
    }

    public function Region()
    {
        return $this->belongsTo(Region::class, 'city');
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $guard = ['id'];
    
    public function category(){
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
    public function image(){
        return $this->hasMany(Images::class, 'product_id', 'id');
    }
}

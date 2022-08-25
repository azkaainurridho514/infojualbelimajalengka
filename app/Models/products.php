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
}

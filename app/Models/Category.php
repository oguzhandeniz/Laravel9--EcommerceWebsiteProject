<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one To many
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //one to many inverse RL
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    //one to many RL
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}

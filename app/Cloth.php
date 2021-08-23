<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $table = 'clothes';

    // protected $casts = [
    //    'categories' => 'array' 
    // ];

    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}

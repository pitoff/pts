<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $table = 'clothes';

    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','weight','description','categorie_id'];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}

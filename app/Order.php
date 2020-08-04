<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id','client_id','quantity','price','status'];
    public $msg, $color;
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function getIsAnStatusAttribute()
    {
            
        if($this->status == 0){
            $this->msg = "En Cours de validation";
        }elseif($this->status ==1){
            $this->msg = "Validée";
        }elseif($this->status == 2){
            $this->msg = "En Cours de Livraison";
        }else{
            $this->msg="Livrée";
        }

        return $this->msg;
    }

    public function getColorAttribute()
    {
        if($this->status == 0){
            $this->color = "dark";
        }elseif($this->status ==1){
            $this->color = "warning";
        }elseif($this->status == 2){
            $this->color = "primary";
        }else{
            $this->color="success";
        }

        return $this->color;
    }
}

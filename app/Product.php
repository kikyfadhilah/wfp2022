<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function transactions(){
        return $this->belongsToMany('App\Transaction','product_transactions','product_id', 'transaction_id')
        ->wherePivot('quantity', 'price');
    }
}

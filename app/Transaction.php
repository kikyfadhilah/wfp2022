<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function buyer(){
        return $this->belongsTo('App\Buyer','buyer_id','id');
    }

    public function product(){
        return $this->belongsToMany('App\Product', 'product_transactions', 'transaction_id', 'product_id')
        ->withPivot('quantity', 'price');
    }
}

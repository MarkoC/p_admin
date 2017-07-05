<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
       * Get the group that owns the product.
       */
      public function group()
      {
          return $this->belongsTo('App\Group');
      }

     /**
      * Get the specifications for the product.
      */
     public function specifications()
     {
         return $this->hasMany('App\Specification');
     }
}

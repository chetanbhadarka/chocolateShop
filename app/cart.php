<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public function getcart()
    {
      $cart = DB::select("select * from cart");
      return $cart;
    }
}

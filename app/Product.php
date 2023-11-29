<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    public function getProduct()
    {
      $pro = DB::select("select * from product");
      return $pro;
    }
}

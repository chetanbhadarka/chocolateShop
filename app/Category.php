<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    public function getCategory()
    {
      $res = DB::select("select * from category");
      return $res;
    }
}

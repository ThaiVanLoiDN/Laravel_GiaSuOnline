<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = "lophoc";
   	protected $primaryKey = "id_lop";
    public $timestamps = false;
}

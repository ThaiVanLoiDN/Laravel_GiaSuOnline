<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
     protected $table = "monhoc";
    protected $primaryKey = "id_mon";
    public $timestamps = false;
}

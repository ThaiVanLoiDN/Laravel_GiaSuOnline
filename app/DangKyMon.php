<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangKyMon extends Model
{
    protected $table = "dangkymon";
    protected $primaryKey = "id_dk";
    public $timestamps = false;
}

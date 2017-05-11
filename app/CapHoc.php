<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapHoc extends Model
{
    protected $table = "caphoc";
    protected $primaryKey = "id_cap";
    public $timestamps = false;
}

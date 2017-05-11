<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    protected $table = "quanhuyen";
    protected $primaryKey = "id_quan";
    public $timestamps = false;
}

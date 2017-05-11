<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "vote";
    protected $primaryKey = "id_vote";
    public $timestamps = false;
}

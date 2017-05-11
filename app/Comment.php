<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment_gs";
    protected $primaryKey = "id_cmt";
    public $timestamps = false;
}

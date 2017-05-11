<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentBV extends Model
{
    protected $table = "comment_bv";
    protected $primaryKey = "id_cmt";
    public $timestamps = false;
}

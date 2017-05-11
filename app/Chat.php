<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chat";
    protected $primaryKey = "id_chat";
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{


	protected $fillable = ['body'];
    public function list()
    {

    return $this->belongsTo(List::class);

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    //
    public $fillable = ['content'];

    public function user(){
      return $this->belongsTo('App\User');
    }
}

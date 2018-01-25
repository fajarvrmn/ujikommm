<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merekkk extends Model
{
    //
    protected $fillable = [
        'merek'];

         public function Iklannn(){

	return $this->hasMany('App\Iklannn');


}
}

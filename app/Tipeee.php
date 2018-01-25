<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipeee extends Model
{
    //

     protected $fillable = [
        'namatipe'];

        public function Iklannn(){

	return $this->hasMany('App\Iklannn');


}
}

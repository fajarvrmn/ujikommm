<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayahhh extends Model
{
    protected $fillable = [
        'prov'];

         public function Iklannn(){

	return $this->hasMany('App\Iklannn');


}
}

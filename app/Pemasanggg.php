<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasanggg extends Model
{
     protected $fillable = [
        'nama', 'email', 'passwordd' ,'telepon',  'alamat'];

         public function Iklannn(){

	return $this->hasMany('App\Iklannn');


}
}

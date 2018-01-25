<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotoooo extends Model
{
     protected $fillable = [
        'depan', 'belakang', 'kiri', 'kanan', 'lainnya1', 'lainnya2', 'lainnya3', 'lainnya4', 'lainnya5', 'iklannns_id'];


    public function Iklannn(){

	return $this->hasMany('App\Iklannn');
}
}

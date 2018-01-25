<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklannn extends Model
{
     protected $fillable = [
       'kondisi','transmisi','bahanbakar','tahunkeluar','warna','deskripsi','harga', 'keterangan', 'merekkks_id', 'tipeees_id', 
       	 'pemasangggs_id'];


       	  public function fotoooo(){

	return $this->belongsTo('App\Fotoooo');


}

public function merekkk(){

	return $this->belongsTo('App\Merekkk');
}

public function tipeee(){

	return $this->belongsTo('App\Tipeee');
}


public function pemasanggg(){

	return $this->belongsTo('App\Pemasanggg');
}
public function wilayahhh(){

	return $this->belongsTo('App\Wilayahhh');
}
}

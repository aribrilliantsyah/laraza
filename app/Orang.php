<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    //
    protected $fillable = ['nama','alamat','jk'];

    public function fitrahs()
    {
    	return $this->hasMany('App\Fitrah');
    }
    public function mals()
    {
    	return $this->hasMany('App\Mal');
    }
    public function lains()
    {
    	return $this->hasMany('App\Lain');
    }
}

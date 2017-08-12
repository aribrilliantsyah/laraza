<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lain extends Model
{
    //
    protected $fillable = ['jenis','nominal'];
    public function orang()
    {
    	# code...
    	return $this->belongsTo('App\Orang');
    }

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\User');
    }
}

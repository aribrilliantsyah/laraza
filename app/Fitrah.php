<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitrah extends Model
{
    //
    protected $table = 'fitrahs';
    protected $fillable = ['jenis_zakat'];
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

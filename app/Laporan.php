<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    //
    protected $fillable=['title','content'];

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\User');
    }
}

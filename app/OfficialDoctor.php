<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class OfficialDoctor extends Model
{
    //
    public $timestamps = false;
    public $fillable = ['token'];

    public function doctor()
    {
    	return $this->hasOne(Doctor::class,'registerid','registerid');
    }
}

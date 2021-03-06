<?php

namespace App;
use App\Doctor;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    //
    protected $hidden=['updated_at'];
    protected $fillable=['aadhar','registerid','questions','advice','medicines','emergency','vaccination','surgery','accompany','accmobile','surgdetail','vaccdetail','emergdetail','remarks','filename'];
    public function user()
    {
    	return $this->belongsTo(User::class,'aadhar','aadhar');
    }
    public function doctor()
    {
    	return $this->belongsTo(Doctor::class,'registerid','registerid');
    }
}

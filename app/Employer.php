<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
   protected $table = "employers" ;
   protected $fillable = ['company_name', 'contact_name','contact_phone', 'user_id' ];
   public function Users(){
     $this->belongsTo('App\User');
 }
}

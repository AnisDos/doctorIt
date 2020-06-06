<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Visite;

class Mesure extends Model
{
    
protected $guarded =[];

   
public function visite()
{
   return $this->belongsTo(Visite::class);
}


}

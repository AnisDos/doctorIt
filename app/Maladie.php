<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    
use App\Patient;


class Maladie extends Model
{
protected $guarded =[];


public function patient()
{
return $this->belongsTo(Patient::class);
}
}

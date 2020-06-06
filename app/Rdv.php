<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Medecin;
use App\Patient;

class Rdv extends Model
{
    protected $guarded =[];
    
    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}

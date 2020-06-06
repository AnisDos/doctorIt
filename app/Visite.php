<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use App\Patient;
use App\Medecin;
use App\Medicament;
use App\Fichier;
use App\Mesure;



class Visite extends Model
{
    

    protected $guarded =[];

    
public function patient()
{
    return $this->belongsTo(Patient::class);
}




public function medecin()
{
    return $this->belongsTo(Medecin::class);
}

public function medicaments()
{
    return $this->hasMany(Medicament::class);
}


public function fichiers()
{
    return $this->hasMany(Fichier::class);
}

public function mesures()
{
    return $this->hasMany(Mesure::class);
}


}

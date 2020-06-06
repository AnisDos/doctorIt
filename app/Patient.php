<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Visite;
use App\Rdv;
use App\Maladie;



class Patient extends Model
{
    

protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    
  public function visites()
  {
      return $this->hasMany(Visite::class);
  }


  public function maladies()
  {
      return $this->hasMany(Maladie::class);
  }



  public function rdvs()
  {
      return $this->hasMany(Rdv::class);
  }
  
  





}

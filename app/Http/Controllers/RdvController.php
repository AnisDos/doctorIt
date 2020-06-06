<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;


class RdvController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function approuveRdv(){

        $data = request()->validate([
      
            'idAprouve'=>  '',
     
        ]);


        //put string geted from form too a array 
     $idapouvearray= preg_split("/[,]/",$data['idAprouve'][0]);
        
//
if ($idapouvearray[0] != "" ) {
    dd(count($idapouvearray),$idapouvearray);
    for($i = 0;  $i< count($idapouvearray) ;  $i++)
    {

     $rdv =   Rdv::find($idapouvearray[$i]);
     $rdv->valide = true;
     $rdv->save();

    }


      }else {
          
      return redirect()->back()->with("danger"," something go wrong !!!");
  

      }


      return redirect()->back()->with("success"," Rendez-vous approuvé !!!");
  
    }

}

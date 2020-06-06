<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Visite;
use App\Mesure;
use App\Maladie;
use App\Fichier;
use App\Medicament;
use Carbon\Carbon;
use App\Rdv;
use Illuminate\Support\Facades\Auth;

use Image;





class VisiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function addVisiteForm()
    {
        $data = request()->validate([
            'id_patient' => '',
            'motif' => 'required',
            'examens' => 'required',
            'diagnostiques'=> 'required', 
            'note' => 'required',
            'taille' => 'required',
            'poids'=> 'required',
            'tension'=> 'required',
            'recette'=> 'required',
            'prRdv'=> '',
            'var'=>  '',
            'var2'=>  '',
            'var3'=>  '',
            'var4'=>  '',
        ]);


    
       




     //put string geted from form too a array 
     $mesuresSuppl= preg_split("/[,]/",$data['var'][0]);
        

     //put string geted from form too a array 
     $maladiesSuppl= preg_split("/[,]/",$data['var2'][0]);
        

     //put string geted from form too a array 
     $fileNames= preg_split("/[,]/",$data['var3'][0]);
        
  
     //put string geted from form too a array 
     $ordonnance= preg_split("/[,]/",$data['var4'][0]);
        
  

   //  dd($data,request('ficher1') ,count($fileNames) ,$fileNames );

   

// find patient of this visite
$patient = Patient::find($data['id_patient']);
           
//create visite object and save it ==========================================
$visite = new Visite;

$visite->medecin()->associate(Auth::user()->medecin);
$visite->patient()->associate($patient);
$visite->motif = $data['motif'];
$visite->examens = $data['examens'];
$visite->diagnostiques = $data['diagnostiques'];
$visite->note = $data['note'];
$visite->taille = $data['taille'];
$visite->poids = $data['poids'];
$visite->tension = $data['tension'];
$visite->recette = $data['recette'];
$visite->save();

//==========================================================================


// add mesures supplimentaire ==============================================
if (count($mesuresSuppl) > 1 ) {
    for($i = 0;  $i< count($mesuresSuppl)-1 ;  $i++)
    {
       if($i % 2 == 0){ 
        $mesure = new Mesure;
        $mesure->nomMesure = $mesuresSuppl[$i];
        $mesure->mesure = $mesuresSuppl[$i+1];
        $mesure->visite()->associate($visite);
        $mesure->save();
       }
    }
}
//==========================================================================

// add maladies supplimentaire ==============================================
if (count($maladiesSuppl) > 1 ) {
    for($i = 0;  $i< count($maladiesSuppl)-1 ;  $i++)
    {
       if($i % 2 == 0){ 
        $maladie = new Maladie;
        $maladie->maladie = $maladiesSuppl[$i];
        $maladie->type = $maladiesSuppl[$i+1];
        $maladie->patient()->associate($patient);
        $maladie->save();
       }
    }
}
//==========================================================================

// create supp fichier and radio ===========================================
if ($fileNames[0] != "" ) {
    for ($i=1; $i <=count($fileNames)  ; $i++) { 
        //registre image file 
        $namefile = "fichier".$i;
        //dd(request('fichier1'));
        $imagePath = request($namefile)->store('fichiers_patient','public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();


        $fichier = new Fichier;
        $fichier->fichier = $imagePath;
        $fichier->NomFichier = $fileNames[$i-1];
        $fichier->visite()->associate($visite);
        $fichier->save();
    }
}


//==========================================================================

// add ordonnance  =========================================================
if (count($ordonnance) > 1 ) {
    $x = 0;
    while($x <= count($ordonnance)-4) {
    
        $medicament = new Medicament;
        $medicament->nomMedicament = $ordonnance[$x];
        $medicament->Duree = $ordonnance[$x+1];
        $medicament->nbrDefoisParJour = $ordonnance[$x+2];
        $medicament->AventApres = $ordonnance[$x+3];
        $medicament->visite()->associate($visite);
        $medicament->save();
        $x = $x+4;
    }

}
//==========================================================================

// add rdv  =========================================================

if ($data['prRdv'] != null ) {
    

$daterdv = Carbon::parse($data['prRdv']);
   

$rdv = new Rdv;
$rdv->title = "ajoutaha medecin";
$rdv->date = $daterdv;
$rdv->par_medecin = true;
$rdv->valide = true;

$rdv->patient()->associate($patient);
$rdv->medecin()->associate(Auth::user()->medecin);
$rdv->save();
}

//==========================================================================

return redirect()->back()->with("success"," Visite added with success !");



    }






    public function checkVisitePatient(Visite $visite){



        return view('medecin.checkVisitePatient',compact('visite'));

    }




    
}

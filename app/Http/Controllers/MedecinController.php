<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Patient;
use App\Visite;
use App\Medicament;
use File;
use App\Medecin;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
use Image;


class MedecinController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    { 
        //partie chart===================================================================
$chartsRevenus = array();

// feach all restaurant of this admin and try yo evry one put there name end revuen of year

   $year = 2020;
   $tz = 'Europe/Madrid';
$mounth = array();
   for ($i=1; $i <13 ; $i++) { 
   $order = DB::table('visites')
   ->where('visites.medecin_id',Auth::user()->medecin->id)
   ->where('visites.created_at', '>=', Carbon::createFromDate($year, $i,0, $tz) )
   ->where('visites.created_at', '<',Carbon::createFromDate($year, $i+1,0, $tz) )
   ->sum('visites.recette');
   array_push($mounth,  $order);
}
   array_push($chartsRevenus,  $mounth);

//end partie charts===================================================================

//dd($chartsRevenus);


        return view('medecin.home',compact('chartsRevenus') );
    }
    

    public function addPatient()
    {

        return view('medecin.addPatient');
    }

    
    public function calendarAppointments()
    {
        //$rdvs= Auth::user()->medecin->rdvs()->get();
        $rdvs=  DB::table('medecins')
        ->select('rdvs.*','patients.nom','patients.prenom')
        ->leftJoin('rdvs',  'rdvs.medecin_id', '=','medecins.id')
        ->leftJoin('patients',  'patients.id', '=','rdvs.patient_id')
        ->where('medecins.user_id',Auth::user()->id )
        ->where('rdvs.valide',true )
        ->where('rdvs.date', '>=',Carbon::now() )
        ->get();

        $rdvsNotGG=  DB::table('medecins')
        ->select('rdvs.*','patients.nom','patients.prenom')
        ->leftJoin('rdvs',  'rdvs.medecin_id', '=','medecins.id')
        ->leftJoin('patients',  'patients.id', '=','rdvs.patient_id')
        ->where('medecins.user_id',Auth::user()->id )
        ->where('rdvs.valide',false )
        ->where('rdvs.date', '>=',Carbon::now() )
        ->get();


        return view('medecin.calendarAppointments',compact('rdvs','rdvsNotGG'));
    }

    
    public function patientsRecherche()
    {

        return view('medecin.patientsRecherche');
    }

    
    public function patientRechercheForm()
    {
        $data = request()->validate([
            'search' => 'required',
            ]);


            $patient = DB::table('patients')
            ->select('patients.*')
            ->leftJoin('users',  'users.id', '=','patients.user_id')
            ->where('users.email',$data['search'] )
            ->first();

            if ($patient) {
               // dd($patient);
                return redirect()->back()->with("patient",$patient);
  
            }else{
//dd('mal9ahch');
return redirect()->back()->with("danger"," Numero Introuvable");
  
            }
   
        
 
    }

    public function passwordRechercheForm()
    {

        $compte =  DB::table('users')
        ->select('users.*')
        ->leftJoin('patients',  'patients.user_id', '=','users.id')
        ->where('patients.id',request('id_patient') )
        ->first();
        
        $data = request()->validate([
            'id_patient' => 'required',
            'password' => 'required',
            ]);

       
            $patient = DB::table('patients')
            ->select('patients.*')
            ->leftJoin('users',  'users.id', '=','patients.user_id')
            ->where('users.email',$compte->email )
            ->first();


            if ($patient) {
                
            $user = User::find( $compte->id);
                if (Hash::check($data['password'], $user->password)) {

// go to profile of this patient 
        //create a visite to pass secur and delete it after that 
        $ptitta = Patient::find($patient->id);
        $visite =new Visite;
        $visite->patient()->associate($ptitta);
        $visite->medecin()->associate(Auth::user()->medecin);
        $visite->motif = "delete";
        $visite->examens = "delete";
        $visite->diagnostiques = "delete";
        $visite->note ="delete";    
        $visite->recette = 106;
        $visite->taille = 106;
        $visite->poids = 106;
        $visite->tension =106;
        $visite->save();
        


        //return redirect('/medecin/addVisiteTo/'.$patient->id);
         return redirect('/medecin/profilePatient/'.$patient->id);

                 //   return redirect()->back()->with("success"," l9ah khlas");






                }else{
               // dd($patient);
               return redirect()->back()->with("danger"," password ghalet");
            }
  
            }else{
//dd('mal9ahch');
return redirect()->back()->with("danger"," mal9ahch");
  
            }
   
        
 
    }




    

    

    public function addPatientform()
    {
        
        $data = request()->validate([
            'image' => '',
            'nom' => 'required',
            'prenom'=> 'required', 
            'date_naissance' => 'required',
            'groupe_sanguin' => 'required',
            'emailPatient'=> 'required',
            'email' => ['required','unique:users'],
            'adresse'=> 'required',
            'num_securite_sociale'=>  'unique:patients',
            'id_nationale'=> 'unique:patients',
            'situation_familiale'=>  '',
            'profession'=>  '',
            'sexe' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);
 
        if (request('image')){

            $imagePath = request('image')->store('patients','public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);
           
            $image->save();
           
        }


       $compte = User::create([
     
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $patient =new Patient;
        $patient->user()->associate($compte);
        $patient->nom = $data['nom'];
        $patient->prenom = $data['prenom'];
        $patient->groupe_sanguin = $data['groupe_sanguin'];
        $patient->date_naissance = $data['date_naissance'];
        $patient->email = $data['emailPatient'];
        $patient->adresse = $data['adresse'];
        $patient->num_securite_sociale = $data['num_securite_sociale'];
        $patient->id_nationale = $data['id_nationale'];
        $patient->profession = $data['profession'];
        $patient->situation_familiale = $data['situation_familiale'];
        $patient->sexe = $data['sexe'];
        if (request('image')){   $patient->image = $imagePath;}
        $patient->save();


        //create a visite to pass secur and delete it after that 
        $visite =new Visite;
        $visite->patient()->associate($patient);
        $visite->medecin()->associate(Auth::user()->medecin);
        $visite->motif = "delete";
        $visite->examens = "delete";
        $visite->diagnostiques = "delete";
        $visite->note ="delete";    
        $visite->recette = 106;
        $visite->taille = 106;
        $visite->poids = 106;
        $visite->tension =106;
        $visite->save();
        
        
        
        

        return redirect('/medecin/addVisiteTo/'.$patient->id);
    }

    public function myPatients()
    {
        
        //dd(Auth::user()->medecin->id);

        $patients = DB::table('patients')
         ->select('patients.*')
         ->leftJoin('visites',  'visites.patient_id', '=','patients.id')
         ->where('visites.medecin_id',Auth::user()->medecin->id )
         ->groupBy('patients.id')
         ->get();

               //dd($patients);
        return view('medecin.myPatients',compact('patients'));
    }



    public function profilePatient(Patient $patient)
    {

      
      $o =  Visite::where('patient_id',$patient->id)
             ->where('medecin_id',Auth::user()->medecin->id)
              ->exists();



    //delete visite if medecin create new compte for user 
    Visite::where('patient_id',$patient->id)
    ->where('medecin_id',Auth::user()->medecin->id)
    ->where('motif',"delete")
    ->where('examens',"delete")
    ->where('diagnostiques',"delete")
    ->where('note',"delete")
    ->where('recette',106)
    ->delete();



      
   if (!$o) {
     return redirect()->back()->with("danger"," please don't play with that !!!");
   }
    

//all visite of the patients

     $visites = $patient->visites()->get();

        return view('medecin.profilePatient',compact('patient','visites'));
    }
    
//==================================================================================
//==================================================================================
//==================================================================================

    public function addVisiteTo(Patient $patient)
    {

      
      $o =  Visite::where('patient_id',$patient->id)
             ->where('medecin_id',Auth::user()->medecin->id)
              ->exists();



    //delete visite if medecin create new compte for user 
    Visite::where('patient_id',$patient->id)
    ->where('medecin_id',Auth::user()->medecin->id)
    ->where('motif',"delete")
    ->where('examens',"delete")
    ->where('diagnostiques',"delete")
    ->where('note',"delete")
    ->where('recette',106)
    ->delete();



      
   if (!$o) {
     return redirect()->back()->with("danger"," vous n'avez pas le droit de consulter cette patient!!!");
   }
    
   $tlfn = $patient->user()->first();


        return view('medecin.addVisiteTo',compact('patient','tlfn'));
    }


    

    
    //==================================================================================
//==================================================================================
//==================================================================================

public function myMessages()
{


    
    
   /*      $data1 = DB::table('messages')
        ->select('messages.*')
        ->where(function ($query) {
            $uopm = 2;
          $query->where('to', $uopm)
                ->where('from', Auth::user()->medecin->id)
                ->where('typeTo',"medecin")
                ->where('typeFrom',"medecin");
                                  })
       ->orWhere(function($query) {
        $uopm = 2;
          $query->where('to', Auth::user()->medecin->id)
              ->where('from', $uopm)
              ->where('typeTo',"medecin")
              ->where('typeFrom',"medecin");	
                                   })
      ->get();


dd($data1,Auth::user()->medecin->id);

 */






            $contactsmedecin = DB::table('medecins')
                    ->select('medecins.*' , 'messages.vu', 'messages.created_at as ddmsg' )
                    ->leftJoin('messages',  'messages.from', '=','medecins.id')
                    ->where('medecins.id','!=',Auth::user()->medecin->id)
                    ->where('messages.to',Auth::user()->medecin->id)
                    ->where('messages.typeFrom',"medecin")
                    ->where('messages.typeTo',"medecin")
                    ->whereRaw('messages.id IN (select MAX(messages.id) FROM messages GROUP BY messages.from)')
                    ->get();
                   // dd($contactsmedecin);
                    
   $contactsadmin = DB::table('admins')
                ->select('admins.*','messages.vu' )
                ->leftJoin('messages',  'messages.from', '=','admins.id')
                ->where('messages.to',Auth::user()->medecin->id)
                ->where('messages.typeFrom',"admin")
                ->where('messages.typeTo',"medecin")
                ->orderBy('messages.created_at', 'ASC')
              //  ->orderBy('messages.created_at', 'DESC')
                ->groupBy('messages.from')
                ->get();


   $contacts = $contactsmedecin->merge($contactsadmin);


             //   dd($contacts,$contactsmedecin,$contactsadmin,Auth::user()->medecin->id);

    return view('medecin.myMessages',compact('contactsadmin','contactsmedecin'));
}


public function deactivateEncourMedicaments(){
    $data = request()->validate([
        'id_medicament' => 'required',

    ]);

$medicament = Medicament::find($data['id_medicament']);

$medicament->en_cours = false;
$medicament->save();

return redirect()->back()->with("success"," Medicaments annuler!!!");
  
}



public function profilSettings()
{

    return view('medecin.profilSettings');
}




    
public function settingsProfilForm()
{
    
    $compte = User::find(request('id_medecin') );



    $data = request()->validate([
        'id_medecin' => '',
        'nom' => 'required',
        'prenom'=> 'required', 
        'specialite' => 'required',
        'emailMedecin'=> 'required',
        'email' => ['required', \Illuminate\Validation\Rule::unique('users')->ignore($compte->id)],
        'image' => '',
       
    ]);

//dd($data);

    if (request('image')){


        $pp = Medecin::find($data['id_medecin']);
        $op = "storage/" . $pp->image;
     
      // how to chek befor deleting old image from folder 
      if (File::exists( $op )) {
        
      
      // delete old image from the folder
      $oldfileexists = File::exists( $op );
 
      //Delete old avatar
      if($op != 'storage/patients/default.jpg' and $oldfileexists){
     
      File::delete($op);
     

      } 
    } 

        $imagePath = request('image')->store('patients','public');
        
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);
       
        $image->save();
       
    }


    $usermedecin = User::find($compte->id);
    $usermedecin->email = $data['email'];
    $usermedecin->save();

    $medecin = Medecin::find($data['id_medecin']);
    $medecin->nom = $data['nom'];
    $medecin->prenom = $data['prenom'];
    $medecin->specialite = $data['specialite'];
    $medecin->emailMedecin = $data['emailMedecin'];
    if (request('image')){   $medecin->image = $imagePath;}
    $medecin->save();



   
return redirect()->back()->with("success"," Profile updated with success !");





}




public function passwordreset()
{
    
    return view('medecin.passwordreset');
}


public function passwordResetForm()
{


$data = request()->validate([
    
        'oldPassword' => 'required',
        'password' => 'required|confirmed|min:5',
    ]);


    $compte = User::find(Auth::user()->medecin->user_id);

    $password = Hash::make($data['password']);

   // dd(Hash::check($data['oldPassword'], $compte->password),$compte->password ,$data['oldPassword'], $password );

    if (Hash::check($data['oldPassword'], $compte->password)  ) {

        $compte->password = $password;
        $compte->save();

       
    }else
    {
        return redirect()->back()->with("danger"," Votre ancien mot de passe est incorrecte!");
    }

    return redirect()->back()->with("success","  Mot de passe Réinitialise avec succès !");




}

public function historiquesVisites()
{
    
    $visites = Auth::user()->medecin->visites()->get();




    return view('medecin.historiquesVisites',compact('visites'));

}


public function imprimerOr(Visite $visite){


    return view('medecin.imprimerOr',compact('visite'));
}



 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Patient;
use App\Medecin;
use App\User;
use App\Visite;
use App\Rdv;

use File;

class PatientController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        return view('patient.home');
    }
    
    


    public function profilSettings()
    {

        return view('patient.profilSettings');
    }

    
    
    public function settingsProfilForm()
    {
        
        
$compte =  DB::table('users')
->select('users.*')
->leftJoin('patients',  'patients.user_id', '=','users.id')
->where('patients.id',request('id_patient') )
->first();
//dd($compte);

        $data = request()->validate([
            'id_patient' => '',
            'image' => '',
            'nom' => 'required',
            'prenom'=> 'required', 
            'date_naissance' => 'required',
            'groupe_sanguin' => 'required',
            'emailPatient'=> 'required',
            //'tel'=> 'required',
            //hadi virifier tel ila unique
            'email' => ['required', \Illuminate\Validation\Rule::unique('users')->ignore($compte->id)],
            'adresse'=> 'required',
            'num_securite_sociale'=>  'required',
            'id_nationale'=>  'required',
            'situation_familiale'=>  'required',
            'profession'=>  'required',
            'sexe' => 'required',
        ]);

//dd($data);
   
        if (request('image')){


            $pp = Patient::find($data['id_patient']);
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


        $userpatient = User::find($compte->id);
        $userpatient->email = $data['email'];
        $userpatient->save();

        $patient = Patient::find($data['id_patient']);
        $patient->nom = $data['nom'];
        $patient->prenom = $data['prenom'];
        $patient->groupe_sanguin = $data['groupe_sanguin'];
        $patient->date_naissance = $data['date_naissance'];
        $patient->email = $data['emailPatient'];
        $patient->adresse = $data['adresse'];
        $patient->num_securite_sociale = $data['num_securite_sociale'];
        $patient->id_nationale = $data['id_nationale'];
        $patient->profession = $data['profession'];
        $patient->sexe = $data['sexe'];
        if (request('image')){   $patient->image = $imagePath;}
        $patient->save();



       
return redirect()->back()->with("success"," Profile updated with success !");





    }






    public function myAppointments()
    {
        $rdvs= Auth::user()->patient->rdvs()->get();
        $myMedecins = Auth::user()->patient->visites()->groupBy('medecin_id')->get();

       // dd($myMedecins);

        return view('patient.myAppointments',compact('rdvs','myMedecins'));

    }


    

    public function appointmentsavecmedecin(Medecin $medecin)
    {
        if (!Visite::where('medecin_id',$medecin->id)->where('patient_id',auth::user()->patient->id)->exists() ) {
          
return redirect()->back()->with("danger"," Vous avez pas le droit de faire ça!");



        }

        $rdvs= $medecin->rdvs()->get();

      //  dd($rdvs);

        return view('patient.appointmentsavecmedecin',compact('rdvs','medecin'));

    }



    
    


    
    public function addRdvFormPatient(){
        $data = request()->validate([
            'id_medecin' => 'required',
            'date_rdv' => 'required',
            ]);

           


$str = substr($data['date_rdv'], -2);
$newdate = substr($data['date_rdv'], 0, -3);
$newdate = $newdate .':'.$str;
//dd($data['date_rdv'],$str,$newdate);
$med = Medecin::find($data['id_medecin']);
$rdv = new Rdv;
$rdv->title = "ajoutaha patient";
$rdv->date = $newdate;

$rdv->patient()->associate(Auth::user()->patient);
$rdv->medecin()->associate($med);
$rdv->save();

       
return redirect()->back()->with("success"," Rdv ajoutee avec success !");



    }


    public function passwordreset()
    {
        
        return view('patient.passwordreset');
    }


    public function passwordResetForm()
    {


   $data = request()->validate([
        
            'oldPassword' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);


        $compte = User::find(Auth::user()->patient->user_id);

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



}

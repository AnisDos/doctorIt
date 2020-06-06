<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Medecin;

use App\User;

use Image;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    { 
        return view('admin.home');
    }


public function addMedecin() {

    return view('admin.addMedecin');
}

public function addMedecinForm(){

    $data = request()->validate([
        'image' => '',
        'nom' => 'required',
        'prenom'=> 'required', 
    
     
        'emailMedecin'=> 'required|email',
        'email' => ['required','unique:users'],
        'adresse'=> 'required',
        'specialite'=> 'required',
       
        'password' => 'required|confirmed|min:5',
    ]);

   // dd($data);
    if (request('image')){

        $imagePath = request('image')->store('patients','public');
        
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);
       
        $image->save();
       
    }

    $compte = User::create([
     
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);



    $medecin =new Medecin;
    $medecin->user()->associate($compte);
    $medecin->nom = $data['nom'];
    $medecin->prenom = $data['prenom'];
    $medecin->specialite = $data['specialite'];
    $medecin->emailMedecin = $data['emailMedecin'];
    $medecin->adresse = $data['adresse'];
    if (request('image')){   $medecin->image = $imagePath;}
    $medecin->save();


   
    return redirect()->back()->with("success"," Medecin ajouter avec success !");


}

}

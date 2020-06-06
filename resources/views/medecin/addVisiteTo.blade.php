






@extends('medecin.base')


@section('style')
    
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/select2/css/select2.min.css') }}">
			
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
		
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/dropzone/dropzone.min.css') }}">
		
@endsection
@section('content')


		























<div class="col-md-7 col-lg-8 col-xl-9">
						
    <!-- Basic Information -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Information</h4>
            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="change-avatar">
                            <div class="profile-img">
                                <img src="/storage/{{$patient->image}}" alt="User Image">
                            </div>
                      {{--       <div class="upload-img">
                                <div class="change-photo-btn">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload">
                                </div>
                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                            </div> --}}
                        </div>
                    </div>
                </div>
         
   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom <span class="text-danger"></span></label>
                    <input type="text" value="{{ $patient->nom }}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prenom<span class="text-danger"></span></label>
                        <input type="text" value="{{ $patient->nom }}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" value="{{  $tlfn->email }}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sexe</label>
                        <input type="text" value="{{ $patient->sexe }}" readonly class="form-control">
                   
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label>Date of Birth</label>
                        <input type="text" value="{{ $patient->date_naissance }}" readonly class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label>id Nationale</label>
                        <input type="text" value="{{ $patient->id_nationale }}" readonly class="form-control">
                    </div>
                </div>

           


                <div class="col-md-6">
                    <div class="form-group">
                        <label>situation_familiale</label>
                        <input type="text" value="{{ $patient->situation_familiale }}" readonly class="form-control">
                   
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>profession</label>
                        <input type="text" value="{{ $patient->profession }}" readonly class="form-control">
                   
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>groupe_sanguin</label>
                        <input type="text" value="{{ $patient->groupe_sanguin }}" readonly class="form-control">
                   
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>num_securite_sociale</label>
                        <input type="text" value="{{ $patient->num_securite_sociale }}" readonly class="form-control">
                   
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Basic Information -->
    




    <form onsubmit="return submitForm();" id="ratinoupikamila"
     method="POST" enctype='multipart/form-data'  action="{{ url('medecin/addVisiteForm') }}" 
     class="needs-validation" novalidate>

@csrf



     
<input type="hidden" name="id_patient" value="{{ $patient->id }}" >

    <!-- Pricing -->
    <div class="card">
        <div class="card-body" id="divtoappenddd" >
            <h4 class="card-title">Motif</h4>
            
            <div class="form-group mb-0">
                <div id="pricing_select">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="price_free" name="rating_option" class="custom-control-input" value="price_free" checked>
                        <label class="custom-control-label" for="price_free">Prédéfinie</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="price_custom" name="rating_option" value="custom_price" class="custom-control-input">
                        <label class="custom-control-label" for="price_custom">Personnalisé</label>
                    </div>
                </div>

            </div>
            <div id="selectdaymenlabas"  class="form-group">
            
                <select class="custom-select" name="motif" required>
                    <option value="simple visite">simple visite</option>
                    <option value="ychouf radio ta3o">ychouf radio ta3o</option>
                    <option value="dja rdv">dja rdv</option>
                    <option value="yharech machi srx">yharech machi srx</option>
                </select>
            </div>
            
            {{-- <div class="col-md-12" id="custom_price_cont" style="display: none;">
                <div class="form-group mb-0">
              
                    <textarea name="motif" class="form-control @error('motif') is-invalid @enderror" rows="1" required>{{ old('motif') }}</textarea>
                             @error('motif')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <div class="invalid-feedback">
                        Veuillez remplire ce champs.
                           </div>
                </div>
            </div> --}}
            
        </div>
    </div>
    <!-- /Pricing -->





    <!-- About Me -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Visite</h4>


            <div class="row form-row">

          



            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label>examens</label>
                    <textarea  name="examens" class="form-control @error('examens') is-invalid @enderror" rows="5" required>{{ old('examens') }}</textarea>
                             @error('examens')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    		<div class="invalid-feedback">
															Veuillez remplire ce champs.
														</div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label>diagnostiques</label>
                    <textarea  name="diagnostiques" class="form-control @error('diagnostiques') is-invalid @enderror" rows="5" required>{{ old('diagnostiques') }}</textarea>
                             @error('diagnostiques')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    		<div class="invalid-feedback">
															Veuillez remplire ce champs.
														</div>
                </div>
            </div>




            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label>note <span style="color: red; font-size:11px;" > (personnel) </span> </label>
                    <textarea  name="note" class="form-control @error('note') is-invalid @enderror" rows="5" required>{{ old('note') }}</textarea>
                             @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    		<div class="invalid-feedback">
							Veuillez remplire ce champs.
					        </div>
                </div>
            </div>







            </div>




        </div>
    </div>
    <!-- /About Me -->





        
    <!-- mesures -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">mesures</h4>


            <div class="row form-row">

               <div class="col-md-4">
                    <div class="form-group">
                        <label>taille</label>
                        <input type="number" name="taille" step=".01" min="0"   value="{{ old('taille') }}"  class="form-control @error('taille') is-invalid @enderror" required >
                        @error('taille')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
    
    
                <div class="col-md-4">
                    <div class="form-group">
                        <label>poids</label>
                        <input type="number" name="poids" step=".01" min="0"   value="{{ old('poids') }}"  class="form-control @error('poids') is-invalid @enderror" required >
                        @error('poids')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
    
    
                <div class="col-md-4">
                    <div class="form-group">
                        <label>tension</label>
                        <input type="number" name="tension" step=".01" min="0"  value="{{ old('tension') }}"  class="form-control @error('tension') is-invalid @enderror" required >
                        @error('tension')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>

            </div>
            
           
        </div>
    </div>
    <!-- /mesures -->



    <input id="validationCustom36" name="var[]" type="hidden" value="" />
       <!-- Awards -->
       <div class="card">
        <div  id="uldin"  class="card-body">
            <h4 class="card-title">Mesure Supplimentaire</h4>
            <div class="awards-info">
                <div class="row form-row awards-cont">
                  
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <!-- /Awards -->
    




    
    <input id="v2alidationCustom362" name="var2[]" type="hidden" value="" />
    <!-- maladies chroniques -->
    <div class="card">
        <div id="uldin2" class="card-body">
            <h4 class="card-title">Maladies chroniques</h4>
            <div class="registrations-info">
                <div class="row form-row reg-cont">
                    <div class="col-12 col-md-5">
                  {{--       <div class="form-group">
                            <label>Maladies chroniques</label>
                            <input type="text" name="MaladiesCr" value="{{ old('MaladiesCr') }}"  class="form-control @error('MaladiesCr') is-invalid @enderror" required>
                            @error('MaladiesCr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>  --}}
                    </div>
                    <div class="col-12 col-md-5">
                 {{--        <div class="form-group">
                            <label>type</label>
                            <select class="custom-select" name="type" required>
                                <option value="croniques">croniques</option>
                                <option value="ymou">ymou</option>
                                <option value="soker">soker</option>
                                <option value="kbach">kbach</option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="invalid-feedback">Veuillez selectioner un choix</div>
                        </div>  --}}
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-reg"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <!-- /maladies chroniques -->


        
    <input id="v3alidationCustom363" name="var3[]" type="hidden" value="" />
    <!-- Fichier radio  -->
    <div class="card">
        <div id="uldin3" class="card-body">
            <h4 class="card-title">Fichier radio / analyse </h4>
            <div class="membership-info">
                <div class="row form-row membership-cont">
                {{--     <div class="col-12 col-md-10 col-lg-5">
                        <div class="form-group">
                            <label>Fichier radio </label>
                            <input type="file" name="fichier" class="form-control" required>
                        </div> 
                    </div> --}}


            {{--         <div class="col-12 col-md-10 col-lg-5">
                        <div class="form-group">
                            <label>Nom description Fichier radio </label>
                            <input type="text" name="nomFichier" class="form-control" required>
                        </div> 
                    </div> --}}


                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-membership"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <!-- /Fichier radio  -->
    

    <input id="v4alidationCustom364" name="var4[]" type="hidden" value="" />
    <!-- ordonnance -->
    <div class="card">
        <div class="card-body" id="uldin4" >
            <h4 class="card-title">Ordannase</h4>
            <div class="table-responsive">
                <table class="table table-hover table-center mb-0" id="myTabletaii">
                    <thead>
                        <tr>
                            <th>Medicament</th>
                            <th>Duree (nbr de jour)</th>
                            <th>ParJour</th>
                            <th>AvantApres</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="experience-info" >
      
                       
                    </tbody>
                </table>		
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
   
    </div>
    <!-- /ordonnance -->








           
    <!-- recette -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">recette</h4>
            <div class="row form-row">
               <div class="col-md-4">
                    <div class="form-group">
                        <label>recette</label>
                        <input type="number" name="recette" step=".01" min="0"   value="{{ old('recette') }}"  class="form-control @error('recette') is-invalid @enderror" required >
                        @error('recette')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /recette -->




        <!-- Prochain Rdv -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Prochain Rdv</h4>
                <div class="row form-row">
                   <div class="col-md-4">
                        <div class="form-group">
                            <label>la date de Prochain Rvd</label>
                            <input type="datetime-local" name="prRdv"   value="{{ old('prRdv') }}"  class="form-control @error('prRdv') is-invalid @enderror"  >
                            @error('prRdv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Prochain Rdv -->














    <div class="submit-section submit-btn-bottom">
        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>





    
    
 


    
 

    




    
</form>

    
</div>


@endsection



@section('script')
    	<!-- Select2 JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/select2/js/select2.min.js') }}"></script>
		
		<!-- Dropzone JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/dropzone/dropzone.min.js') }}"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
		
		<!-- Profile Settings JS -->
        <script src="{{  asset ('styleDoctorIT/js/profile-settings.js') }}"></script>





        <script>
  
            function submitForm(){
        
              
        var formElements = new Array();
        $("#uldin :input").not("#uldin :button").each(function(){
            formElements.push($(this).val());
        });
        
        var hidinput = document.getElementById('validationCustom36').value= formElements;
        //===============================
        
        var formElements = new Array();
        $("#uldin2 :input").not("#uldin2 :button").each(function(){
            formElements.push($(this).val());
        });
        
        var hidinput = document.getElementById('v2alidationCustom362').value= formElements;
             //===============================
        
        var formElements = new Array();
        $("#uldin3 :input").not("#uldin3 :button").not("#uldin3 :input[type=file]").each(function(){
            formElements.push($(this).val());
        });
        
        var hidinput = document.getElementById('v3alidationCustom363').value= formElements;
         
          
             //===============================
         
                      
        
        var formElements = new Array();
        $("#uldin4 :input").not("#uldin4 :input.radionot:not(:checked)").each(function(){
            formElements.push($(this).val());
        });
        
        var hidinput = document.getElementById('v4alidationCustom364').value= formElements;
         
          
             //===============================
            }
        
        
        
        function addLine() {
        
        var ul = document.getElementById('uldin');
        
         
        var li = document.createElement('li');
        li.classList.add("ms-list-item");
        li.classList.add("ms-to-do-task");
        li.classList.add("ms-deletable");
        
        
        
        var div1 = document.createElement('div');
        div1.classList.add("col-md-12");
        div1.classList.add("mb-3");
        
        
        
        var div2 = document.createElement('div');
        div2.classList.add("input-group");
        
        
  
        var button = document.createElement('button');
        button.classList.add("close");
        button.setAttribute('type', 'submit');
        
        
        var i = document.createElement('i');
        i.classList.add("flaticon-trash");
        i.classList.add("ms-delete-trigger");
        
        
        button.appendChild(i);
        
        
        
        div1.appendChild(div2);
        
        var div4 = document.createElement('div');
        div4.classList.add("col-md-12");
        div4.classList.add("mb-3");
        div4.appendChild(button);
        li.appendChild(div1);
        
        
       
        li.appendChild(div4);
        
       
        
        ul.appendChild(li);
        
        
        
        
        }
        
          </script>
        



		<!-- Form Validation JS -->
        <script src="{{  asset ('styleDoctorIT/admin/js/form-validation.js') }}"></script>


@endsection







@extends('medecin.base')

@section('style')
    	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/bootstrap-datetimepicker.min.css') }}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/select2/css/select2.min.css') }}">
		
@endsection


@section('content')


		























<div class="col-md-7 col-lg-8 col-xl-9">
    <div class="card">
        <div class="card-body">
            
            <!-- Profile Settings Form -->
            <form method="POST" enctype='multipart/form-data'  action="{{ url('medecin/addPatientform') }}" 
            class="needs-validation" novalidate >
            @csrf
        
         
            <div class="row form-row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <div class="change-avatar">
                             
                                <div class="upload-img">
                                    <div class="change-photo-btn">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" name="image" class="upload">
                                            @error('image')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" required >
                                @error('nom')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" required >
                                @error('prenom')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <div class="cal-icon">
                                <input type="date" name="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror datetimepicker" value="{{old('date_naissance')}}" required >
                                    @error('date_naissance')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Groupe Sanguin</label>
                            <select name="groupe_sanguin" class="form-control @error('groupe_sanguin') is-invalid @enderror select">
                                <option value="{{old('groupe_sanguin')}}" selected >{{old('groupe_sanguin')}}</option>
                                <option value="A-" >A-</option>
                                <option value="A+" >A+</option>
                                <option value="B-" >B-</option>
                                <option value="B+" >B+</option>
                                <option value="AB-" >AB-</option>
                                <option value="AB+" >AB+</option>
                                <option value="O-" >O-</option>
                                <option value="O+" >O+</option>
                            </select>
                                @error('groupe_sanguin')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" name="emailPatient" class="form-control @error('emailPatient') is-invalid @enderror" value="{{old('emailPatient')}}" required >
                                @error('emailPatient')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" required >
                                @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>










                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" required >
                                @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" name="password_confirmation"  class="form-control" required >
                            
                        </div>
                    </div>














                    <div class="col-12">
                        <div class="form-group">
                        <label>Adresse</label>
                            <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{old('adresse')}}" required >
                                @error('adresse')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label>Num Securite Sociale</label>
                            <input type="text" name="num_securite_sociale" class="form-control @error('num_securite_sociale') is-invalid @enderror" value="{{old('num_securite_sociale')}}">
                                @error('num_securite_sociale')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Sexe</label>
                            <select name="sexe" class="form-control @error('sexe') is-invalid @enderror">
                                <option value="homme" @if(old('sexe') == "homme") selected @endif >homme</option>
                                <option value="femme" @if(old('sexe') == "femme") selected @endif >femme</option>
                         
                            </select>
                                @error('sexe')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Id Nationale</label>
                            <input type="text" name="id_nationale" class="form-control @error('id_nationale') is-invalid @enderror" value="{{old('id_nationale')}}">
                                @error('id_nationale')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Situation Familiale</label>
                            <input type="text" name="situation_familiale" class="form-control @error('situation_familiale') is-invalid @enderror" value="{{old('situation_familiale')}}" required >
                                @error('situation_familiale')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Profession</label>
                            <input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" value="{{old('profession')}}">
                                @error('profession')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                </div>
            </form>
            <!-- /Profile Settings Form -->
            
        </div>
    </div>
</div>


@endsection





@section('script')
    	<!-- Select2 JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/select2/js/select2.min.js') }}"></script>

	

        		<!-- Datetimepicker JS -->
		<script src="{{  asset ('styleDoctorIT/js/moment.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap-datetimepicker.min.js') }}"></script>

	
		<!-- Sticky Sidebar JS -->
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Form Validation JS -->
        <script src="{{  asset ('styleDoctorIT/admin/js/form-validation.js') }}"></script>


        @endsection


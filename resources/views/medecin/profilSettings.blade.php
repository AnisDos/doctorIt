

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
            <form method="POST" enctype='multipart/form-data'  action="{{ url('medecin/settingsProfilForm') }}" 
            class="needs-validation" novalidate >
            @csrf
            <input type="hidden" name="id_medecin" value="{{Auth::user()->medecin->id}}" >
                <div class="row form-row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <div class="change-avatar">
                                <div class="profile-img">
                                    <img src="/storage/{{Auth::user()->medecin->image}}" alt="User Image">
                                </div>
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
                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{Auth::user()->medecin->nom}}">
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
                            <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{Auth::user()->medecin->prenom}}">
                                @error('prenom')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>


                    
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label> Specialite</label>
                            <input type="text" name="specialite" class="form-control @error('specialite') is-invalid @enderror" value="{{Auth::user()->medecin->specialite}}">
                                @error('specialite')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>


             
                  
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="emailMedecin" class="form-control @error('emailMedecin') is-invalid @enderror" value="{{Auth::user()->medecin->emailMedecin}}">
                                @error('emailMedecin')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>
              


                    
                  
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="number" name="email" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}">
                                @error('email')
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

	


		<!-- Form Validation JS -->
        <script src="{{  asset ('styleDoctorIT/admin/js/form-validation.js') }}"></script>
        		<!-- Datetimepicker JS -->
		<script src="{{  asset ('styleDoctorIT/js/moment.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap-datetimepicker.min.js') }}"></script>

	
		<!-- Sticky Sidebar JS -->
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
        @endsection


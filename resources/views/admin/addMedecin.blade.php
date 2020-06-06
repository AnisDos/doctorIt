






@extends('admin.base')
@section('style')
    	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/bootstrap-datetimepicker.min.css') }}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/select2/css/select2.min.css') }}">
		
@endsection


@section('content')









			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">

                    
        
                    



	     
                    <script type="text/javascript" > 
                        setTimeout(function() {
                     $('#successalert').fadeOut('fast');
                   }, 25000); // <-- time in milliseconds
                   </script>
                  
                 
                      
                      @if (session('success'))
                
                
                            <div  id="successalert"  class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong>{{ session('success') }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                      
                        @endif
                
                        
                @if (session('danger'))
        
            
                    <div  id="successalert"  class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>danger!</strong>{{ session('danger') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                
                  @endif




















			
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

				
				
			
					<div class="row">
						<div class="col-md-12">
						
                        
                            



















                            <div class="card">
                                <div class="card-body">
                                    
                                    <!-- Profile Settings Form -->
                                    <form method="POST" enctype='multipart/form-data'  action="{{ url('admin/addMedecinForm') }}" 
                                    class="needs-validation" novalidate >
                                    @csrf
                                
                                 
                                    <div class="row form-row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="change-avatar">
                                                     
                                                        <div >
                                                            <div class="change-photo-btn">
                                                                
                                                                <input class="btn btn-rounded btn-primary" type="file" name="image" class="upload">
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
                                                    <label>specialite</label>
                                                    <select name="specialite" class="form-control @error('specialite') is-invalid @enderror">
                                                        <option value="generaliste" @if(old('specialite') == "generaliste") selected @endif >généraliste</option>
                                                        <option value="dentist" @if(old('specialite') == "dentist") selected @endif >dentist</option>
                                                 
                                                    </select>
                                                        @error('specialite')
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{old('adresse')}}" required>
                                                        @error('adresse')
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                </div>
                                            </div>

                                    
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="email" name="emailMedecin" class="form-control @error('emailMedecin') is-invalid @enderror" value="{{old('emailMedecin')}}" required >
                                                        @error('emailMedecin')
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                         
                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Enregistrer medecin</button>
                                        </div>
                                    </form>
                                    <!-- /Profile Settings Form -->
                                    
                                </div>
                            </div>




























							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
        
            



@endsection


@section('sctipt')
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

























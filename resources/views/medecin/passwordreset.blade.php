

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
            <form method="POST" enctype='multipart/form-data'  action="{{ url('medecin/passwordResetForm') }} " 
            class="needs-validation" novalidate  >
            @csrf
            <input type="hidden" name="id_medecin" value="{{Auth::user()->medecin->id}}" >
                <div class="row form-row">
           
                    
                
             
              
                      
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label>oldPassword</label>
                            <input type="password" name="oldPassword"  class="form-control @error('oldPassword') is-invalid @enderror" required >
                                @error('oldPassword')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                        </div>
                    </div>


                    
                    <div class="col-12 col-md-12">
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

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" name="password_confirmation"  class="form-control" required >
                            
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









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
            
        <form  method="POST"  action="{{ url('medecin/patientRechercheForm') }}" class="needs-validation" novalidate>
@csrf
            {{-- style="display: inline-block;" --}}

             
            <div class="row form-row">
                <div class="col-8 col-md-8">
                    <div class="form-group">
                        <label>Taper le numero de tlfn de patient correct pour rechercher </label>
                        <input type="number" name="search" class="form-control @error('search') is-invalid @enderror" value="{{old('search')}}" required >
                            @error('search')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                   @enderror
                    </div>
                </div>
                <div class="col-2 col-md-2" style="margin-left:50px;" >
                  
                       
                      
                    <button style="margin-top:32px;" type="submit" class="btn btn-info submit-btn">Recherche</button>
                 
                </div>
    
            </div>

           



        </form>



            
        </div>

    </div>





    @if (session('patient'))
    <div class="row" >
    <div class="card  col-md-4">
        <div class="card-body">
           <div class="row form-row">
        


            <div class="col-12 col-md-12">
                <div class="form-group">
             
                    <div class="change-avatar">
                        <div class="profile-img">
                            <img  src="/storage/{{session('patient')->image}}" alt="User Image">
                        </div>
                      
                    </div>
                </div>
            </div>
            
        
            <div class="col-12 col-md-12">
                <div class="form-group">
                    <label>nom</label>
                    <h1>{{session('patient')->nom}}</h1>
   
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="form-group">
                    <label>Prenom</label>
                    <h1>{{session('patient')->prenom}}</h1>
                </div>
            </div>



            </div>          
        </div>          
    </div>          



    <div class="card  col-md-4">
        <div class="card-body">
           <div class="row form-row">
            <form  method="POST"  action="{{ url('medecin/passwordRechercheForm') }}" class="needs-validation" novalidate>
                @csrf


            <input type="hidden" name="id_patient" value="{{session('patient')->id}}" >
          
            
        
            <div class="col-12 col-md-12">
                <div class="form-group">
                    <label>taper mot de passe de patient</label>
                    <input type="text" name="password" class="form-control" required >
                    @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                </div>
            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary submit-btn">approuve recherche</button>
            </div>
        </form>

            </div>          
        </div>          
    </div>  


</div>
    @endif










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


<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from dreamguys.co.in/demo/doccure/template/doctor-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 17:15:48 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="{{  asset ('styleDoctorIT/img/favicon.png') }}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/fancybox/jquery.fancybox.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
    </head>
    






<!-- ========================================================================== -->


<form id="form_ex_send" method="POST" action="{{ url('/patient/addRdvFormPatient') }}" >
    @csrf


      
   
<div class="modal fade" id="exampleModalkml" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel"></h4>
        </div>
        <div class="modal-body khta">
          <form>
            <div class="form-group">
            
              <input name="id_medecin" id="hiddenIdMedecin" type="hidden" value="" >
              <input name="date_rdv" id="hiddenDateRdv" type="hidden" value="" >
      
         
            </div>
        
          </form>
       <strong>rak treservi rdv 3and   <p id="nomMedecinInconfirmation" > </p> had lwe9t:   <p id="noHiddenDateRdvInConfirmation" > </p>  </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  
          <button type="submit" class="btn btn-primary"  id="regitEx" onclick="event.preventDefault();
          document.getElementById('form_ex_send').submit();"  >Confirmer</button>







       
        </div>
      </div>
    </div>
  </div>       




 

</form>
<!-------------------------------------------------------------------->















	<body>

        

<?php
use Carbon\Carbon;

?>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="{{  asset ('styleDoctorIT/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="{{  asset ('styleDoctorIT/img/logo.png') }}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<div class="col-auto text-right float-right ml-auto">
                                <a href=" {{ url('patient') }} " class="btn btn-primary btn-sm"  >Home</a>
                            </div>
					
						</ul>	 
					</div>		 
			
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Appointments</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Reserve un Appointments</h2>
						</div>
					</div>
				</div>
			</div>
            <!-- /Breadcrumb -->
            










			    
            <script type="text/javascript" > 
                setTimeout(function() {
             $('#successalert').fadeOut('fast');
           }, 19000); // <-- time in milliseconds
           </script>
          
         
              
              @if (session('success'))
              <div class="x_content bs-example-popovers" id="successalert"  style="text-align: center;" >
                <div class="alert alert-success" role="alert" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>well done!</strong> {{ session('success') }}
                  </div>
                </div>
        
              
                @endif
        
                
        @if (session('danger'))
        <div class="x_content bs-example-popovers" id="successalert" style="text-align: center;" >
          <div class="alert alert-danger" role="alert" >
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong>DANGER!</strong> {{ session('danger') }}
            </div>
          </div>
        
        
          @endif

































          



{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> --}}


{{-- <div>
    
<button id="exNoForm" class="ms-btn-icon btn-success"  onclick="changeTextOfLabelInCOnfermationAlert()" type="button" data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap" >exchange</button>

</div>
 --}}





















			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

                    













                    


<div class="col-md-12">
    <h4 class="mb-4">ajouter un Nvx Rdv</h4>
    <div class="appointment-tab">
    
       
        












        
        <div class="tab-content">
        
            <!-- Upcoming Appointment Tab -->
            <div class="tab-pane show active" id="upcoming-appointments">
                <div class="card card-table mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead style="text-align: center;"  >
                                    <tr>
                                        <th style="text-align: start;"  >Temps</th>
                                        <th>{{Carbon::now()->addDays(0)->format('l')}}</th>
                                        
                                        <th>{{Carbon::now()->addDays(1)->format('l')}}</th>
                                        <th>{{Carbon::now()->addDays(2)->format('l')}}</th>
                                        <th>{{Carbon::now()->addDays(3)->format('l')}}</th>
                                        <th>{{Carbon::now()->addDays(4)->format('l')}}</th>
                                        <th>{{Carbon::now()->addDays(5)->format('l')}}</th>
                                        <th>{{Carbon::now()->addDays(6)->format('l')}}</th>
                                     {{--    <th>Purpose</th>
                                        <th>Type</th>
                                        <th class="text-center">Paid Amount</th>
                                        <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody >
<div style="display: none" >
    
{{$idmedecin = $medecin->id}}
{{$nommedecin = $medecin->nom}}
{{$prenommedecin = $medecin->prenom}}
{{-- @foreach($rdvs as $rdv)
{{$idmedecin = $rdv->medecin->id}}
{{$nommedecin = $rdv->medecin->nom}}
{{$prenommedecin = $rdv->medecin->prenom}}
@endforeach --}}
</div>


                                    <tr>
                                        <td >
                                       8.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(7)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap"  >
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(7)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(7)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(7)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(7)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(7)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(7)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(7)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 

                                    <tr>
                                        <td >
                                       8.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(7)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(7)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(7)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(7)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(7)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(7)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(7)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(7)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>


                                    
                                    <tr>
                                        <td >
                                       9.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(8)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(8)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(8)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(8)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(8)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(8)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(8)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(8)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 

      
                                    <tr>
                                        <td >
                                       9.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(8)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(8)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(8)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(8)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(8)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(8)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(8)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(8)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 

                                    
                                    <tr>
                                        <td >
                                       10.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(9)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(9)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(9)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(9)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(9)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(9)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(9)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(9)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 
  
                                    <tr>
                                        <td >
                                       10.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(9)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(9)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(9)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(9)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(9)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(9)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(9)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(9)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 


                                    
                                    <tr>
                                        <td >
                                       11.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(10)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(10)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(10)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(10)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(10)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(10)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(10)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(10)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 




                                    
                                    <tr>
                                        <td >
                                       11.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(10)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(10)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(10)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(10)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(10)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(10)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(10)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(10)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 


                                    
                                    <tr>
                                        <td >
                                       12.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(11)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(11)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(11)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(11)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(11)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(11)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(11)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(11)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 



                                     
                                    <tr>
                                        <td >
                                       12.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(11)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(11)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(11)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(11)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(11)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(11)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(11)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(11)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>

                                    
                                    <tr>
                                        <td >
                                       13.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(12)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(12)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(12)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(12)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(12)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(12)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(12)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(12)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 




                                     
                                    <tr>
                                        <td >
                                       13.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(12)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(12)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(12)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(12)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(12)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(12)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(12)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(12)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                    
                                    <tr>
                                        <td >
                                       14.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(13)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(13)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(13)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(13)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(13)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(13)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(13)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(13)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 




                                    <tr>
                                        <td >
                                       14.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(13)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(13)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(13)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(13)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(13)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(13)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(13)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(13)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 


                                    
                                    <tr>
                                        <td >
                                       15.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(14)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(14)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(14)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(14)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(14)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(14)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(14)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(14)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 



                                 


                                    
                                    <tr>
                                        <td >
                                       15.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(14)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(14)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(14)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(14)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(14)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(14)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(14)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(14)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 
                                    
                                    <tr>
                                        <td >
                                       16.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(15)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(15)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(15)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(15)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(15)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(15)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(15)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(15)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 



                                    
                                 
                                 


                                    
                                 
                                    
                                    <tr>
                                        <td >
                                       16.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(15)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(15)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(15)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(15)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(15)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(15)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(15)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(15)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 

                                    
                                    <tr>
                                        <td >
                                       17.00
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(16)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(16)->format('Y-m-d H')}} 00" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(16)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(16)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(16)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(16)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(16)->format('Y-m-d H')}} 00"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(16)->format('Y-m-d H')}} 00')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 



                                
    
                                    <tr>
                                        <td >
                                       17.30
                                        </td>
                                        
                                        <td >
                                            <div class="table-action" style="text-align: center;"    >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(0)->addHour(16)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(0)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(1)->addHour(16)->format('Y-m-d H')}} 30" href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(1)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(2)->addHour(16)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(2)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(3)->addHour(16)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(3)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(4)->addHour(16)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(4)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(5)->addHour(16)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(5)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                        <td >
                                            <div class="table-action" style="text-align: center;"  >
                                                <a id="{{(Carbon::now()->setHours(01))->addDays(6)->addHour(16)->format('Y-m-d H')}} 30"  href="javascript:void(0);" class="btn btn-sm bg-info-light"
 onclick="changeTextOfLabelInCOnfermationAlert({{$idmedecin}},'{{$nommedecin}}','{{$prenommedecin}}','{{(Carbon::now()->setHours(01))->addDays(6)->addHour(16)->format('Y-m-d H')}} 30')"  data-toggle="modal" data-target="#exampleModalkml" data-whatever="@getbootstrap">
                                                    <i class="far fa-"></i>+
                                                </a>
                                                
                                            </div>
                                        </td>
                                 
                                     
                                    </tr>
                                 
















                              


                                </tbody>
                            </table>		
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Upcoming Appointment Tab -->
     
            
        </div>
    </div>
</div>



















                    









				</div>
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{  asset ('styleDoctorIT/img/footer-logo.png') }}" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.html">Search for Doctors</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="booking.html">Booking</a></li>
										<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.html">Appointments</a></li>
										<li><a href="chat.html">Chat</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="doctor-register.html">Register</a></li>
										<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2020 Doccure. All rights reserved.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
		
	
		

		
		<!-- jQuery -->
		<script src="{{  asset ('styleDoctorIT/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  asset ('styleDoctorIT/js/popper.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap.min.js') }}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		
		<!-- Custom JS -->
        <script src="{{  asset ('styleDoctorIT/js/script.js') }}"></script>
        


        
        <script>

            function codeAddress() {
              
                var rdvs = {!! json_encode($rdvs); !!};
            
                rdvs.forEach(function (rdv) {
            
            
                  var jki =new Date(rdv['date']);
                  var dateBDD  = jki.getFullYear()+'-'+(('0' + (jki .getMonth()+1)).slice(-2))+'-'+(('0' +  jki.getDate()).slice(-2))+' '+('0' + ( jki.getHours())).slice(-2)+' '+('0' + ( jki.getMinutes())).slice(-2)  ;
                
                  
                    console.log(dateBDD);
                  //  console.log(jki);
            
                    if (document.getElementById(dateBDD) !=null) {
                        document.getElementById(dateBDD).style.display = "none"; 
                    }else {
                       
                        console.log('makacgh mal9ach la date ');
                    }
              
            });
            
            
               
            
            
            
                    }
                    window.onload = codeAddress;
            
            
            
            
            
            
            
                         </script>







<script>


    function changeTextOfLabelInCOnfermationAlert(idmedecin,nommedecin,prenommedecin,date){
    
        
        
console.log(idmedecin,nommedecin,prenommedecin,date)
      document.getElementById('hiddenIdMedecin').value = idmedecin;
      document.getElementById('hiddenDateRdv').value = date;
      
      document.getElementById('nomMedecinInconfirmation').innerHTML = nommedecin + ' ' + prenommedecin ;   
       
      document.getElementById('noHiddenDateRdvInConfirmation').innerHTML = date;   
       

   
            
            
            };




          function deleteProduct(id_product,name){
    
                            
    document.getElementById('hiddenIdMedecinDelete').value = id_product;
    document.getElementById('labelToDelete').innerHTML = name;
          
      
          
          
          };

            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(document).ready(function() {
$('.khta input').on('keyup', function() {
  let empty = false;

  $('.khta input').each(function() {
    
    if ($(this).val() == '') {
      empty = true;
  }
  });
  
  if (empty){
  document.getElementById('nomMedecinInconfirmation').innerHTML = "";
    $('#regitEx').attr('disabled', 'disabled');}
  else{
  $old = document.getElementById('idOldQntt').value;
  $new = document.getElementById('recipient-name').value;
  $total = +$old + +$new;
  document.getElementById('nomMedecinInconfirmation').innerHTML = $total  ;
    $('#regitEx').attr('disabled', false);}
});
});


$(document).ready(function() {
$('.khtaRevoke input').on('keyup', function() {
  let empty = false;

  $('.khtaRevoke input').each(function() {
    
    if ($(this).val() == '') {
      empty = true;
  }
  });
  
  if (empty){
  document.getElementById('nomMedecinInconfirmationRevoke').innerHTML = "";
    $('#regitExRevoke').attr('disabled', 'disabled');}
  else{
  $old = document.getElementById('idOldQnttRevoke').value;
  $new = document.getElementById('recipient-name-Revoke').value;
  $total = +$old - +$new;
  document.getElementById('nomMedecinInconfirmationRevoke').innerHTML = $total  ;
    $('#regitExRevoke').attr('disabled', false);}
});
});



$(document).ready(function() {
$('.khtaDelete input').on('keyup', function() {
  let empty = false;

  $('.khtaDelete input').each(function() {
    
    if ($(this).val() == '') {
      empty = true;
  }
  });
  
  if (empty){
    $('#regitExDelete').attr('disabled', 'disabled');}
  else{
    $('#regitExDelete').attr('disabled', false);}
});
});



//--------------------------------------------------------------------------

</script>















		
	</body>

</html>
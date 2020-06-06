


@extends('patient.base')

@section('style')
<style>
    /*-----------------
6. Toggle Button
-----------------------*/

.check {
display: block;
margin: 0;
padding: 0;
width: 0;
height: 0;
visibility: hidden;
opacity: 0;
pointer-events: none;
position: absolute;
}
.checktoggle {
background-color: #e0001a;
border-radius: 12px;
cursor: pointer;
display: block;
font-size: 0;
height: 24px;
margin-bottom: 0;
position: relative;
width: 48px;
}
.checktoggle:after {
content: ' ';
display: block;
position: absolute;
top: 50%;
left: 0;
transform: translate(5px, -50%);
width: 16px;
height: 16px;
background-color: #fff;
border-radius: 50%;
transition: left 300ms ease, transform 300ms ease;
}
.check:checked + .checktoggle {
background-color: #55ce63;
}
.check:checked + .checktoggle:after {
left: 100%;
transform: translate(calc(-100% - 5px), -50%);
}
.onoffswitch {
margin-left: auto;
position: relative;
width: 73px;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select: none;
}
.onoffswitch-checkbox {
display: none;
}
.onoffswitch-label {
display: block; 
overflow: hidden; 
cursor: pointer;
border-radius: 20px;
margin-bottom: 0;
}
.onoffswitch-inner {
display: block;
margin-left: -100%;
transition: margin 0.3s ease-in 0s;
width: 200%;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
box-sizing: border-box;
color: #fff;
display: block;
float: left;
font-size: 16px;
height: 30px;
line-height: 32px;
padding: 0;
width: 50%;
}
.onoffswitch-inner:before {
background-color: #55ce63;
color: #fff;
content: "ON";
padding-left: 14px;
}
.onoffswitch-inner:after {
content: "OFF";
padding-right: 14px;
background-color: #ccc;
color: #fff;
text-align: right;
}
.onoffswitch-switch {
background: #fff;
border-radius: 20px;
bottom: 0;
display: block;
height: 20px;
margin: 5px;
position: absolute;
right: 43px;
top: 0;
transition: all 0.3s ease-in 0s;
width: 20px;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
right: 0px; 
}

</style>


    <link rel="stylesheet" href="{{  asset ('styleDoctorIT/admin/plugins/datatables/datatables.min.css') }}">
@endsection

@section('content')



<?php
use Carbon\Carbon;

?>





			    
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














						<div class="col-md-7 col-lg-8 col-xl-9">

            
                            









							
							<div class="row">









                                <div class="col-md-12">





                                    <!-- Recent Orders -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Doctor Name</th>
                                                            <th>Speciality</th>
                                                         
                                                            <th>Apointment Time</th>
                                                            <th>Status</th>
                                                            <th class="text-right">Amount</th>
                                                  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
        
        
        
        
        
        
        @foreach ($rdvs as $rdv)
            
        
        <tr>
            <td>
                <h2 class="table-avatar">
                    {{$rdv->medecin->nom}} {{$rdv->medecin->prenom}} 
                </h2>
            </td>

            <td>
                <h2 class="table-avatar">
                    {{$rdv->medecin->specialite}} 
                </h2>
            </td>
            <td> <span class="text-primary d-block">   {{$rdv->date}} </span></td>
            <td>
                <div class="status-toggle">
                    <p style="display: none" >    {{$rdv->valide}}  </p>
                    <input type="checkbox" id="status_1" onclick="return false;" class="check" @if($rdv->valide)  checked @endif >
                    <label for="status_1" class="checktoggle">checkbox</label>
                </div>
            </td>
            <td class="text-right">
                $200.00
            </td>
    
        </tr>
        
        
        
        
        
        @endforeach
        
        
        
        
        
        
        
                                       
                                                
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Recent Orders -->
                                    
                                    
        
        
        
        
        
                                    </div>
        


















                             














<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<!--========================================================================================-->











<div class="col-md-12">
    <h4 class="mb-4">Mes Medecins</h4>
    <div class="appointment-tab">
    
  
        
        <div class="tab-content">
        
            <!-- Upcoming Appointment Tab -->
            <div class="tab-pane show active" id="upcoming-appointments">
                <div class="card card-table mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Nom Medecin</th>
                                        <th>Specialite</th>
                                        <th>adresse</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($myMedecins as $myMedecin)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{  asset ('styleDoctorIT/img/patients/patient.jpg') }}" alt="User Image"></a>
                                                <a href="patient-profile.html">{{$myMedecin->medecin->nom}} {{$myMedecin->medecin->prenom}} <span>#PT0016</span></a>
                                            </h2>
                                        </td>
                                        <td>{{$myMedecin->medecin->specialite}} </td>
                                        <td>{{$myMedecin->medecin->adresse}}</td>
                              
                                        <td class="text-right">
                                            <div class="table-action"  >
                                         
                                            <a href="/patient/appointmentsavecmedecin/{{$myMedecin->medecin->id}}" class="btn btn-sm bg-success-light">
                                                    <i class="fas fa-check"></i> Accept
                                                </a>
                                          
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                
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














			
            @endsection
            



            @section('script')
            <script type="text/javascript">
                $(document).ready(function() {
                $('#example').DataTable();
            } );
            </script>
                    
                    <!-- Datatables JS -->
                    <script src="{{  asset ('styleDoctorIT/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
                    <script src="{{  asset ('styleDoctorIT/admin/plugins/datatables/datatables.min.js') }}"></script>
                    
            @endsection
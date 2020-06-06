






@extends('medecin.base')


@section('style')
    
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/select2/css/select2.min.css') }}">
			
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
		
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/dropzone/dropzone.min.css') }}">
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


		























<div class="col-md-7 col-lg-8 col-xl-9">
						
   
    





<!--================================================================================-->
<div class="row">




    

















    <div class="col-md-12">
    






<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Medecin</th>
													<th>Specialite</th>
													<th>Patient Name</th>
													<th>Date Visite</th>
													<th>Status</th>
													<th class="text-right">Amount</th>
													<th>action</th>
												</tr>
											</thead>
											<tbody>






@foreach ($visites as $visite)


<tr>
    <td>
        @if($visite->medecin->id == Auth::user()->medecin->id)
         <h4 style="color: red" >MOI</h4>
          @else
          <a href="profile.html">{{$visite->medecin->nom}} {{$visite->medecin->prenom}}</a>
          @endif 
        
        
    
    </td>
    <td>{{$visite->medecin->specialite}} </td>
    <td>
         <a href="profile.html">wch ndir</a>

    </td>
    <td>{{$visite->created_at}}</td>
    <td>
    {{--     <div class="status-toggle">
            <input type="checkbox" id="status_1" class="check" checked>
            <label for="status_1" class="checktoggle">checkbox</label>
        </div> --}}

        ????? wch 
    </td>
    <td class="text-right">
        ????? wch 
    </td>
    <td >
    <a href="/medecin/checkVisitePatient/{{$visite->id}}" class="btn btn-rounded btn-outline-info" style="color:green" >vérifier</a>
    </td>
</tr>





@endforeach






											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
                       


<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->
<!--================================================================================-->














    </div>










</div>


<!--==========================================================================================================--->













    
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





		<!-- Form Validation JS -->
        <script src="{{  asset ('styleDoctorIT/admin/js/form-validation.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('#example').DataTable();
        } );
        </script>
                
                <!-- Datatables JS -->
                <script src="{{  asset ('styleDoctorIT/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{  asset ('styleDoctorIT/admin/plugins/datatables/datatables.min.js') }}"></script>
                

@endsection
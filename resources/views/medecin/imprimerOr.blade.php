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
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		
			
		
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

			
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
						
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-12">



										
                                            


                                       	
                                            


                                            
										
										
                                    
                                            














   






            @if($visite->medicaments()->exists())
								
											<!-- Awards Details -->
										
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h1 class="card-title">Ordonnance</h1>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                      
                                                                        <th>Nom Medicament</th>
                                                                        <th>Duree</th>
                                                                        <th>nbr De fois Par Jour</th>
                                                                        <th>Avent ou Apres Repas</th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>


                                                                    @foreach ($visite->medicaments()->get() as $medicament)
                                                                    <tr>
                                                      
                                                                        <td>{{$medicament->nomMedicament}}</td>
                                                                        <td>{{$medicament->Duree}}</td>
                                                                        <td>{{$medicament->nbrDefoisParJour}}</td>
                                                                        <td>{{$medicament->AventApres}}</td>
                                                                        
                                                                    </tr>

                                                                    @endforeach
                                                                  
                                                                 



                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
										
											<!-- /Awards Details -->
										
    <div class="submit-section submit-btn-bottom" id="divtohid" >
        <a onclick="printor()"  style="color:white"  class="btn btn-info submit-btn">Imprimer Ordonnance</a>
    </div>
	
											


            @endif                                    













										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
						
							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

				</div>
			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="{{  asset ('styleDoctorIT/img/doctors/doctor-thumb-02.jpg')}}" class="call-avatar">
										<h4>Dr. Darren Elder</h4>
										<span>Connecting...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->
		
		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
					
						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="{{  asset ('styleDoctorIT/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										<h4>Dr. Darren Elder</h4>
										<span>Calling ...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->
						
					</div>
				</div>
			</div>
		</div>
        <!-- Video Call Modal -->
        <script>
            function printor(){

                document.getElementById("divtohid").style.visibility = "hidden";;

                window.print()
            }
        </script>
		
		<!-- jQuery -->
		<script src="{{  asset ('styleDoctorIT/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  asset ('styleDoctorIT/js/popper.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap.min.js') }}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{  asset ('styleDoctorIT/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{  asset ('styleDoctorIT/js/script.js') }}"></script>
		
	</body>

</html>
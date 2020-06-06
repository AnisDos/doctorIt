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
							<li>
								<a href="index.html">Return</a>
							</li>
					
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
									<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Doctor Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="{{  asset ('styleDoctorIT/img/doctors/doctor-thumb-02.jpg')}}" class="img-fluid" alt="User Image">
									</div>
									<div class="doc-info-cont">
										<h4 class="doc-name">Dr. Darren Elder</h4>
										<p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
										<p class="doc-department"><img src="{{  asset ('styleDoctorIT/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">Dentist</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div>
										<div class="clinic-details">
											<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA - <a href="javascript:void(0);">Get Directions</a></p>
											<ul class="clinic-gallery">
												<li>
													<a href="{{  asset ('styleDoctorIT/img/features/feature-01.jpg')}}" data-fancybox="gallery">
														<img src="{{  asset ('styleDoctorIT/img/features/feature-01.jpg')}}" alt="Feature">
													</a>
												</li>
												<li>
													<a href="{{  asset ('styleDoctorIT/img/features/feature-02.jpg')}}" data-fancybox="gallery">
														<img  src="{{  asset ('styleDoctorIT/img/features/feature-02.jpg')}}" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="{{  asset ('styleDoctorIT/img/features/feature-03.jpg')}}" data-fancybox="gallery">
														<img src="{{  asset ('styleDoctorIT/img/features/feature-03.jpg')}}" alt="Feature">
													</a>
												</li>
												<li>
													<a href="{{  asset ('styleDoctorIT/img/features/feature-04.jpg')}}" data-fancybox="gallery">
														<img src="{{  asset ('styleDoctorIT/img/features/feature-04.jpg')}}" alt="Feature">
													</a>
												</li>
											</ul>
										</div>
										<div class="clinic-services">
											<span>Dental Fillings</span>
											<span>Teeth Whitneing</span>
										</div>
									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> 99%</li>
											<li><i class="far fa-comment"></i> 35 Feedback</li>
											<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
											<li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
										</ul>
									</div>
									<div class="doctor-action">
										<a href="javascript:void(0)" class="btn btn-white fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
										<a href="chat.html" class="btn btn-white msg-btn">
											<i class="far fa-comment-alt"></i>
										</a>
										<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#voice_call">
											<i class="fas fa-phone"></i>
										</a>
										<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#video_call">
											<i class="fas fa-video"></i>
										</a>
									</div>
									<div class="clinic-booking">
										<a class="apt-btn" href="booking.html">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
									</li>
						
                                    @if($visite->medecin_id == Auth::user()->medecin->id)
									<li class="nav-item">
										<a class="nav-link" href="#doc_business_hours" data-toggle="tab">Info prive</a>
                                    </li>
                                    @endif
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-12">



                                            {{-- motif
                                            examens
                                            diagnostiques
                                            note
                                            recette
                                            taille
                                            poids
                                            tension --}}
										
											<!-- motif Details -->
											<div class="widget about-widget">
												<h1 class="widget-title">motif</h1>
                                        <p>  {{$visite->motif}}   </p>
                                    </div>
                                            <!-- /motif Details -->
                                            


                                       		<!-- examens Details -->
											<div class="widget about-widget">
												<h1 class="widget-title">examens</h1>
                                        <p>  {{$visite->examens}}   </p>
                                            </div>
                                            <!-- /examens Details -->
                                            




                                            		<!-- diagnostiques Details -->
											<div class="widget about-widget">
												<h1 class="widget-title">diagnostiques</h1>
                                        <p>  {{$visite->diagnostiques}}   </p>
                                            </div>
                                            <!-- /diagnostiques Details -->
                                            
										
											<!-- Mesures Details -->
											<div class="widget education-widget">
												<h1 class="widget-title">Mesures</h1>
												<div class="experience-box">
													<ul class="experience-list">
                                                        
                                                        
                                                        
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">taille</a>
																	<div> {{$visite->taille}}</div>
															
																</div>
															</div>
                                                        </li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">poids</a>
																	<div> {{$visite->poids}}</div>
															
																</div>
															</div>
                                                        </li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">tension</a>
																	<div> {{$visite->tension}}</div>
															
																</div>
															</div>
                                                        </li>
                                              
											
													</ul>
												</div>
											</div>
											<!-- /Mesures Details -->
                                    
                                            











@if($visite->mesures()->exists())
	<!-- Experience Details -->
    <div class="widget experience-widget">
        <h1 class="widget-title">Mesures en Plus</h1>
        <div class="experience-box">
            <ul class="experience-list">

                @foreach ($visite->mesures()->get() as $mesure)
                <li>
                    <div class="experience-user">
                        <div class="before-circle"></div>
                    </div>
                    <div class="experience-content">
                        <div class="timeline-content">
                        <a href="#/" class="name">{{$mesure->nomMesure}}</a>
                            <span class="time">{{$mesure->mesure}}</span>
                        </div>
                    </div>
                </li> 
                @endforeach
          
               
            </ul>
        </div>
    </div>
    <!-- /Experience Details -->
@endif






@if($visite->fichiers()->exists())
			<!-- Clinic Content -->
            <div class="widget experience-widget">
                <div class="clinic-content">
                    <h1 class="clinic-name"><a href="#">Radio ou fichier</a></h1>
               
         
                    <div class="clinic-details mb-0">
                      <ul>
                            @foreach ($visite->fichiers()->get() as $fichier)
                            <li>
                                <a href="/storage/{{$fichier->fichier}}" data-fancybox="gallery2">
                                    <img src="/storage/{{$fichier->fichier}}" alt="Feature Image">
                                </a>
                            </li>
                            @endforeach
            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Clinic Content -->
            @endif
            
            






            @if($visite->medicaments()->exists())
								
											<!-- Awards Details -->
											<div class="widget awards-widget">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h1 class="card-title">Ordonnance</h1>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                      
                                                                        <th>nomMedicament</th>
                                                                        <th>Duree</th>
                                                                        <th>nbrDefoisParJour</th>
                                                                        <th>AventApres</th>
                                                                        <th>en_cours</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>


                                                                    @foreach ($visite->medicaments()->get() as $medicament)
                                                                    <tr>
                                                      
                                                                        <td>{{$medicament->nomMedicament}}</td>
                                                                        <td>{{$medicament->Duree}}</td>
                                                                        <td>{{$medicament->nbrDefoisParJour}}</td>
                                                                        <td>{{$medicament->AventApres}}</td>
                                                                        <td>{{$medicament->en_cours}}</td>
                                                                    </tr>

                                                                    @endforeach
                                                                  
                                                                 



                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
											<!-- /Awards Details -->
										
    <div class="submit-section submit-btn-bottom">
        <a href="/medecin/imprimerOr/{{$visite->id}}"  style="color:white"  class="btn btn-info submit-btn">Imprimer Ordonnance</a>
    </div>
	
											


            @endif                                    













										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
						
								@if($visite->medecin_id == Auth::user()->medecin->id)
								<!-- Business Hours Content -->
								<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
									<div class="row">
										<div class="col-md-6 offset-md-3">
										
											<!-- Business Hours Widget -->
											<div class="widget business-widget">

												<div class="widget-content">


                                                    <div class="widget about-widget">
                                                        <h4 class="widget-title" style="color: red" >NB: juste vous qui peut vois cette info</h4>
                                                 
                                                    </div>
    
    




                                                    <div class="widget about-widget">
                                                        <h1 class="widget-title">note</h1>
                                                      <p>  {{$visite->note}}   </p>
                                                     </div>


                                                   <div class="widget about-widget">
											     	<h1 class="widget-title">recette</h1>
                                                    <p>  {{$visite->recette}}  DA </p>
                                                        </div>





												</div>
											</div>
											<!-- /Business Hours Widget -->
									
										</div>
									</div>
								</div>
                                <!-- /Business Hours Content -->
                                
                                 @endif
								
							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

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
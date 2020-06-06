<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from dreamguys.co.in/demo/doccure/template/chat-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 17:15:44 GMT -->
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
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body class="chat-page">
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
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li class="has-submenu active">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
									<li><a href="appointments.html">Appointments</a></li>
									<li><a href="schedule-timings.html">Schedule Timing</a></li>
									<li><a href="my-patients.html">Patients List</a></li>
									<li><a href="patient-profile.html">Patients Profile</a></li>
									<li class="active"><a href="chat-doctor.html">Chat</a></li>
									<li><a href="invoices.html">Invoices</a></li>
									<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
									<li><a href="reviews.html">Reviews</a></li>
									<li><a href="doctor-register.html">Doctor Register</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Doctors</a>
										<ul class="submenu">
											<li><a href="map-grid.html">Map Grid</a></li>
											<li><a href="map-list.html">Map List</a></li>
										</ul>
									</li>
									<li><a href="search.html">Search Doctor</a></li>
									<li><a href="doctor-profile.html">Doctor Profile</a></li>
									<li><a href="booking.html">Booking</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="booking-success.html">Booking Success</a></li>
									<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="chat.html">Chat</a></li>
									<li><a href="profile-settings.html">Profile Settings</a></li>
									<li><a href="change-password.html">Change Password</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="search.html">Search Doctors</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="components.html">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="invoice-view.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.html" target="_blank">Admin</a>
							</li>
							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Darren Elder</h6>
										<p class="text-muted mb-0">Doctor</p>
									</div>
								</div>
								<a class="dropdown-item" href="doctor-dashboard.html">Dashboard</a>
								<a class="dropdown-item" href="doctor-profile-settings.html">Profile Settings</a>
								<a class="dropdown-item" href="login.html">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->



		


{{-- 		<div class="row" >

			<div class="col-md-6" style="color: red" >


			
			
			@foreach($contactsmedecin as $contactmedecin)
			<span onclick="load_data_message({{$contactmedecin->id}})"  >{{$contactmedecin->nom}} {{$contactmedecin->prenom}} medecin</span><br>
			@endforeach



			
			@foreach($contactsadmin as $contactadmin)
			<span onclick="load_data_message({{$contactadmin->id}})"  >{{$contactadmin->id}} admin</span><br>
			@endforeach
			
			</div>
			
		<div id="post_data_message1"  class="col-md-6 contentdaymen" style="color:blue "  >

		ghfgdhgf	
		</div>

		</div> --}}

		

		<div class="panel-body">
			{{ csrf_field() }}
			<div id="post_data"></div>
		   </div>
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
	
		function sendMessage(id,type,nom,prenom,image )
		{
			//console.log(type,id);
			var inputMessage = $('#inputMessage').val();
			var _token = $('input[name="_token"]').val();
			$('#inputMessage').val("");
			$.ajax({
   url:"{{ url('message/send') }}",
   method:"POST",
   data:{id:id,type:type,inputMessage:inputMessage ,_token:_token},
   success:function(data)
   {
	console.log(type,id);
    load_data_message(id,type,nom,prenom,image,'innovar'  );
   }
  });
  

		}

function load_data_message(id,type,nom,prenom,image,vu )
 {
	$('#load_more_button').html('<b>Loading...</b>');
	console.log(type,nom,prenom);
	console.log('fjghfjghfjhgfjhgfjhgfjghfjhgfjghfjhgfjghf');

	var _token = $('input[name="_token"]').val();
	$.ajax({
   url:"{{ route('loadmore.load_data') }}",
   method:"POST",
   data:{id:id,type:type,vu:vu ,_token:_token},
   success:function(data)
   {
		$('#load_more_button').remove();
	//	$('#post_data_message').html(data);
	$('#chat_scroll_div').html(data);

		
		$('#imagetgeserm3ah').attr("src","/storage/"+image);
		$('#nomtgeserm3ah').html(nom + ' ' + prenom);

		
        $('#buttonchangeonclick').attr('onclick','sendMessage('+id+',"'+type+'","'+nom+'","'+prenom+'","'+image+'" )');

		
		$('#idhiddenforrealtime').val(id);
		$('#typehiddenforrealtime').val(type);
		$('#imagehiddenforrealtime').val(image);
		$('#nomhiddenforrealtime').val(nom);
		$('#prenomhiddenforrealtime').val(prenom);
		
		


		$('#chat_scroll_div').scrollTop($('#chat_scroll_div')[0].scrollHeight);

   }
  })




 }

 //==================================================================//
 window.setInterval(function(){
	 console.log('jhkl');
  console.log($('#idhiddenforrealtime').val());
  console.log('jhkl');

  if($('#idhiddenforrealtime').val() != ""){
	console.log('hhhhhhhhhhhhhhhh');
	load_data_message($('#idhiddenforrealtime').val(),	$('#typehiddenforrealtime').val(),$('#nomhiddenforrealtime').val(),$('#prenomhiddenforrealtime').val(),$('#imagehiddenforrealtime').val(),'innovar' );

  }
	

}, 5000);
 //==================================================================//



$(document).ready(function(){
 
 var _token = $('input[name="_token"]').val();

 load_data('', _token);

 function load_data(id, _token)
 {
  $.ajax({
   url:"{{ route('loadmore.load_data') }}",
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#load_more_button').remove();
    $('#post_data_message').append(data);
   }
  })
 }

 $(document).on('click', '#load_messages', function(){
  var id = $(this).data('id');
  $('#load_more_button').html('<b>Loading...</b>');
  load_data(id, _token);
 });




});
</script>











			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12">
							<div class="chat-window">
							
								<!-- Chat Left -->
								<div class="chat-cont-left">
									<div class="chat-header">
										<span>Chats</span>
										<a href="javascript:void(0)" class="chat-compose">
											<i class="material-icons">control_point</i>
										</a>
									</div>
									<form class="chat-search">
										<div class="input-group">
											<div class="input-group-prepend">
												<i class="fas fa-search"></i>
											</div>
											<input type="text" class="form-control" placeholder="Search">
										</div>
									</form>
									<div class="chat-users-list">
										<div class="chat-scroll">

											
											

											@foreach($contactsmedecin as $contactmedecin)

											
											<a onclick="load_data_message({{$contactmedecin->id}}, 'medecin' , '{{$contactmedecin->nom}}','{{$contactmedecin->prenom}}','{{$contactmedecin->image}}','innovartech' )" class="media">
											
												<div class="media-body">
													<div>
														<div class="user-name">{{$contactmedecin->nom}} {{$contactmedecin->prenom}}</div>
														<div class="user-last-chat">Hey, How are you?</div>
													</div>
													<div>
														<div class="last-chat-time block"> @if((Carbon::now())->diffInDays(Carbon::parse($contactmedecin->ddmsg)) != 0 ){{(Carbon::now())->diffInDays(Carbon::parse($contactmedecin->ddmsg))}} jours @else   @if((Carbon::now())->diffInHours(Carbon::parse($contactmedecin->ddmsg)) == 0 ){{(Carbon::now())->diffInMinutes(Carbon::parse($contactmedecin->ddmsg))}} min @else{{(Carbon::now())->diffInHours(Carbon::parse($contactmedecin->ddmsg))}} hours @endif @endif  </div>
													@if(!$contactmedecin->vu) <div class="badge badge-success badge-pill">.</div> @endif	
													</div>
												</div>
											</a>


                                          @endforeach

										  @foreach($contactsadmin as $contactadmin)

											
										  <a onclick="load_data_message({{$contactadmin->id}}, 'admin', '{{$contactadmin->nom}}','{{$contactadmin->prenom}}','{{$contactadmin->image}}','innovartech')" class="media">
											
											  <div class="media-body">
												  <div>
													  <div class="user-name">{{$contactadmin->nom}} {{$contactadmin->prenom}}</div>
													  <div class="user-last-chat">Hey, How are you?</div>
												  </div>
												  <div>
													  <div class="last-chat-time block"> {{ Carbon::now() - Carbon::parse($contactadmin->created_at) }}  2 min</div>
													  <div class="badge badge-success badge-pill">.</div>
												  </div>
											  </div>
										  </a>


										@endforeach


									{{-- 		<a href="javascript:void(0);" class="media read-chat active">
												<div class="media-img-wrap">
													<div class="avatar avatar-online">
														<img src="assets/img/patients/patient1.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Charlene Reed</div>
														<div class="user-last-chat">I'll call you later </div>
													</div>
													<div>
														<div class="last-chat-time block">8:01 PM</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-away">
														<img src="assets/img/patients/patient2.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Travis Trimble </div>
														<div class="user-last-chat">Give me a full explanation about our project</div>
													</div>
													<div>
														<div class="last-chat-time block">7:30 PM</div>
														<div class="badge badge-success badge-pill">3</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-online">
														<img src="assets/img/patients/patient3.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Carl Kelly</div>
														<div class="user-last-chat">That's very good UI design</div>
													</div>
													<div>
														<div class="last-chat-time block">6:59 PM</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-offline">
														<img src="assets/img/patients/patient4.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Michelle Fairfax</div>
														<div class="user-last-chat">Yesterday i completed the task</div>
													</div>
													<div>
														<div class="last-chat-time block">11:21 AM</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-online">
														<img src="assets/img/patients/patient5.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Gina Moore</div>
														<div class="user-last-chat">What is the major functionality?</div>
													</div>
													<div>
														<div class="last-chat-time block">10:05 AM</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-away">
														<img src="assets/img/patients/patient6.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Elsie Gilley</div>
														<div class="user-last-chat">This has allowed me to showcase not only my technical skills</div>
													</div>
													<div>
														<div class="last-chat-time block">Yesterday</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-offline">
														<img src="assets/img/patients/patient7.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Joan Gardner</div>
														<div class="user-last-chat">Let's talk briefly in the evening. </div>
													</div>
													<div>
														<div class="last-chat-time block">Sunday</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-online">
														<img src="assets/img/patients/patient8.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Daniel Griffing</div>
														<div class="user-last-chat">Do you have any collections? If so, what of?</div>
													</div>
													<div>
														<div class="last-chat-time block">Saturday</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat">
												<div class="media-img-wrap">
													<div class="avatar avatar-away">
														<img src="assets/img/patients/patient9.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<div class="user-name">Walter Roberson</div>
														<div class="user-last-chat">Connect the two modules with in 1 day.</div>
													</div>
													<div>
														<div class="last-chat-time block">Friday</div>
													</div>
												</div>
											</a> --}}
										</div>
									</div>
								</div>
								<!-- /Chat Left -->
								
								<!-- Chat Right -->
								<div class="chat-cont-right">
									<div class="chat-header">
										<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
											<i class="material-icons">chevron_left</i>
										</a>
										<div class="media" id="realtimeid"  >
											<div class="media-img-wrap">
												<div class="avatar avatar-online">
													<img id="imagetgeserm3ah"  src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body">
												<div class="user-name" id="nomtgeserm3ah" > </div>
												
											</div>
											

											<input type="hidden" id="idhiddenforrealtime" value="" >
											<input type="hidden" id="typehiddenforrealtime" value="" >
											<input type="hidden" id="imagehiddenforrealtime" value="" >
											<input type="hidden" id="nomhiddenforrealtime" value="" >
											<input type="hidden" id="prenomhiddenforrealtime" value="" >



										</div>
										<div class="chat-options">
											<a href="javascript:void(0)" data-toggle="modal" data-target="#voice_call">
												<i class="material-icons">local_phone</i>
											</a>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#video_call">
												<i class="material-icons">videocam</i>
											</a>
											<a href="javascript:void(0)">
												<i class="material-icons">more_vert</i>
											</a>
										</div>
									</div>



















 <div class="chat-body" id="post_data_message"   >
	<div class="chat-scroll" id="chat_scroll_div" >





	





	
	</div>
	<div class="chat-footer">
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="btn-file btn">
					<i class="fa fa-paperclip"></i>
					<input type="file">
				</div>
			</div>
			<input id="inputMessage" type="text" class="input-msg-send form-control" placeholder="Type something">
			<div class="input-group-append">
				<button id="buttonchangeonclick"  class="btn msg-send-btn"><i class="fab fa-telegram-plane"></i></button>
			</div>
		</div>
		</div>
</div>














									
							{{-- 		<div class="chat-footer">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="btn-file btn">
													<i class="fa fa-paperclip"></i>
													<input type="file">
												</div>
											</div>
											<input id="inputMessage" type="text" class="input-msg-send form-control" placeholder="Type something">
											<div class="input-group-append">
												<button onclick="sendMessage()"  class="btn msg-send-btn"><i class="fab fa-telegram-plane"></i></button>
											</div>
										</div>
									</div>
								</div> --}}
								<!-- /Chat Right -->
								
							</div>
						</div>
					</div>
					<!-- /Row -->

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
										<img src="assets/img/footer-logo.png" alt="logo">
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
										<img alt="User Image" src="assets/img/patients/patient.jpg" class="call-avatar">
										<h4>Richard Wilson</h4>
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
										<img class="call-avatar" src="assets/img/patients/patient.jpg" alt="User Image">
										<h4>Richard Wilson</h4>
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
		
		<!-- Custom JS -->
		<script src="{{  asset ('styleDoctorIT/js/script.js') }}"></script>
		
	</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/template/chat-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 17:15:44 GMT -->
</html>
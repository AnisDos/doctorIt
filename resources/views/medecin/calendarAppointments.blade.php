<!DOCTYPE html> 
<html lang="en">
	
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
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/bootstrap-datetimepicker.min.css') }}">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/fullcalendar/fullcalendar.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/css/style.css') }}">
			<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/select2/css/select2.min.css') }}">
			
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
		<link rel="stylesheet" href="{{  asset ('styleDoctorIT/admin/plugins/datatables/datatables.min.css') }}">
    
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Calendar</h2>
						</div>
						<div class="col-auto text-right float-right ml-auto">
							<a href=" {{ url('medecin') }} " class="btn btn-primary btn-sm"  >Home</a>
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


















			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
				
				<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
					
					<!-- Profile Sidebar -->
					<div class="profile-sidebar">
						<div class="widget-profile pro-widget-content">
							<div class="profile-info-widget">
								<a href="#" class="booking-doc-img">
									<img src="/storage/{{ Auth::user()->medecin->image }}" alt="User Image">
								</a>
								<div class="profile-det-info">
									<h3>Dr. {{ Auth::user()->medecin->nom }} {{ Auth::user()->medecin->prenom }}</h3>
									
									<div class="patient-details">
										<h5 class="mb-0">{{ Auth::user()->medecin->specialite }}</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="dashboard-widget">
							<nav class="dashboard-menu">
								<ul>
									<li class="active">
										<a href="{{ url('medecin') }}">
											<i class="fas fa-columns"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/calendarAppointments') }}">
											<i class="fas fa-calendar-check"></i>
											<span>Rendez-vous</span>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/myPatients') }}">
											<i class="fas fa-user-injured"></i>
											<span>Mes Patients</span>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/addPatient') }}">
											<i class="fas fa-user-plus"></i>
											<span>Add Patient</span>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/patientsRecherche') }}">
											<i class="fas fa-search"></i>
											<span>Patients Recherche</span>
										</a>
									</li>
								{{-- 	<li>
										<a href="schedule-timings.html">
											<i class="fas fa-hourglass-start"></i>
											<span>Schedule Timings</span>
										</a>
									</li> --}}
									<li>
										<a href=" {{ url('medecin/historiquesVisites') }} ">
											<i class="fas fa-file-invoice"></i>
											<span>Historiques Visites</span>
										</a>
									</li>
							{{-- 		<li>
										<a href="reviews.html">
											<i class="fas fa-star"></i>
											<span>Reviews</span>
										</a>
									</li> --}}
									<li>
										<a href="{{ url('medecin/myMessages') }}">
											<i class="fas fa-comments"></i>
											<span>Message</span>
											<small class="unread-msg">23</small>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/profilSettings') }}">
											<i class="fas fa-user-cog"></i>
											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="{{ url('medecin/passwordreset') }}">
											<i class="fas fa-lock"></i>
											<span>Changer mot de pass</span>
										</a>
									</li>
								{{-- 	<li>
										<a href="social-media.html">
											<i class="fas fa-share-alt"></i>
											<span>Social Media</span>
										</a>
									</li> --}}
								
									<li>
										<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();" >
											<i class="fas fa-sign-out-alt"></i>
											<span>Logout</span>
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- /Profile Sidebar -->
					
				</div>
					
						
						<!-- Calendar -->
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div id="calendar"></div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Patient Appoinment</h4>
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
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Purpose</th>
																		<th>Type</th>
																		<th class="text-center">Paid Amount</th>
																		<th class="text-right">	<div class="table-action">
																	
																			
																			<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																				<i class="fas fa-check"></i> Accept
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																				<i class="fas fa-times"></i> Cancel
																			</a>
																		</div></th>
																	</tr>
																</thead>
																<tbody>

																	@foreach ($rdvsNotGG as $rdv)
																		
																	
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a >{{$rdv->nom }} {{$rdv->prenom }}</a>
																			</h2>
																		</td>
																		<td> <span class="d-block text-info">{{$rdv->date }}</span></td>
																		<td>General</td>
																		<td>New Patient</td>
																		<td class="text-center">$150</td>
																		<td class="text-right">
																			<div class="table-action">
																				<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																					<i class="far fa-eye"></i> View
																				</a>
																				
																				<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																					<i class="fas fa-check"></i> Accept
																				</a>
																				<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																					<i class="fas fa-times"></i> Cancel
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

















								







    <div class="col-md-12">
    


		<div class="table-action">
			<input  type="checkbox" id="checkallinput" class="check"  >												
																			
			<a  onclick="approuveRdv()" class="btn btn-sm bg-success-light">
				<i class="fas fa-check"></i> Accept
			</a>
			<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
				<i class="fas fa-times"></i> Cancel
			</a>
		</div>



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
															<th>Patients </th>
															<th>Text</th>
															<th>Date</th>
														
															<th>action</th>
														</tr>
													</thead>
													<tbody id="lifihcheck" >
		
		
		
		
		
		
		@foreach ($rdvsNotGG as $rdv)
		
		
		<tr>
			<td>
			
				  <a >{{$rdv->nom}} {{$rdv->prenom}}</a>
			
				
				
			
			</td>
			<td>{{$rdv->title}} </td>
			<td>
				 <a ><span class="d-block text-info">{{$rdv->date }}</span></a>
		
			</td>
		
			<td >
				<input type="checkbox"  class="check" value="{{$rdv->id }}"  >		
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
		
		<form method="POST" action=" {{ url('medecin/approuveRdv') }} " id="hiddenformappeouve" style="display: none" >
	  @csrf
			<input type="hidden" id="hiddenapprouveid" name="idAprouve[]" value=""  >  
		</form>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		


			$('#checkallinput').change(function() 
			{
				$('#lifihcheck input:checkbox').prop('checked', this.checked);

            }); 
    //===============================
			function approuveRdv(){
				
        
					var formElements = new Array();
					$('#lifihcheck input:checkbox:checked').each(function(){
            formElements.push($(this).val());
        });
        
        var hidinput = document.getElementById('hiddenapprouveid').value= formElements;

		
		$('#hiddenformappeouve').submit();
            
			}

 //===============================

		</script>
		
		
		
		
		
		
		
		
		
			</div>


































							</div>













						</div>
						<!-- /Calendar -->
						
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
		
		<!-- Add Event Modal -->
		<div id="add_event" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Check Appointments</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Event Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Event Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->
		
		<!-- Add Event Modal -->
		<div class="modal custom-modal fade none-border" id="my_event">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Check Appointments</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn btn-success save-event submit-btn">Create event</button>
			{{-- 			<button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Done</button> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->
		
		<!-- Add Category Modal -->
		<div class="modal custom-modal fade" id="add_new_event">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Category Name</label>
								<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
							</div>
							<div class="form-group">
								<label>Choose Category Color</label>
								<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
									<option value="success">Success</option>
									<option value="danger">Danger</option>
									<option value="info">Info</option>
									<option value="primary">Primary</option>
									<option value="warning">Warning</option>
									<option value="inverse">Inverse</option>
								</select>
							</div>
							<div class="submit-section text-center">
								<button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Category Modal -->
	  
		<!-- jQuery -->
		<script src="{{  asset ('styleDoctorIT/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  asset ('styleDoctorIT/js/popper.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  asset ('styleDoctorIT/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{  asset ('styleDoctorIT/js/moment.min.js') }}"></script>
		<script src="{{  asset ('styleDoctorIT/js/bootstrap-datetimepicker.min.js') }}"></script>
		
		<!-- Full Calendar JS -->
        <script src="{{  asset ('styleDoctorIT/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{  asset ('styleDoctorIT/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
     {{--    <script src="{{  asset ('styleDoctorIT/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
		 --}}
		<!-- Custom JS -->
		<script src="{{  asset ('styleDoctorIT/js/script.js') }}"></script>




		<script>
			
!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$calendar = $('#calendar'),
        this.$event = ('#calendar-events div.calendar-events'),
        this.$categoryForm = $('#add_new_event form'),
        this.$extEvents = $('#calendar-events'),
        this.$modal = $('#my_event'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$calendarObj = null
    };


    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
    },
    /* on click on event */
    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
        var $this = this;
            var form = $("<form></form>");
            form.append("<label>Patient Name</label>");
            form.append("<div class='input-group'><input class='form-control' readonly type=text value='" + calEvent.title + "' /><span class='input-group-append'> </span></div>");
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                    return (ev._id == calEvent._id);
                });
                $this.$modal.modal('hide');
            });
            $this.$modal.find('form').on('submit', function () {
                calEvent.title = form.find("input[type=text]").val();
                $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                $this.$modal.modal('hide');
                return false;
            });
    },
    
   
    CalendarApp.prototype.enableDrag = function() {
        //init events
        $(this.$event).each(function () {
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }
    /* Initializing */
	
            
		
    CalendarApp.prototype.init = function() {
        this.enableDrag();
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());
		var rdvs = {!! json_encode($rdvs); !!};

	
        var defaultEventsTEST =  [
		
		
			
			{
                title: 'anis',
                start: new Date($.now() + 148000000),
				end: new Date($.now() + 151000000),
                className: 'bg-purple'
            },
            {
                title: 'AnisChikour',
                start: new Date($.now() + 998000000),
                className: 'bg-success'
            },
			{
                title: 'AnisChikour',
                start: new Date('2020-06-17T03:24:00'),
                className: 'bg-success'
            },
            {
                title: 'Test Event 1',
                start: today,
                end: today,
                className: 'bg-success'
            },
            {
                title: 'Test Event 2',
                start: new Date($.now() + 168000000),
                className: 'bg-info'
            },
            {
                title: 'Test Event 3',
                start: new Date($.now() + 338000000),
                className: 'bg-primary'
            }];
	
        var defaultEvents =  [
		
		
		
         
         ];
			var rdvs = {!! json_encode($rdvs); !!};
			rdvs.forEach(function (rdv) {
				defaultEvents.push( {
                title: ' '+rdv['nom']+ ' '+rdv['prenom'],
                start: new Date(rdv['date']),
                end: new Date((new Date(rdv['date'])).getTime() + 30 * 60000),
                className: 'bg-primary'
            });
		});
			

        var $this = this;
        $this.$calendarObj = $this.$calendar.fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '08:00:00',
            maxTime: '19:00:00',  
            defaultView: 'month',  
            handleWindowResize: true,   
             
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: defaultEvents,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            drop: function(date) { $this.onDrop($(this), date); },
            select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
            eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

        });

        //on new event
        this.$saveCategoryBtn.on('click', function(){
            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
            if (categoryName !== null && categoryName.length != 0) {
                $this.$extEvents.append('<div class="calendar-events" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="fa fa-circle text-' + categoryColor + '"></i>' + categoryName + '</div>')
                $this.enableDrag();
            }

        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
}(window.jQuery);
		</script>
		

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
                
	</body>

</html>
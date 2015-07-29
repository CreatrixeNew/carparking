<html lang="en">
<head>
<meta charset="utf-8">
<title>Car Parking</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Faiqa Jahangir">
<!-- styles -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jquery.jqplot.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/prettify.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/elfinder.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/elfinder.theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/fullcalendar.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="<?php echo base_url(); ?>assets/css/themes.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">
<link href="<?php echo base_url(); ?>assets/css/chat.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ajaxfileupload.js"></script>
<script src="<?php echo base_url(); ?>assets/js/prettify.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/accordion.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/smart-wizard.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vaidation.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-dynamic-form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/raty.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.noty.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.cleditor.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data-table.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/TableTools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ColVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plupload.full.js"></script>
<script src="<?php echo base_url(); ?>assets/js/elfinder/elfinder.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/uniform.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.tagsinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/check-all.jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inputmask.jquery.js"></script>
<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="<?php echo base_url(); ?>assets/js/excanvas.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.jqplot.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart/jqplot.highlighter.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart/jqplot.cursor.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart/jqplot.dateAxisRenderer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom-script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ios-orientationchange-fix.js"></script>
</head>

<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner top-nav">
		<div class="container-fluid">
			<div class="branding">
				<div class="logo"> <a href="admin_dashboard.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" style="margin-top: 10px;" width="168" height="40" alt="Logo"></a> </div>
			</div>
			<ul class="nav pull-right">
				<li class="dropdown search-responsive"><a DATA-TOGGLE="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="top-search">
							<form action="#" method="get">
								<div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
									<input type="text" id="searchIcon">
								</div>
							</form>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a DATA-TOGGLE="dropdown" class="dropdown-toggle" href="#">Hello, Admin <span class="alert-noty">25</span><i class="color-icons user_business_co"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<!--<li><a href="#"><i class="icon-nvelope"></i> Inbox <span class="alert-noty">10</span></a></li>-->
						<li><a href="notifications.html"><i class="icon-bell"></i> Notifications <span class="alert-noty">15</span></a></li>
						<li><a href="#"><i class="icon-user"></i> Profile</a></li>
						<li><a href="#"><i class="icon-cog"></i> Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url()."index/logout" ?>"><i class="icon-off"></i><strong> Logout</strong></a></li>
					</ul>
				</li>
			</ul>
			<button DATA-TARGET=".nav-collapse" DATA-TOGGLE="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		</div>
	</div>
</div>
<div id="sidebar"><?php $page = $this->uri->segment(1); ?>
	<ul class="side-nav accordion_mnu collapsible">
		<li><a href="admin_dashboard.html"><span class="color-icons computer_co"></span> Dashboard</a></li>
		<li ><a href="#"><span class="color-icons cog_co"></span> Operations</a>
			<ul class="acitem" id="sub_operations">
				<li><a href="daily_monitor.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Daily Monitor</a></li>
				<li><a href="booking_monitor.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Booking Monitor</a></li>
				<li><a href="assigned_jobs.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Assigned</a></li>
				<li><a href="unassigned_jobs.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Un Assigned</a></li>
				<li><a href="completed_jobs.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Completed Jobs</a></li>
				<li><a href="incompleted_jobs.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Uncompleted Jobs</a></li>
				<li><a href="movements.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Movements</a></li>
				<li><a href="cancel_jobs.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Cancel Jobs</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons house_co"></span>Company setup</a>
			<ul class="acitem" id="company_setup">
				<li><a href="company_setup"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Company Settings </a></li>
				<li><a href="access_controller"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Access Control List </a></li>
				<li><a href="#"><span class="black-icons airplane" id="airport_setup"></span> Airports</a>
					<ul class="acitem" id="sub_employees">
						<li><a href="all_airports"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>View Airports</a></li>
						<li><a href="add_airport"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Add Airport</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="color-icons car_co"  id="yard_setup"></span> Yards</a>
					<ul class="acitem" id="sub_employees">
						<li><a href="all_yards.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>View Yards</a></li>
						<li><a href="add_yard.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Add Yard</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="color-icons vcard_co" id="terminal_setup"></span> Terminals</a>
					<ul class="acitem" id="sub_employees">
						<li><a href="all_terminals.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>View Terminals</a></li>
						<li><a href="add_terminal.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Add Terminal</a></li>
					</ul>
				</li>
				<li><a href="qrcode.html" id="qrcode_setup"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span><i class="icon-qrcode"></i>&nbsp;&nbsp;QR Codes</a></li>
				<li><a href="barcode.html" id="barcode_setup"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span><i class="icon-barcode"></i>&nbsp;&nbsp;Barcodes</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons user_business_co"></span>Employee Management</a>
                    
                     
			<ul class="acitem" id="employees_sub" >
				<li><a href="<?php echo base_url().'users/add'?>"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Add Employee</a></li>
				<li><a href="<?php echo base_url().'users/manage'?>"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Employee List</a></li>
				<li><a href="<?php echo base_url().'users/payroll'?>"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Payroll </a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons envelope_co"></span>Messages</a>
			<ul class="acitem">
				<li><a href="inbox.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Message Box</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons printer_co"></span>Reports</a>
			<ul class="acitem">
				<li><a href="attendance_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Attendance</a></li>
				<li><a href="space_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Space Availability report </a></li>
				<li><a href="salary_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Salary Report </a></li>
				<li><a href="entry_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Entry Report </a></li>
				<li><a href="return_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Return Report</a></li>
				<li><a href="driver_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Driver Performance Report</a></li>
				<li><a href="vehicle_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Vehicle Report</a></li>
				<li><a href="monthly_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Monthly Report</a></li>
				<li><a href="damage_report.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Damage Report</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons marker_coo"></span> Location finder</a>
			<ul class="acitem">
				<li><a href="location_finder.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Tracking jobs</a></li>
			</ul>
		</li>
		<li><a href="#"><span class="color-icons pin_co"></span> Assignment</a>
			<ul class="acitem">
				<li><a href="assign_shift.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Assign Shift </a></li>
				<li><a href="assign_job.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span> Assign Job </a></li>
			</ul>
		</li>
		<li><a href="notifications.html"><span class="color-icons lightbulb_co"></span> Notifications</a></li>
		<li><a href="damage.html"><span class="color-icons target_co"></span> Damage Records</a></li>
		<li><a href="logs.html"><span class="color-icons application_xp_terminal_co"></span> Activity Logs</a></li>
	</ul>
</div>
<div id="main-content"> {content} </div>
</body>
</html>
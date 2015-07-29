<?php echo $this->session->userdata('user_id'); ?>

<div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="#">Car Parking</a><span class="divider">&raquo;</span></li>
      <li class="active">Dashboard</li>
    </ul>
  
    <div class="dashboard-widget">
        
                <div class="row-fluid">
      <div class="switch-board-round">
        <ul class="clearfix">
          <li><a href="#" class="tip-top" title="Daily Monitor"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Daily_Monitor.png"></a></li>
          <li><a href="#" class="tip-top" title="Damage Reports"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Damage.png"></a></li>
          <li><a href="#" class="tip-top" title="Check Notifications"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Notification.png"></a></li>
          <li><a href="#" class="tip-top" title="Message Inbox"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Messages.png"></a></li>
          <li><a href="#" class="tip-top" title="Generate Reports"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Reports.png"></a></li>
          <li><a href="#" class="tip-top" title="Employee Management"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Employee management.png"></a></li>
          <li><a href="#" class="tip-top" title="Comany setup"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Comany setup.png"></a></li>
          <li><a href="#" class="tip-top" title="Location Finder"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/locationfinder.png"></a></li>
          <li><a href="#" class="tip-top" title="Assign Jobs"><img src="<?php echo base_url(); ?>assets/img/sprite-icons/Assignment.png"></a></li>
        </ul>
      </div>
                </div>
         <div class="row-fluid">
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="daily_monitor.html"> <i class="dashboard-icons computer_imac_blk"></i> <span class="dasboard-icon-title">Daily Monitor</span> </a> </div>
          </div>
        </div>
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="booking_monitor.html"> <i class="dashboard-icons airplane_blk"></i> <span class="dasboard-icon-title">Booking Monitor</span> </a> </div>
          </div>
        </div>
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="assigned_jobs.html"> <i class="dashboard-icons paperclip_blk"></i> <span class="dasboard-icon-title">Assigned Jobs</span> </a> </div>
          </div>
        </div>
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="unassigned_jobs.html"> <i class="dashboard-icons linux_blk"></i> <span class="dasboard-icon-title">Unassigned Jobs</span> </a> </div>
          </div>
        </div>
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="completed_jobs.html"> <i class="dashboard-icons flag_2_blk"></i> <span class="dasboard-icon-title">Completed Jobs</span> </a> </div>
          </div>
        </div>
        <div class="span2">
          <div class="dashboard-wid-wrap">
            <div class="dashboard-wid-content"> <a href="movements.html"> <i class="dashboard-icons car_blk"></i> <span class="dasboard-icon-title">Movement</span> </a> </div>
          </div>
        </div>
      </div>

    </div>
      <div class="row-fluid">
          <div class="span4" style="margin-left:21px;">
				<div class="widget-block">
					<div class="widget-head">
						<h5>Total Booking Summaries</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<div class="well white-box">
					  <div class="tabbable tabs-left"> 
                                                                <!-- Only required for left/right tabs -->
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active"><a href="#C" data-toggle="tab">Entry</a></li>
                                                                    <li><a href="#D" data-toggle="tab">Return</a></li>
                                                                    <li><a href="#E" data-toggle="tab">Parked</a></li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="C">
                                                                        <table class="data-tbl-simple table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>
                                                                                        Location 
                                                                                    </th>
                                                                                    <th>
                                                                                        Cars
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid skyblue;font-weight: bold">
                                                                                        Northern 
                                                                                    </td>
                                                                                    <td>
                                                                                        4 Cars
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid #faa732;font-weight: bold">
                                                                                        Southern
                                                                                    </td>
                                                                                    <td>
                                                                                        5 Cars
                                                                                    </td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane" id="D">
                                                                        <table class="data-tbl-simple table table-bordered">

                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>
                                                                                        Location 
                                                                                    </th>
                                                                                    <th>
                                                                                        Cars
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid skyblue;font-weight: bold">
                                                                                        Northern 
                                                                                    </td>
                                                                                    <td>
                                                                                        3 Cars
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid #faa732;font-weight: bold">
                                                                                        Southern
                                                                                    </td>
                                                                                    <td>
                                                                                        55 Cars
                                                                                    </td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane" id="E">
                                                                        <table class="data-tbl-simple table table-bordered">

                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>
                                                                                        Location 
                                                                                    </th>
                                                                                    <th>
                                                                                        Cars
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid skyblue;font-weight: bold">
                                                                                        Northern 
                                                                                    </td>
                                                                                    <td>
                                                                                        41 Cars
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="border-left: 4px solid #faa732;font-weight: bold">
                                                                                        Southern
                                                                                    </td>
                                                                                    <td>
                                                                                        10 Cars
                                                                                    </td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
							</div>
						</div>
					</div>
				</div>
			</div>
        
          <div class="span4">
				<div class="widget-block">
					<div class="widget-head">
						<h5> Last Driver Locations</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<div class="well white-box" style="height: 132px;    overflow-y: scroll;">
								<table class="data-tbl-boxy table" style="margin-top: -23px;">
                                                                <thead>
                                                                    <tr style="height: 20px;">
                                                                        <th>
                                                                            Driver
                                                                        </th>
                                                                        <th>
                                                                            Location
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            William Hark
                                                                        </td>
                                                                        <td>
                                                                            p1
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Jack Hark
                                                                        </td>
                                                                        <td>
                                                                            p3
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Charlie Heath 
                                                                        </td>
                                                                        <td>
                                                                            ct
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Mark Orlie 
                                                                        </td>
                                                                        <td>
                                                                            North
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Henry Clark 
                                                                        </td>
                                                                        <td>
                                                                            p2
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="span3">
				<div class="widget-block">
					<div class="widget-head">
						<h5> Running Pick & Drop </h5>
					</div>
					<div class="widget-content" style="height: 168px; overflow-y: scroll">
						<div class="widget-box">
							<div class="well white-box">
								 <table class="data-tbl-simple table table-bordered">

                                                                <tbody>
                                                                    <tr>
                                                                        <td style="border-left: 4px solid skyblue;font-weight: bold">
                                                                            Northern Pick Up
                                                                        </td>
                                                                        <td>
                                                                            4 Cars
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border-left: 4px solid #faa732;font-weight: bold">
                                                                            Southern Pick Up
                                                                        </td>
                                                                        <td>
                                                                            5 Cars
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border-left: 4px solid skyblue;font-weight: bold">
                                                                            Northern Return
                                                                        </td>
                                                                        <td>
                                                                            4 Cars
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border-left: 4px solid #faa732;font-weight: bold">
                                                                            Southern Return
                                                                        </td>
                                                                        <td>
                                                                            5 Cars
                                                                        </td>

                                                                    </tr>

                                                                </tbody>
                                                            </table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      <div class="row-fluid" style="margin-left:20px;">
    <div class="span4">
					<div class="widget-block">
					<div class="widget-head">
						<h5> Jobs Progresses </h5>
					</div>
					<div class="widget-content" style="overflow-y: scroll;height: 465px;">
						<div class="widget-box" style="height: 465px;">
                                                    <div class="well white-box">
                                                    <h6>Job #1893 -   Pick up Job   - Driver #163 - July 3rd, 2015</h6>
							<div class="progress">
                                                            
                                                            <span style="width: 20%;" title="20% of this Job has been done"><span>20%</span></span> </div>
						  <h6>Job #1082 - Return Job  - Driver #103 - June 23rd, 2015</h6>	
                                                    <div class="progress">
								<span class="green" title="40% of this Job has been done" style="width: 40%;"><span>40%</span></span>
							</div>
                                                  <h6>Job #1672 -   Movement    - Driver #943 - June 12th, 2015</h6>	
							<div class="progress">
								<span class="orange" title="60% of this Job has been done" style="width: 60%;"><span>60%</span></span>
							</div>
                                                   <h6>Job #1622 -   Movement    - Driver #113 - July 12th, 2015</h6>
							<div class="progress">
								<span class="red" title="20% of this Job is remaining" style="width: 80%;"><span>80%</span></span>
							</div> 
                                                   <h6>Job #5624 -   Return Job    - Driver #763 - July 12th, 2015</h6>
							<div class="progress">
								<span class="blue" title="This Job has been done" style="width: 100%;"><span>100%</span></span>
							</div>
                                      
                                                    <h6>Job #5699 -   Movement Job    - Driver #823 - July 12th, 2015</h6>
							<div class="progress">
								<span class="orange" title="This Job has been done" style="width: 60%;"><span>60%</span></span>
							</div>
                                                       <h6>Job #5344 -   Pick Up Job    - Driver #713 - July 12th, 2015</h6>
							<div class="progress">
								<span title="This Job has been done" style="width: 20%;"><span>20%</span></span>
							</div>
						</div>
                                        </div>
					</div>
				</div>
			</div>
    <div class="span4">
				<div class="widget-block">
					<div class="widget-head">
						<h5> Recent Notifications</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
                                                    <div class="well white-box" style="height: 426px;">
							<div class="alert alert-error fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>JOB # 5690!</strong> Critical stage, it's not looking too good.
							</div>
							<div class="alert fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>Driver: Jack!</strong> Free from last job, and now no job in queue.
							</div>
							<div class="alert alert-success fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>JOB # 3217 !</strong> William has completed this job successfully.
							</div>
							<div class="alert alert-info fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>New Job!</strong> This alert needs your attention, One upcoming job.
							</div>
                                                    <div class="alert alert-error fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>JOB # 5290!</strong> Critical stage, it's not looking too good.
							</div>
                                                    <div class="alert alert-success fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<strong>JOB # 3117 !</strong> Mark has done this job.
							</div>
					
						</div>
					</div>
                                </div>
				</div>
			</div>
                    <div class="span3" style="">
                        <div class="widget-block">
					<div class="widget-head">
						<h5> Summaries</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
                                                    <div class="well white-box" style="height: 426px;">
        <div class="summary">
          <ul style="">
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/user-accounts.png" width="36" height="36" alt="New Accounts"></span><span class="count">3645</span><span class="summary-title">  Total Drivers On Job</span></li>
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/items.png" width="36" height="36" alt="New Items"></span><span class="count">250</span><span class="summary-title"> Total Free Drivers</span></li>
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/posts.png" width="36" height="36" alt="New Posts"></span><span class="count">123</span><span class="summary-title"> All Ongoing Jobs</span></li>
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/orders.png" width="36" height="36" alt="New Orders"></span><span class="count">215</span><span class="summary-title"> Total Jobs</span></li>
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/shipped.png" width="36" height="36" alt="Order Shipped"></span><span class="count">124</span><span class="summary-title">Total Pending Jobs</span></li>
            <li style=""><span class="summary-icon"><img src="<?php echo base_url(); ?>assets/img/complete.png" width="36" height="36" alt="Order Completed"></span><span class="count">100</span><span class="summary-title">All Completed Jobs </span></li>
          </ul>
        </div>
                                                            			</div>
						</div>
					</div>
				</div>
      </div>
             
        </div>
 <div class="row-fluid">
        <div class="span3">
            <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
              <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #F2A0A0;overflow: hidden;"> <span class="dashboard-icons-colors date_sl" style="float:left;"></span><font style="color:#ffffff;font-size: 24px;">1765</font> <h6 style="color:#ffffff;">Upcoming BOOKINGS: </h6> </a> </div>
          </div>
        </div>
        <div class="span3">
         <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
              <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #A0D1F2;overflow: hidden;"><span class="dashboard-icons-colors shipping_sl" style="float:left;"></span><font style="color:#ffffff;font-size: 24px;">125</font><h6 style="color:#ffffff;">TOTAL BOOKINGS: 1765</h6> </a> </div>
          </div>
        </div>
        <div class="span3">
         <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
              <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #F2D4A0;overflow: hidden;"> <span class="dashboard-icons-colors free_for_job_sl" style="float:left;"></span> <font style="color:#ffffff;font-size: 24px;">1835</font><h6 style="color:#ffffff;">Available Slots</h6> </a> </div>
          </div>
        </div>
       <div class="span3">
         <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
              <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #AAD698;overflow: hidden;"> <span class="dashboard-icons-colors lightbulb_sl" style="float:left;"></span> <font style="color:#ffffff;font-size: 24px;">1325</font> <h6 style="color:#ffffff;">Mystery Bookings</h6></a> </div>
          </div>
        </div>
                      </div>
    <div class="row-fluid">
      <div class="span3 ">
        <div class="stat-block">
          <ul>
              <li class=""><span class="paperclip_blk"></span></li>
            <li class="stat-count"><span>Upcoming Job 1</span><span>Customer Name</span></li>
            <li class="stat-percent"><span><img src="<?php echo base_url(); ?>assets/img/green-arrow.png" width="20" height="20" alt="Increased"></span><span class="label-green">Dep</span></li>
          </ul>
        </div>
      </div>
      <div class="span3 ">
          <div class="stat-block" style="border-left:4px solid #dc1212;">
          <ul>
            <!--<li class="stat-graph" id="new-visits">200,300,1000,900,200,900,500</li>-->
              <li class="stat-count"><span>Upcoming Job 2</span><span>Customer Name</span></li>
            <li class="stat-percent"><span><img src="<?php echo base_url(); ?>assets/img/red-arrow.png" width="20" height="20" alt="Decrease"></span><span class="label-red">Arrival</span></li>
          </ul>
        </div>
      </div>
      <div class="span3 ">
        <div class="stat-block">
          <ul>
            <!--<li class="stat-graph" id="unique-visits">200,300,500,200,300,500,1000</li>-->
              <li class="stat-count"><span>Upcoming Job 3</span><span>Customer Name</span></li>
            <li class="stat-percent"><span><img src="<?php echo base_url(); ?>assets/img/green-arrow.png" width="20" height="20" alt="Increased"></span><span class="label-green">Dep</span></li>
          </ul>
        </div>
      </div>
      <div class="span3 ">
        <div class="stat-block">
          <ul>
            <!--<li class="stat-graph" id="weekly-sales">1000,3000,6000,8000,3000,8000,10000</li>-->
              <li class="stat-count"><span>Upcoming Job 4</span><span>Customer Name</span></li>
            <li class="stat-percent"><span><img src="<?php echo base_url(); ?>assets/img/green-arrow.png" width="20" height="20" alt="Increased"></span><span class="label-green">Dep</span></li>
          </ul>
        </div>
      </div>
    </div>
  

  </div>
   <div class="chatter">
  
  <div class="chatter_pre_signup">
  <input type="text" name="chatter_name" placeholder="Your name" class="chatter_field chatter_name" />
  <input type="text" name="chatter_email" placeholder="Your email address" class="chatter_field chatter_email" />
  <input type="submit" name="chatter_create_user" value="Start Chatting" class="chatter_btn chatter_create_user" />
  </div>
  
  <div class="chatter_post_signup">
      <div class="head"><h4 style=" margin-top: 3px;color:#3c8dbc;">Luke Peters</h4>
          <img class="cross" width="16" src="<?php echo base_url(); ?>assets/img/cross.png" /></div>
    <div class="chatter_convo">
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user1.png" /></a>
        <strong class="chatter_name">Luke Peters</strong>Hello!</span>
      
      <span class="chatter_msg_item chatter_msg_item_user">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user2.jpg" /></a>
        <strong class="chatter_name">Jack Sparrow</strong>Oh hello. Who is this?</span>
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user1.png" /></a>
        <strong class="chatter_name">Luke Peters</strong>My name is Luke. How can I help you today? :)</span>
      
      <span class="chatter_msg_item chatter_msg_item_user">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user2.jpg" /></a>
        <strong class="chatter_name">Jack Sparrow</strong>Just saying hello!</span>
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user1.png" /></a>
        <strong class="chatter_name">Luke Peters</strong>Oh alright, Hello then Jack, you pirate, you.</span>
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user2.jpg" /></a>
        <strong class="chatter_name">Luke Peters</strong>Hello!</span>
      
      <span class="chatter_msg_item chatter_msg_item_user">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user1.png" /></a>
        <strong class="chatter_name">Jack Sparrow</strong>Oh hello. Who is this?</span>
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user2.jpg" /></a>
        <strong class="chatter_name">Luke Peters</strong>My name is Luke. How can I help you today? :)</span>
      
      <span class="chatter_msg_item chatter_msg_item_user">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user1.png" /></a>
        <strong class="chatter_name">Jack Sparrow</strong>Just saying hello!</span>
      
      <span class="chatter_msg_item chatter_msg_item_admin">
        <a href="" class="chatter_avatar"><img src="<?php echo base_url(); ?>assets/img/users/user2.jpg" /></a>
        <strong class="chatter_name">Luke Peters</strong>Oh alright, Hello then Jack, you pirate, you.</span>
      
    </div>
    <textarea id="textchat" name="chatter_message" placeholder="Type your message here..." class="chatter_field chatter_message"></textarea>
  </div>
  
</div> 

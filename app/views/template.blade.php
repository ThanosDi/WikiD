<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN PLUGIN CSS -->
{{ HTML::style('plugins/fullcalendar/fullcalendar.css'); }}
{{ HTML::style('plugins/pace/pace-theme-flash.css'); }}
{{ HTML::style('plugins/gritter/css/jquery.gritter.css'); }}
{{ HTML::style('plugins/bootstrap-datepicker/css/datepicker.css'); }}
{{ HTML::style('plugins/jquery-ricksaw-chart/css/rickshaw.css'); }}
{{ HTML::style('plugins/jquery-morris-chart/css/morris.css'); }}
{{ HTML::style('plugins/jquery-slider/css/jquery.sidr.light.css'); }}
{{ HTML::style('plugins/bootstrap-select2/select2.css'); }}
{{ HTML::style('plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css'); }}
{{ HTML::style('plugins/boostrap-checkbox/css/bootstrap-checkbox.css'); }}
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWsORK -->


{{ HTML::style('plugins/boostrapv3/css/bootstrap.min.css'); }}
{{ HTML::style('plugins/boostrapv3/css/bootstrap-theme.min.css'); }}
{{ HTML::style('plugins/font-awesome/css/font-awesome.css'); }}
{{ HTML::style('css/animate.min.css'); }}
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
{{ HTML::style('css/style.css'); }}
{{ HTML::style('css/responsive.css'); }}
{{ HTML::style('css/custom-icon-set.css'); }}
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="index.html"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/></a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">	
        <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
		<li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>        
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
			<li class="m-r-10 input-prepend inside search-form no-boarder">
				<span class="add-on"> <span class="iconset top-search"></span></span>
				 <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
			</li>
		  </ul>
	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							John <span class="bold">Smith</span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>	
				<div id="notification-list" style="display:none">
					<div style="width:300px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
										A min ago
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capicity
									</div>
									<div class="date pull-left">
									2 mins ago
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You haveve got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
									<div class="date pull-left">
									An hour ago
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>				
				</div>
				<div class="profile-pic"> 
					<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
				</div>       			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="user-profile.html"> My Account</a>
                  </li>
                  <li><a href="calender.html">My Calendar</a>
                  </li>
                  <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="{{URL::to('logout')}}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
			<li class="quicklinks"> 	
			<a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" ><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
			</a> 
				<div class="simple-chat-popup chat-menu-toggle hide" >
					<div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
						 <div style="width:100px">
						 <div class="semi-bold">David Nester</div>
						 <div class="message">Hey you there </div>
						</div>
					</div>
				</div>
			</li> 
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>

<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	<p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
    <ul>	
      <li class="start active "> <a href="{{URL::to('admin');}}"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
	  <li class=""> <a href="{{URL::to('users');}}"> <i class="fa fa-envelope"></i> <span class="title">Users</span>  <span class=" badge badge-disable pull-right ">203</span></a> </li>      
	<!--   <li class=""> <a href="../frontend/index.html"> <i class="fa fa-flag"></i>  <span class="title">Frontend</span></a></li>      
      <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
		  <li > <a href="typography.html"> Typography </a> </li>
		  <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
		   <li > <a href="icons.html">Icons</a> </li>
		   <li > <a href="buttons.html">Buttons</a> </li>		 
          <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
          <li > <a href="sliders.html">Sliders</a> </li>
          <li > <a href="group_list.html">Group list </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="form_elements.html">Form Elements </a> </li>
          <li > <a href="form_validations.html">Form Validations</a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="grids_simple.html">Simple Grids</a> </li>
          <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="tables.html"> Basic Tables </a> </li>
          <li > <a href="datatables.html"> Data Tables </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="google_map.html"> Google Maps </a> </li>
          <li > <a href="vector_map.html"> Vector Maps </a> </li>
        </ul>
      </li>
      <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>    
      <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="user-profile.html"> User Profile </a> </li>
          <li > <a href="time_line.html"> Time line </a> </li>
          <li > <a href="support_ticket.html"> Support Ticket </a> </li>
          <li > <a href="gallery.html"> Gallery</a> </li>
		  <li class=""><a href="calender.html"> Calendar</a> </li>
          <li > <a href="search_results.html"> Search Results </a> </li>
          <li > <a href="invoice.html"> Invoice </a> </li>
          <li > <a href="404.html"> 404 Page </a> </li>
          <li > <a href="500.html"> 500 Page </a> </li>
          <li > <a href="blank_template.html"> Blank Page </a> </li>
          <li > <a href="login.html"> Login </a> </li>
          <li > <a href="login_v2.html">Login v2</a> </li>
          <li > <a href="lockscreen.html"> Lockscreen </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="javascript:;"> Level 1 </a> </li>
          <li > <a href="javascript:;">  <span class="title">Level 2</span> <span class="arrow "></span> </a>
			<ul class="sub-menu">
				 <li > <a href="javascript:;"> Sub Menu </a> </li>
				 <li > <a href="ujavascript:;"> Sub Menu </a> </li>
			</ul>
		  </li>
        </ul>
      </li>
	  <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a> 
		  <ul class="sub-menu">
		  	<li class="side-bar-widgets">
			<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
			<ul class="folders" >
				  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
				  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
				  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
				  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name"></li>
			</ul>
			<p class="menu-title">PROJECTS </p>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Redesign home page</p>
					</div>
				</div>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Statistical report</p>
					</div>
				</div>
			</li>
		</ul>
	  </li>     -->
    </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
	<ul class="folders" >
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" ></li>
	</ul>
	<p class="menu-title">PROJECTS </p>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Redesign home page</p>
			</div>
		</div>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Statistical report</p>
			</div>
		</div>
	</div>
	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>		
	</div>
	<div class="pull-right">
		<div class="details-status">
		<span class="animate-number" data-value="86" data-animation-duration="560">86</span>%
	</div>	
	<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
<div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
      @yield('page-container')
    </div>

  </div>
  <!-- END PAGE CONTAINER-->

<!-- END CONTAINER --> 
</div>
<!-- BEGIN CORE JS FRAMEWORK--> 
{{ HTML::script('plugins/jquery-1.8.3.min.js'); }}
{{ HTML::script('plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js'); }}
{{ HTML::script('plugins/boostrapv3/js/bootstrap.min.js'); }}
{{ HTML::script('plugins/breakpoints.js'); }}
{{ HTML::script('plugins/jquery-unveil/jquery.unveil.min.js'); }}
{{ HTML::script('js/scrollTo.js'); }}

<!-- END CORE JS FRAMEWORK --> 

<!-- BEGIN PAGE LEVEL JS --> 
{{ HTML::script('plugins/pace/pace.min.js'); }}
{{ HTML::script('plugins/jquery-slimscroll/jquery.slimscroll.min.js'); }}
{{ HTML::script('plugins/jquery-numberAnimate/jquery.animateNumbers.js'); }}
{{ HTML::script('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); }}
{{ HTML::script('plugins/jquery-slimscroll/jquery.slimscroll.min.js'); }}
{{ HTML::script('plugins/jquery-block-ui/jqueryblockui.js'); }}
{{ HTML::script('plugins/bootstrap-select2/select2.min.js'); }}
{{ HTML::script('plugins/jquery-ricksaw-chart/js/raphael-min.js'); }}
{{ HTML::script('plugins/jquery-ricksaw-chart/js/d3.v2.js'); }}
{{ HTML::script('plugins/jquery-ricksaw-chart/js/rickshaw.min.js'); }}
{{ HTML::script('plugins/jquery-morris-chart/js/morris.min.js'); }}
{{ HTML::script('plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js'); }}
{{ HTML::script('plugins/jquery-slider/jquery.sidr.min.js'); }}
{{ HTML::script('plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js'); }}
{{ HTML::script('plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js'); }}
{{ HTML::script('plugins/jquery-sparkline/jquery-sparkline.js'); }}
{{ HTML::script('plugins/jquery-flot/jquery.flot.min.js'); }}
{{ HTML::script('plugins/jquery-flot/jquery.flot.animator.min.js'); }}
{{ HTML::script('plugins/skycons/skycons.js'); }}

<!-- END PAGE LEVEL PLUGINS   --> 	
<!-- PAGE JS -->
{{ HTML::script('js/dashboard.js'); }} 	

<!-- BEGIN CORE TEMPLATE JS --> 
{{ HTML::script('js/core.js'); }} 	
{{ HTML::script('js/chat.js'); }} 	
{{ HTML::script('js/demo.js'); }} 	
<!-- END CORE TEMPLATE JS -->
</body>
</html>
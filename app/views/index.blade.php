<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{ HTML::script('plugins/pace/pace.min.js'); }}
{{ HTML::style('plugins/font-awesome/css/font-awesome.min.css'); }}
{{ HTML::style('plugins/bootstrap/css/bootstrap.min.css'); }}
{{ HTML::style('plugins/uniform/css/uniform.default.css'); }}
{{ HTML::style('css/altdevs.css'); }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); }}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('plugins/select2/select2.css'); }}
{{ HTML::style('plugins/select2/select2-metronic.css'); }}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
{{ HTML::style('css/style-metronic.css'); }}
{{ HTML::style('css/style.css'); }}
{{ HTML::style('css/style-responsive.css'); }}
{{ HTML::style('css/plugins.css'); }}
{{ HTML::style('css/default.css'); }}
{{ HTML::style('css/login.css'); }}
{{ HTML::style('css/custom.css'); }}
{{ HTML::style('plugins/select2/select2-metronic.css'); }}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="./">
		<!-- <img src="assets/img/logo-big.png" alt=""> -->
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<!-- <form class="login-form" action="index.html" method="post" novalidate="novalidate"> -->
	{{ Form::open(array('url' => 'login')) }}
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter any username and password.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				{{ Form::text('username', Input::old('username'), array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Username')) }}
				<!-- <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"> -->
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				{{ Form::password('password' , array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Password', 'autocomplete' => 'off')) }}
				<!-- <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"> -->
			</div>
		</div>
		<div class="form-actions">
			{{ Form::checkbox('checkbox')}} <span>Remember me</span>
			{{ Form::submit('Login', array('class' => 'btn green pull-right')) }}
			<!-- <button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button> -->
		</div>
	{{ Form::close() }}
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 {{date("Y")}} © Copyright Altdevs.
</div>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
{{ HTML::script('plugins/jquery-1.10.2.min.js'); }}
{{ HTML::script('plugins/jquery-migrate-1.2.1.min.js'); }}
{{ HTML::script('plugins/bootstrap/js/bootstrap.min.js'); }}
{{ HTML::script('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); }}
{{ HTML::script('plugins/jquery-slimscroll/jquery.slimscroll.min.js'); }}
{{ HTML::script('plugins/jquery.blockui.min.js'); }}
{{ HTML::script('plugins/jquery.cokie.min.js'); }}
{{ HTML::script('plugins/uniform/jquery.uniform.min.js'); }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('plugins/jquery-validation/dist/jquery.validate.min.js'); }}
{{ HTML::script('plugins/select2/select2.min.js'); }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('js/app.js'); }}
{{ HTML::script('js/login.js'); }}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
		
		$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
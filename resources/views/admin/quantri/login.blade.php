<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Đăng nhập</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="{{$urlAdmin}}/css/font-awesome.min.css" rel="stylesheet">
	    <link href="{{$urlAdmin}}/css/bootstrap.min.css" rel="stylesheet">
	    <link href="{{$urlAdmin}}/css/templatemo-style.css" rel="stylesheet">
	    <link href="{{$urlAdmin}}/css/style.css" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <script src="{{$urlAdmin}}/js/jquery-1.11.2.min.js"></script>
	    <script type="text/javascript" src="{{$urlAdmin}}/js/jquery.validate.js"></script>
	    <script type="text/javascript" src="{{$urlAdmin}}/js/validate.js"></script>
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Đăng nhập</h1>
	        
	        </header>
	       	<form class="templatemo-login-form" method="post" id="formdangnhap">
	        	<div class="form-group">
	        		<?php 
			          	if (Session::has('msg')){
					?>
						<div class="alert alert-danger"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
					<?php
						}
					?>
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập">
		              	<input type="hidden" name="_token" value="{{csrf_token()}}">
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" name="password" value="" placeholder="******">
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="remember" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<!-- <button type="submit" class="templatemo-blue-button width-100">Login</button> -->
					<input class="templatemo-blue-button width-100" type="submit" name="login" value="Đăng nhập" /> 
				</div>
	        </form>
		</div>
	</body>
</html>
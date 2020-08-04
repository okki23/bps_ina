<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SI | BPSDMI</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link rel="stylesheet" href="<?php echo base_url()?>template/assets/css/apple/app.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>template/assets/plugins/ionicons/css/ionicons.min.css">
</head>
<link rel="shortcut icon" href="<?php echo base_url()?>template/assets/img/logo1.png">
<body class="pace-top bg-white">
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade">
		<div class="login login-with-news-feed">
			<div class="news-feed">
				<div class="news-image" style="background-image: url('<?php echo base_url()?>template/assets/img/login-bg/login-bg-12.JPG');"></div>
				
			</div>
			<div class="right-content">
				<div class="login-header">
					<div class="brand">
						<img src="<?php echo base_url();?>template/assets/img/logo2.png" alt="" width="370"/>
					</div>
				</div>
				<div class="login-content">
					<form action="<?php echo base_url();?>auth/login" method="post" class="margin-bottom-0">
						<div class="brand">
							<img src="<?php echo base_url();?>template/assets/img/login-bg/logo-bpsdmi.png" alt="" width="370"/>
						</div>
						<div class="form-group m-b-15">
							<label style="color:#343978;"type="text"><h1>Hello,</h1></label></br>
							<label style="color:#343978;"type="text"><h1>Welcome Back</h1></label></br>
						</div>
						<div class="form-group m-b-15">
							<label style="color:#343978;"type="text">Username</label></br>
							<input name="nip" class="form-control form-control-lg" id="login-username" >
						</div>
						<div class="form-group m-b-15">
							<label style="color:#343978;"type="text">Password</label></br>
							<input name="password" type="password" class="form-control form-control-lg" id="login-password" >
						</div>
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn-block btn" style="background-color:#343978; border-radius: 20px; color:#FFFFFF;" >LOGIN</button>
						</div>
						<hr>
						<p class="text-center text-grey-darker mb-0">
							&copy; BPSDMI KEMENPERIN 2020
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url()?>template/assets/js/app.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/theme/apple.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/full/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 18:05:34 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Online Hospital</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
        <link href="<?php echo base_url();?>css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
        	<link rel="stylesheet" href="<?php echo base_url();?>assets/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/material_style.css">
        <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url(); ?>login/savePatient" enctype="multipart/form-data" method="post">
					<span class="login100-form-logo">
                                            <a href="<?php echo base_url();?>welcome"><img alt="" src="<?php echo base_url();?>img/hospital.png"></a>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Patient Registration
					</span>
					<div class="row">
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text"  name="name" placeholder="Username">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
                                        <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="age" placeholder="Age">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
                                        <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="weigt" placeholder="Weight">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div> 
                                      <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="gender" placeholder="Gender">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div> 
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus" data-placeholder="&#xf191;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter password again">
						<input class="input100" type="password" name="password2" placeholder="Confirm password">
						<span class="focus" data-placeholder="&#xf191;"></span>
					</div>
					</div>
                                            <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="phone" placeholder="Phone">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
                                            <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="address" placeholder="Address">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
                                            <div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="file" name="photo">
						<span class="focus" data-placeholder="&#xf207;"></span>
					</div>
					</div>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="text-center p-t-30">
                                            <a class="txt1" href="<?php echo base_url();?>welcome">
							You already have a membership?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>assets/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>assets/login.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/full/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 18:05:34 GMT -->
</html>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>HMS</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>../assets/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
                     
			<div class="wrap-login100">
                            <form class="login100-form validate-form" action="<?php echo base_url(); ?>login/check_login" method="post">
                                <h4 style="color:red;">
                    <?php
                    $exception = $this->session->userdata('exception');
 
                    if (isset($exception)) {
                        echo $exception;
                        $this->session->unset_userdata('exception');
                    }
                    ?>
                </h4>
                <h4 style="color:white;">
                    <?php
                    $loged_out = $this->session->userdata('loged_out');
 
                    if (isset($loged_out)) {
                        echo $loged_out;
                        $this->session->unset_userdata('loged_out');
                    }
                    ?></h4><br/>
					<span class="login100-form-logo">
						 <a href="<?php echo base_url();?>welcome"><img alt="" src="<?php echo base_url();?>img/hospital.png"></a>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Username">
                                                <input class="input100" type="hidden" name="department" value="<?php echo $department;?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>../assets/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>../assets/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>../assets/login.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/full/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 17:58:19 GMT -->
</html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sign In & Sign Up For Mplay</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="<?php echo base_url("assets/css/login/css/style.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/login/css/login.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("media/login/images"); ?>" />

</head>

<body>

	<!--<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
       </div>-->
	
<!--facebook login script-->

	<!--<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1333665393318441";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '1333665393318441',
				xfbml      : true,
				version    : 'v2.6'
			});
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});

		{
			status: 'connected',
				authResponse: {
			accessToken: '...',
				expiresIn:'...',
				signedRequest:'...',
				userID:'...'
		}
		}
	</script>-->

	<!--end of facebook login script-->	
	

	
	
	
	<div class="main">
		
		<div class="w3_login">
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				  </div>

					<div class="form">
						<h2>Login to your account</h2>

						<!--<form action="LoginSignUp\login_user" method="post">-->
						   <form action="<?php echo site_url('LoginSignUp\login');?>" method="post">
							   
						    
							<input type="text" name="username" placeholder="Username" required=" ">
							<input type="password" name="password" placeholder="Password" required=" ">

						<!--<form action="LoginSignUp\login_user" method="post">
							<input type="text" name="email" placeholder="email" required=" ">
							<input type="password" name="password" placeholder="password" required=" ">-->

							<input type="submit" value="Login">
                                                        <hr style="border-top: 1px solid #8c8b8b;">


								<?php 
							   if($this->session->flashdata('login_error') ) {
								   /*echo "<div class=\'alert alert-warning\' >";
                                    echo " Username or Password is Incorrect";
								   echo validation_errors();
									echo  "</div>";*/
								   $message = "Username and/or Password incorrect.\\nTry again.";
								   echo "<script type='text/javascript'>alert('$message');</script>";

							   }
								?>


					               <!-- <div id="fb-root"></div>
                                                   <div class="fb-login-button" data-max-rows="2" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>-->
                                                                                                           
                                                          
						</form>
						<br>
						<div class="cta"><a href="#">Forgot your password?</a></div>

					</div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="<?php echo site_url('LoginSignUp\signin');?>" method="post">
						<input type="text" id="name" name="Name" placeholder="Name" required=" ">
						<input type="date" id="Dob" name="Dob" placeholder="Date Of Birth" required=" ">
						<input type="text" id="Country" name="Country" placeholder="Country" required=" ">
						<input type="text" id="Mlanguage" name="Mlanguage" placeholder="Mother Language" required=" ">
						<input type="text" id="Username" name="Username" placeholder="Username" required=" ">
						<input type="email" id="Email" name="Email" placeholder="Email Address" required=" ">
						<input type="password" id="Password" name="Password" placeholder="Password" required=" ">
						<input id="register" type="submit" value="Register" >
						<hr style="border-top: 1px solid #8c8b8b;">
						<div class="alert alert-warning">
                                                           
								<?php 
							   if($this->session->flashdata('login_error') ){
								   $message = "Username or Password or email is already exist incorrect.\\nTry again.";
								   echo "<script type='text/javascript'>alert('$message');</script>";
										}
									echo validation_errors(); 
							?> 
				                </div>
					</form>
				  </div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>

		</div>
		

</html>

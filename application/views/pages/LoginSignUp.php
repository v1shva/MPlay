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
	<h1>Hellow World</h1>
	<p>Test Case Test Case Test Case</p>
	
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1333665393318441',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
	</script>
	
	<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
       </div>
	
	<div class="main">
		
		<div class="w3_login">
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				  </div>

					<div class="form">
						<h2>Login to your account</h2>
						<form action="#" method="post">
							<input type="text" name="Username" placeholder="Username" required=" ">
							<input type="password" name="Password" placeholder="Password" required=" ">
							<input type="submit" value="Login">
                                                        <hr>
						</form>
						<br>
						<div class="cta"><a href="#">Forgot your password?</a></div>

					</div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required=" ">
						<input type="date" name="Dob" placeholder="Date Of Birth" required=" ">
						<input type="text" name="Country" placeholder="Country" required=" ">
						<input type="text" name="Mlanguage" placeholder="Mother Language" required=" ">
						<input type="text" name="Username" placeholder="Username" required=" ">
						<input type="email" name="Email" placeholder="Email Address" required=" ">
						<input type="password" name="Password" placeholder="Password" required=" ">
						<input type="submit" value="Register">
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
		
	</div>
</body>
</html>

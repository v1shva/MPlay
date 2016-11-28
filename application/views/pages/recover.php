
<!DOCTYPE html>
<html>
<head>
<title>Forget Password</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="<?php echo base_url("assets/css/login/css/style.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/login/css/login.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("media/login/images"); ?>" />

</head>

<body>
	<div class="main">
		
		<div class="w3_login">
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle">
				  </div>


				  <div class="form">

					<h2>Enter Your Email to reset the password</h2>
					  <form action="{{ urlFor('password.recover.post') }}" method="post">
					  <input type="Email" name="Email" placeholder="Email" required=" ">
					  <input type="submit" value="Vertify">
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
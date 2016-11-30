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
                                                        <hr style="color:black;">
					                <div id="fb-root"></div>
                                                        <div class="fb-login-button" data-max-rows="2" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>

						</form>
						<br>
						<div class="cta"><a href="#">Forgot your password?</a></div>

					</div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="" method="post">
						<input type="text" id="name" name="Name" placeholder="Name" required=" ">
						<input type="date" id="Dob" name="Dob" placeholder="Date Of Birth" required=" ">
						<input type="text" id="Country" name="Country" placeholder="Country" required=" ">
						<input type="text" id="Mlanguage" name="Mlanguage" placeholder="Mother Language" required=" ">
						<input type="text" id="Username" name="Username" placeholder="Username" required=" ">
						<input type="email" id="Email" name="Email" placeholder="Email Address" required=" ">
						<input type="password" id="Password" name="Password" placeholder="Password" required=" ">
						<input id="register" type="submit" value="Register" >
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
	<div class="modal fade" id="infoModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" id="infoModalContent">
				<div class="modal-header" style="background-color: #337ab7;color:white">
					<div class="bootstrap-dialog-header">
						<div class="bootstrap-dialog-close-button" ><button class="close">×</button></div>
						<div class="bootstrap-dialog-title"><h3>Loading...</h3></div>
					</div>
				</div>
				<div class="modal-body">
				<h4> Your data is being processed.</h4>
					<div class="loadersmall"></div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</body>
<script>
	$(document).ready(function() {
		$("#register").click(function(event) {
			event.preventDefault();
			$('#infoModal').modal('show');
			alert("hello");
			var name = $("input#name").val();
			var Dob = $("input#Dob").val();
			var Country = $("input#Country").val();
			var Mlanguage = $("input#Mlanguage").val();
			var Username = $("input#Username").val();
			var Email = $("input#Email").val();
			var Password = $("input#Password").val();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "index.php/LoginSignUp/addUserDB",
				dataType: 'json',
				data: {name: name, Dob: Dob,Country:Country,Mlanguage:Mlanguage,Username:Username,Email:Email,Password:Password},
				/*
				 complete: function(r){
				 if (r.responseText == 'true'){
				 $("#addsongContent").html("" +
				 "<div class=\"modal-header\">"+
				 "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>"+
				 "<h4 class=\"modal-title\">Sucess</h4>"+
				 "</div>"+
				 "<div class=\"modal-body\">"+
				 "<div class=\"alert alert-success\">"+
				 "<strong>Song added to the database!</strong>"+
				 "</div>"+
				 "</div>"+
				 "<div class=\"modal-footer\">"+
				 "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>"+
				 "</div>"
				 );
				 }
				 else{
				 $("#addsongContent").html(r.responseText);
				 }
				 }*/
			});
		});
	});
</script>
</html>

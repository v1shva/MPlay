
<!DOCTYPE html>
<html>
<head>
<title>Admin Sign In </title>



<link rel="stylesheet" href="<?php echo base_url("assets/css/Admin/login.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("media/login/images"); ?>" />

</head>
<body>

<div class="main">

    <div class="Admin_LogIn">
        <div class="Admin_logIn_module">
            <div class="module form-module">
                <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                </div>
               
                <div class="form">
                  

                    <h2>AdminLogIn</h2>
                    <script src="<?php echo base_url("assets/js/admin/validate/validate.js"); ?>"></script>
                    <form  name="AdminLogIn" onSubmit="return validateLoginForm();" action="<?php echo base_url('index.php/AdminCtrl/login');?>" method="post">


                        <input type="text" name="username" placeholder="E-mail"  id="email" required="required" onblur='validateEmail()'>
                        <input type="password" name="password" placeholder="Password"  id="password" required="required" onblur='validatePassword()'>


                        <input type="submit" value="Login">

                     

                    </form>

</body>

</html>

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

                    <form action="<?php echo base_url('index.php/AdminCtrl/login');?>" method="post">


                        <input type="text" name="username" placeholder="Username" required=" ">
                        <input type="password" name="password" placeholder="Password" required=" ">


                        <input type="submit" value="Login">
                     

                    </form>

</body>

</html>
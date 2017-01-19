
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
<style type="text/css"> .form-module .toggle {
    cursor: pointer;
    position: absolute;
    top: -0;
    right: -0;
    background: #3498db;
    width: 160px;
    height: 40px;
    margin: -5px 0 0;
    color: #ffffff;
    font-size: 12px;
    line-height: 30px;
    text-align: center;
    display: none;
}

.form-module input[type="submit"] {
    background: #e74c3c;
    width: 100%;
    border: 0;
    padding: 10px 15px;
    color: #ffffff;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
}
.form-module {
    position: relative;
    background: white;
    max-width: 400px;
    width: 100%;
    border-top: 5px solid #e74c3c;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
    margin: 0 auto;
}

</style>
</html>
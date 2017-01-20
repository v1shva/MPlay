
<?php




if($this->session->userdata('logged_in')) {
    //$session_data = $this->session->userdata('loggin');
    $name=$this->session->userdata('username');
}

 ?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>mPlay</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/fileinput/css/fileinput.css"); ?>"  media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/moodscss.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/animatedLoader.css"); ?>" />
        <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
        <script src="<?php echo base_url("assets/fileinput/js/fileinput.js"); ?>" type="text/javascript"></script>

    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#" >
                            <img alt="Brand" src="<?php echo base_url("media/logo.png"); ?>" class="img-thumbnail" style="width: 60px">
                        </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo $activeHome ?>" ><a href="Home">Home <span class="sr-only">(current)</span></a></li>
                            <li class="<?php echo $activeAboutUs ?>"><a href="#">About Us</a></li>

                        </ul>
                        <!--<ul class="navbar-left nav navbar-nav">

                        </ul>-->

                        <ul class="nav navbar-nav navbar-right">
                            <!--<li><a href="<?php echo base_url("index.php/LoginSignUp/view"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign Up</a></li>-->
                            <!--<li><a href="<?php echo base_url("index.php/LoginSignUp/logout"); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="<?php echo $activeUser ?>" ><a href="userDetails"><?php echo $name; ?><span class="sr-only">(current)</span></a></li>
                                    <li><a href="<?php echo base_url("index.php/LoginSignUp/logout"); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                                </ul>
                            </li>

                        </ul>

                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>

                        <div class="navbar-right navbar-form">
                            <button class="btn btn-default" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#addsong"><span class="glyphicon glyphicon-user"></span> Add Song</button>
                        <div class="navbar-left navbar-form">
                            <button class="btn btn-default" data-toggle="modal" data-target="#addsong"><span class="glyphicon glyphicon-user"></span> Add Song</button>


                        </div>








                </div>
        </nav>











        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-88469924-1', 'auto');
            ga('send', 'pageview');

        </script>

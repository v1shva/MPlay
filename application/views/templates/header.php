<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 10:40 PM
 */ ?>

<html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>mPlay</title>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/backgroundAnim.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/moodscss.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.qtip.min.css"); ?>" />
            <link href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/ratings/star-rating.css");?>" media="all" type="text/css">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>"/>
            <link rel="stylesheet" href="<?php echo base_url("assets/player/dist/skin/whiteskin/css/jplayer.flat.white.css"); ?>" />
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.qtip.min.js"); ?>"></script>
            <script src="<?php echo base_url("assets/js/ratings/star-rating.js");?>" type="text/javascript"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/animatedLoader.css"); ?>" />

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
                            <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">About Us</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url("index.php/LoginSignUp/view"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign Up</a></li>
                            <!--<li><a href="<?php echo base_url("index.php/LoginSignUp/logout"); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> -->
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>



                         


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
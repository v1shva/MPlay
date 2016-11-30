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
                <link rel="stylesheet" href="<?php echo base_url("assets/css/moodscss.css"); ?>" />
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>"/>
            <link rel="stylesheet" href="<?php echo base_url("assets/player/dist/skin/whiteskin/css/jplayer.flat.white.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/ratings/star-rating.css");?>" media="all" type="text/css">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="<?php echo base_url("assets/js/ratings/star-rating.js");?>" type="text/javascript"></script>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

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
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url("index.php/LoginSignUp/view"); ?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign Up</a></li>
                        </ul>


                </div>
        </nav>

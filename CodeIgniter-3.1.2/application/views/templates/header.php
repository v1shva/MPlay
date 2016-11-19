<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 10:40 PM
 */ ?>

<html>
        <head>
                <title>mPlay</title>
                <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        </head>
        <body>
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                        <div class="navbar-header">
                                <a class="navbar-brand" href="#">MPlay</a>
                        </div>
                        <ul class="nav navbar-nav">
                                <li class="active"><a href="#"><?php echo $title; ?></a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>

                </div>
        </nav>

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
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">MPlay</a>
                        </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">About Us</a></li>

                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>


                </div>
        </nav>

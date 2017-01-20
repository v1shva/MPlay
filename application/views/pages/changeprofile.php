<?php

if($this->session->userdata('logged_in')) {
    //$session_data = $this->session->userdata('loggin');
    $username=$this->session->userdata('username');
    $email=$this->session->userdata('email');
    $name=$this->session->userdata('name');
    $lang=$this->session->userdata('lang');
    $mlang=$this->session->userdata('mlang');
    $dob=$this->session->userdata('dob');
    $country=$this->session->userdata('country');
    $ps=$this->session->userdata('password');
    $ac_ps=md5($ps);

}
?>


<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <figure class="profile-userpic">
                    <img src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" class="img-responsive" alt="Profile Picture">
                </figure>

            <li class="<?php echo $activeUser ?>" ><a href="userDetails"><?php echo $email?><span class="sr-only">(current)</span></a></li>
            <li><?php echo $username; ?></li>

            </li>

            <li>
                <a href="Proset">Change Profile Settings</a>
            </li>
            <li>
                <a href="Changepass">Change Password</a>
            </li>
            <li>
                <a href="Upload">Upload Image</a>
            </li>


        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">See Full View</a>
                    <!--new code-->
                    <div class="container">
                        <h1>Edit Profile</h1>
                        <hr>
                        <div class="row">
                            <!-- left column -->
                            <!--
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                    <h6>Upload a different photo...</h6>

                                    <input class="form-control" type="file">
                                </div>
                            </div>-->

                            <!-- edit form column -->
                            <div class="col-md-9 personal-info">
                                <!--<div class="alert alert-info alert-dismissable">
                                    <a class="panel-close close" data-dismiss="alert">×</a>
                                    <i class="fa fa-coffee"></i>
                                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                                </div>-->
                                <h3>Personal info</h3>


                                <form method="post" action="<?php echo site_url('LoginSignUp\update');?>">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="name" value="<?php echo $name ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Date of Birth</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="dob" value="<?php echo $dob ;?>" type="text" required=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Country</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="country" value="<?php echo $country ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Mother Language</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="mlang" value="<?php echo $lang ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Prefferd Music Language</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="musiclang" value="<?php echo $mlang ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="Email" value="<?php echo $email ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="Username" value="<?php echo $username ;?>" type="text" required=" ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <input class="btn btn-primary" value="Save Changes" type="submit">
                                            <span></span>
                                            <input class="btn btn-default" value="Cancel" type="reset">

                                            <!--warning-->


                                                <?php
                                                if($this->session->flashdata('error')){
                                                    $message = "Validation Failed.\\nTry again.";
                                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                                    $this->session->set_flashdata('error',FALSE);
                                                }
                                                echo validation_errors();
                                                ?>

                                            <!--warning-->

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- new code-->


                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=<?php echo base_url("assets/js/jquery.js");?>></script>



<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
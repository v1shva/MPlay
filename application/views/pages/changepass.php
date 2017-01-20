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
    $id=$this->session->userdata('id');

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

                        <div class="row">




                                <form method="post" action="<?php echo site_url('LoginSignUp\changepass');?>">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Old Password</label>
                                            <br><br>
                                            <div class="col-md-6">
                                                <input class="form-control" name="oldpass" value="" type="password" required=" ">
                                            </div>
                                        </div>
                                            <br><br>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">New Password</label><br><br>
                                            <div class="col-md-6">
                                                <input class="form-control" name="newpass" value="" type="password" required=" ">
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
                                                }else if($this->session->flashdata('perror')){
                                                    $message = "Old password is incorrect.\\nTry again.";
                                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                                    $this->session->set_flashdata('perror',FALSE);
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
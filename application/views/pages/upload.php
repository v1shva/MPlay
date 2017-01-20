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
                        <h1>Upload Image</h1>
                        <hr>
                        <div class="row">
                            <!-- left column -->

                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                    <h6>Upload a different photo...</h6>
                                    <?php  echo form_open_multipart("RegPages/Upload")?>
                                    <input class="form-control" type="file" name="userfile" />
                                    <input type="submit" value="Upload image">
                                    </form>
                                </div>
                            </div>

                            <!-- edit form column -->

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
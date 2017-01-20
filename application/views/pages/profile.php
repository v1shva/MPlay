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

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">User Profile Details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url("media/img/profile.jpg"); ?>" class="img-circle img-responsive" > </div>


                                                <div class=" col-md-12 col-lg-9 ">
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td><?php echo $name ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Username:</td>
                                                            <td><?php echo $username ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Birth</td>
                                                            <td><?php echo $dob ?></td>
                                                        </tr>

                                                        <tr>
                                                        <tr>
                                                            <td>Country:</td>
                                                            <td><?php echo $country ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mother Language:</td>
                                                            <td><?php echo $lang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prefered Music Language:</td>
                                                            <td><?php echo $mlang?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Email:</td>
                                                            <td><?php echo $email?></td>
                                                        </tr>

                                                        </td>

                                                        </tr>

                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <!--<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                            <span class="pull-right">-->
                            <a href="Proset" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <!--<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                        </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
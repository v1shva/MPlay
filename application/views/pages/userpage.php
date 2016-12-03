<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 12/2/2016
 * Time: 12:10 PM
 */
?>
<br>
<br>
<br>



    <div class="row profile">
        <div class="col-md-2">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?php echo base_url("assets/css/bootstrap.css"); ?>" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo $userName?>
                    </div>
                    <div class="profile-usertitle-job">
                        <?php echo $userLevel?>
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-10">
            <div class="profile-content">
                Some user related content goes here...
            </div>
        </div>
    </div>
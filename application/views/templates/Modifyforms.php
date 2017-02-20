<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MPlay _Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("assets/js/admin/jvectormap/jquery-jvectormap-1.2.2.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/AdminLTE.min.css")?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/skins/_all-skins.min.css")?>">
<!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url("assets/js/admin/jQuery/jquery-2.2.3.min.js")?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url("assets/js/admin/fastclick/fastclick.js")?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url("assets/js/app.min.js")?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url("assets/js/admin/sparkline/jquery.sparkline.min.js")?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url("assets/js/admin/jvectormap/jquery-jvectormap-1.2.2.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/admin/jvectormap/jquery-jvectormap-world-mill-en.js")?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url("assets/js/admin/slimScroll/jquery.slimscroll.min.js")?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url("assets/js/admin/chartjs/Chart.min.js")?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url("assets/js/pages/dashboard2.js")?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url("assets/js/demo.js")?>"></script>
  <script src="<?php echo base_url("assets/js/demo.js")?>"></script>
        
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
  <script src="<?php echo base_url("assets/fileinput/js/fileinput.js"); ?>" type="text/javascript"></script>  
  <link rel="stylesheet" href="<?php echo base_url("assets/css/animatedLoader.css"); ?>" />

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mplay</b>Admin Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("media/admin/profile/adminprofile.jpg");?>" class="user-image" alt="User Image">
              <?php foreach($profiledata as $profile){?>
              <span class="hidden-xs"><?php echo $profile->name;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("media/admin/profile/adminprofile.jpg");?>" class="img-circle" alt="User Image">

                <p>
                  Admin - <?php echo $profile->name;?>
                  <small><?php echo $profile->email;?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
               <!--  <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/AdminCtrl/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("media/admin/profile/adminprofile.jpg");?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $profile->name;?></p>
          <?php }?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Edit songs</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addforms"><i class="fa fa-circle-o text-red"></i> Add Song</a></li>
            <li><a href="modifyforms"><i class="fa fa-circle-o text-green"></i>Modify Song</a></li>
            <li><a href="deleteform"><i class="fa fa-circle-o text-yellow"></i>Delete Song</a></li>
          </ul>
        </li>
        <li>
          <a href="report">
            <i class="fa fa-th"></i> <span>Requests</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo "reports" ?></small>
            </span>
          </a>
        </li>

</ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modify Song
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->

        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Modify Song</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form">

              <div class="box-body">

        <div class="input-group">

          <input onfocus="retrieveSongTitles(this)" id="search-input" type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button  onclick= "Searchsong(this)" type="button" name="search" id="search" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>



        </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Song Name</label>
            <input name="songNameModify" onfocusout="validateTitle(this)" autocomplete="on" class="form-control" type="text" placeholder="Default input">
                </div>
                <div class="form-group">
                  <label for="Artist">Artist</label>
                  <input onfocusout="validateArtist(this);validateArtistAndTitle(this)" type="text" class="form-control" id="ArtistModify" placeholder="Artist">
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="DesModify" class="form-control" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="col">
                <div class="form-group">
                  <label for="exampleInputFile">Upload Audio</label>
                  <input id="fileup" data-show-upload="true" name="fileup" type="file" class="file" data-upload-url="<?php echo base_url().'index.php/AdminCtrl/uploadSong'; ?>">

                </div>
                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option value="1">confused</option>
                    <option value="2" >angry</option>
                    <option value="3">crying</option>
                    <option value="4">embarrassed</option>
                    <option value="5">smiling</option>
                    <option value="6">suspicious</option>
                    <option value="7">crazy</option>
                    <option value="8">naughty</option>
                    <option value="9">bored</option>
                    <option value="10">revengeful</option>
                    

                  </select>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- /.box -->

         
            <!-- /.box-body -->
          </div>
        <div class="col-md-6">
          <!-- general form elements -->
                   <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Search Results</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
          <div id="searchresults"></div>
                </form>
          </div>
          <!-- /.box -->
        </div>
        </div>
          <!-- /.box -->


        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.11
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
    // validation and verification process
    var titleValid = false;
    var artistValid = false;
    var moodValid = false;
    var songValid = false;
    var agreeValid = false;
    var uploadValid = false;
    function isText(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }


    var titles = [];
    var artists = [];
    function Searchsong(title){
        var searchterm= $('#search-input').val();
         $("#searchresults").html('<div id="titleLoader" style="display: none" class="cssload-thecube">\
                            <div class="cssload-cube cssload-c1"></div>\
                            <div class="cssload-cube cssload-c2"></div>\
                            <div class="cssload-cube cssload-c4"></div>\
                            <div class="cssload-cube cssload-c3"></div>\
                        </div>');
        titles = [];
        $('#titleLoader').css("display","block");
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/AdminCtrl/searchSong",
            dataType: 'json',
            data: {search:searchterm},
            complete: function(r){
              $("#searchresults").html('');
                var data = JSON.parse(r.responseText);
                var songs = data.song;
                var i;
                for(i=0;i<songs.length;i++){
                  $("#searchresults").append('<div style= class=text-center name ="' +songs[i].ID +'" onclick="getSong(this)">' +songs[i].Title+'</div> <br>');
                }



            }
        });
    }

    function getSong(select){
      var id = select.getAttribute('name');
      console.log(id);
            jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/AdminCtrl/searchSongByid",
            dataType: 'json',
            data: {id:id},
            complete: function(r){
              $("#searchresults").html('');
                var data = JSON.parse(r.responseText);
                var song = data.song;
              $("#searchresults").html(song[0].Title);
              $("#songNameModify").val(song[0].Title);
              $("#ArtistModify").val(song[0].Artist);
              $("#DesModify").val(song[0].tags);
              $("#fileup").val(song[0].path);

            }
        });
    }

    function isText(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }


    var titles = [];
    var artists = [];
    function  validateTitle(title) {
        if(!isText(title.value)){
            $(title).tooltip({
                content: "Invalid Title",
                tooltipClass: "errorMsg"
            });
            title.style.background = "#FDE3A7";
            titleValid = false;
        }
        else{
            $(this).removeClass('selected');
        }
    }

    function validateArtist(artist){
        if(!isText(artist.value)){
            $(title).tooltip({
                content: "Invalid Artist",
                tooltipClass: "errorMsg"
            });
            artist.style.background = "#FDE3A7";
            artistValid = false;
        }
        else{
            $(artist).autocomplete({
                source: artists
            });
            artistValid = true;
        }
    }

    function validateArtistAndTitle() {
        var title = $("input#title").val();
        var artist = $("input#artist").val();
        if(titles.indexOf(title.value)!=-1 && artists.indexOf(artist.value)!=-1){
            $(title).tooltip({
                content: "This song already contains in the database.",
                tooltipClass: "errorMsg"
            });
            title.style.background = "#FDE3A7";
            $(artist).tooltip({
                content: "This song already contains in the database.",
                tooltipClass: "errorMsg"
            });
            artist.style.background = "#FDE3A7";
            titleValid = false;
            artistValid = false;
        }
        else{
            title.style.background = "#C8F7C5";
            artist.style.background = "#C8F7C5";
            titleValid = true;
            artistValid = true;
        }
    }
    var selectedEmotionInput = "";
    $('.emoiconInput').click(function(){
        selectedEmotionInput = this.getAttribute('name');
        $('.emoiconInput').each(function(i, obj) {
            $(obj).removeClass('selected');
        });
        $(this).addClass('selected');
        validateEmotion();

    });
    </script>
</body>
</html>
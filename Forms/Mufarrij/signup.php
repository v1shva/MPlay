<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>User Regirstration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

    
    
    <script src="http://www.marghoobsuleman.com/misc/jquery.js"></script>
<!-- <msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
<script src="js/msdropdown/jquery.dd.min.js"></script>
<!-- </msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/msdropdown/flags.css" />
</head>
<body>


<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Mplay</h1>
                </div>
                <!--end page header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           User Registration
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
  <form action="get.php" method="post" name="form" enctype="multipart/form-data">
    <label>Name</label>
        <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Name" name="name" value="">
       </div>                                    
  <label>Country</label>
  <div class="form-group input-group">
  <span class="input-group-addon"><i class="fa fa-flag"></i></span>
 <select name="countries" id="countries" style="width:300px;" class="form-control selectWidth">
      <option value='Sri Lanka' style="background-image:url(cflags/png/lk.png); background-repeat: no-repeat;">&nbsp 
      &nbsp &nbsp Sri Lanka</option>
      <option value='India' style="background-image:url(cflags/png/in.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp India</option>
      <option value='Pakistan' style="background-image:url(cflags/png/pk.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Pakistan</option>
      <option value='China' style="background-image:url(cflags/png/ch.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp China</option>
      <option value='England' style="background-image:url(cflags/png/england.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp England</option>
      <option value='America' style="background-image:url(cflags/png/us.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp America</option>
      <option value='France' style="background-image:url(cflags/png/fr.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp France</option>
      <option value='Germany' style="background-image:url(cflags/png/gr.png) ; background-repeat: no-repeat;" >&nbsp&nbsp&nbsp&nbsp Germany</option>
      <option value='Japan' style="background-image:url(cflags/png/jp.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Japan</option>
      <option value='Italy' style="background-image:url(cflags/png/it.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Italy</option>
      <option value='Australia' style="background-image:url(cflags/png/au.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Australia</option>
        <option value='Bangladesh' style="background-image:url(cflags/png/bn.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Bangladesh</option>
        <option value='Egypt' style="background-image:url(cflags/png/eg.png); background-repeat: no-repeat;">&nbsp&nbsp&nbsp&nbsp Egypt</option>
  <select>
</div>

                        <label>Date of Birth</label>                
                       <div class="form-group input-group">
                                       
                        <span class="input-group-addon"><i class="fa fa-calendar" >&nbsp Day</i></span>
                        <select  name="day" id="selectDate" style="width:100px;" class="form-control selectWidth">
                            <?php
                             $i=1;
                             while($i<32){
                             	echo "<option>".$i."</option>";
                             	$i+=1;
                             }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="fa fa-calendar" >&nbsp Month</i></span>
                        <select name="month" id="selectMonth" style="width:100px;" class="form-control selectWidth">
                            <?php 
                             $i=1;
                             while($i<13){
                             	echo "<option>".$i."</option>";
                             	$i++;
                             }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="fa fa-calendar" >&nbsp Year</i></span>
                        <select name="year" id="selectYear" style="width:100px;" class="form-control selectWidth">
                             <?php 
                             $i=1900;
                             while($i<2030){
                             	echo "<option>".$i."</option>";
                             	$i++;
                             }
                            ?>
                        </select>
                    </div>

                    <label>Language</label>                
                    <div class="form-group input-group">                   
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <select name="language" style="width:100px;" class="form-control selectWidth">
                    <option>Singhala</option>
                    <option>English</option>
                    <option>Tamil</option>
                    <option>Arabic</option>
                    <option>Hindi</option>
                    <option>Franch</option>
                    </select>
                    </div>    

                    <label>Prefered Music Language</label>                
                    <div class="form-group input-group">                   
                    <span class="input-group-addon"><i class="fa fa-music"></i></span>
                    <select name="musiclanguage" style="width:100px;" class="form-control selectWidth">
                    <option>Singhala</option>
                    <option>English</option>
                    <option>Tamil</option>
                    <option>Arabic</option>
                    <option>Hindi</option>
                    <option>Franch</option>
                    </select>
                    </div> 
                    <br> 


                
                   <div class="form-group">
                   <span class="input-group-addon"><i class="fa fa-upload"></i>
                   		<label>Profile Image</label>
                        <input type="file" name="proimg" multiple> 
                        </span>
                   </div>

                   

                       
                   <div class="form-group input-group">
                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                   
                   <input type="text" class="form-control" name="email" placeholder="Email" value=""/>
                   </div>
                                        


                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" id="pwd" name="password" />
                        <span class="input-group-btn">
                        <button class="btn btn-default"  type="button" id="eye"  >
                        	<i class="fa fa-eye" alt="eye"></i>
                        </button></span>

                        <script>
                        	document.getElementById("eye").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });
                        </script>
                        
                   </div>
         <div class="form-group input-group">        
         <button type="reset" class="btn btn-success" style="width:150px ;margin-left:150px">Reset</button>  
         <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="margin-left:50px; width:150px"/>
         </div>                      
     
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

   </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html
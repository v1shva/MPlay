<?php
 
 if(isset($_POST['submit'])){
     $em=$_POST['email'];
     $ps=$_POST['psw'];

     //$_SESSION['email']=$em;
     //$_SESSION['password']=$ps;
     //echo $em;
     //$en=md5($ps);
    
     include("conn.php");
     $sql="select *  from  users where  email= '$em' and password='$ps'";
     $rst=mysql_query($sql);
     
     $no=mysql_num_rows($rst);
     if($no>0){
       /* ?>
        <script > window.open('index2.php','_self')</script>
        <?php*/
       header("location:index2.php");
     }
   else{
        echo "rognuser";
        header("location:login.php ");
   }  

 }
else{
    header("location:login.php");
 }
 
?>
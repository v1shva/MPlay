<?php
if(isset($_POST['submit'])){
   $fn=$_POST['name'];
   $cou=$_POST['countries'];
   $dd=$_POST['day'];
   $mm=$_POST['month'];
   $yy=$_POST['year'];
   $dob=$yy."-".$mm."-".$dd;
   $language=$_POST['language'];
   $mlanguage=$_POST['musiclanguage'];
   
   $em=$_POST['email'];
   $ps=$_POST['password'];
   //using  md5  password encryptation to store in database
   $aps=md5($ps) ; 
   

   //copy the uploading image to img folder
   $image = $_FILES['proimg']['name'];
   if($image !=""){
                $path="img/$image";
                copy($_FILES['proimg']['tmp_name'],$path);
                
              }

    //checking weather email field is empty
    if($em==""){
       echo "Email is Required";
       echo "<a href='signup.php'>Try again</a>";
    }

    //validating  email address
    else if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
       echo "Invalid Email Format";
       echo "<a href='signup.php'>Try again</a>";
    }


    else {  
    
    include("connect.php") ;
    $sql = "INSERT INTO user (name,birthday,password, email,country,mlang,musiclang,imgpath)
    VALUES ('$fn','$dob','$aps' ,'$em','$cou','$language','$mlanguage','$image' )";

               $rsst=mysql_query($sql); 
               if($rsst){
                   echo "You are registerd Successfully";
               } 
               else{
               	echo "Registration Failed";
                echo"<a href='details.php'>Try Again</a>";
               }

}

}





?>
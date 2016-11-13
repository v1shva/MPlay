<?php 

$conn=mysql_connect('localhost','root','');
if(!$conn){
    die("could not connect".mysql_error());
}
else{
    
    $db=mysql_select_db("prodb",$conn);
    echo"connected";
}
?>
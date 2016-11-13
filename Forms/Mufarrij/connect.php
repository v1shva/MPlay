<?php

//if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host		= 'us-cdbr-azure-southcentral-f.cloudapp.net';
$db_user		= 'b36179e61784e9';
$db_pass		= 'd37edf33';
$db_database	= 'mplaydb'; 

/* End config */



//$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

//mysql_select_db($db_database,$link);
//mysql_query("SET names UTF8");

$conn=mysql_connect($db_host,$db_user,$db_pass);

if(!$conn){
    die("could not connect".mysql_error());
}
else{
    
    $db=mysql_select_db($db_database,$conn);
    //echo"connected";
}

?>
<?php

//Defining variables for the database

$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b36179e61784e9";
$password = "d37edf33";
$dbname = "mplaydb";

//function to connect to the database
$db = mysqli_connect($servername,$username,$password,$dbname);



if ($db) {
    echo "Db connected";
}
else {

print "Unsuccessful Database connection <br>";

}





?>
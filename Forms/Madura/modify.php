<?php
$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b36179e61784e9";
$password = "d37edf33";
$dbname = "mplaydb";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//update
$sName = mysqli_real_escape_string($conn,$_POST['Name']);
if(empty($sName)){
	echo "no key searched please try again";
}
else
{
echo "successfully connected";
}
		$email =$_POST["Email"];
		$name = $_POST["Name"];
		$dob = $_POST["dob"];
$sql ="UPDATE user SET email = '$email'  WHERE name='$name';";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();
?>
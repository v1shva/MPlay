<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/11/2016
 * Time: 2:25 PM
 */
require("db.php");

$target = "files/";
$target = $target . basename( $_FILES['fileupld']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['fileupld']['name']);


//Writes the Filename to the server
if(move_uploaded_file($_FILES['fileupld']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['fileupld']['name']). " has been uploaded, and your information has been added to the directory";

} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}




$sql = "INSERT INTO song(ID,Title,Artist,Decade,path)
VALUES ('1','".$_POST['title']."', '".$_POST['artist']."','".$_POST['decade']."','".$target."')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

?>
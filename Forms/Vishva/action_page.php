<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/11/2016
 * Time: 2:25 PM
 */
require("db.php");



if($_POST['uploadMethod']=="file") {
//Writes the Filename to the server
    $target = "files/";
    $target = $target . basename( $_FILES['fileupld']['name']);

    $Filename=basename( $_FILES['fileupld']['name']);
    if (move_uploaded_file($_FILES['fileupld']['tmp_name'], $target)) {
        //Tells you if its all ok
        echo "The file " . basename($_FILES['fileupld']['name']) . " has been uploaded.";

    } else {
        //Gives and error if its not
        echo "Sorry, there was a problem uploading your file.";
    }
    $sql = "INSERT INTO song(ID,Title,Artist,Decade,Emotion,tags,language,path)
    VALUES ('1','".$_POST['title']."', '".$_POST['artist']."','".$_POST['decade']."','".$_POST['emotion']."','".$_POST['tags']."','".$_POST['language']."','".$target."')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
else{
    echo basename($_POST['urltext']);
    $target = "files/".basename($_POST['urltext']);
    file_put_contents($target, fopen($_POST['urltext'], 'r'));
    $sql = "INSERT INTO song(ID,Title,Artist,Decade,Emotion,tags,language,path)
    VALUES ('1','".$_POST['title']."', '".$_POST['artist']."','".$_POST['decade']."','".$_POST['emotion']."','".$_POST['tags']."','".$_POST['language']."','".$target."')";


    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}


$db->close();

?>
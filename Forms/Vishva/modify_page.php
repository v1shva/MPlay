<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/11/2016
 * Time: 2:25 PM
 */
require("db.php");



$sql = "UPDATE song SET Title='".$_POST['title']."',
                        Artist='".$_POST['artist']."',
                        Decade='".$_POST['decade']."',
                        Emotion='".$_POST['emotion']."',
                        tags='".$_POST['tags']."',
                        language='".$_POST['language']."'
        WHERE ID='".$_POST['id']."'";


if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}




$db->close();

?>
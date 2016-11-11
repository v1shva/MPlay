<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/11/2016
 * Time: 2:25 PM
 */
require("db.php");



$sql="INSERT INTO song (ID,Title,Artist,Decade,Emotion) VALUES ('123','abcd','abc', 'abd','add')";



$result=mysqli_query($db,$sql);
echo $result;

if(!$result){
  echo "Unsuccessful registration";
}
else{

}
<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/13/2016
 * Time: 12:20 PM
 */

require("db.php");


//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM song";
$result = mysqli_query($db,$sql);

echo '<div class="row">
            <div class="cell">
                ID
            </div>
            <div class="cell">
                Title
            </div>
            <div class="cell">
                Artist
            </div>
            <div class="cell">
                Decade
            </div>
            <div class="cell">
                Emotion
            </div>
            <div class="cell">
                Tags
            </div>
            <div class="cell">
                Language
            </div>
            <div class="cell">
                Song
            </div>
            <div class="cell">
                Delete / Modify
            </div>
        </div>';

 if(mysqli_num_rows($result)==0){
     echo 'Song can not be found';
 }

 else{
     while( $rows = mysqli_fetch_assoc($result)){
         echo '<div class="row">
                    <div class="cell">'
                        .$rows['ID'].
                       '</div>
                    <div class="cell">'
                        .$rows['Title'].
                    '</div>
                    <div class="cell">'
                        .$rows['Artist'].
                    '</div>
                    <div class="cell">'
                        .$rows['Decade'].
                    '</div>
                    <div class="cell">'
                        .$rows['Emotion'].
                    '</div>
                    <div class="cell">'
                        .$rows['tags'].
                    '</div>
                    <div class="cell">'
                        .$rows['language'].
                    '</div>
                    <div class="cell">
                        <audio controls>
                            <source src='.$rows['path'].' type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                    <div class="cell">
                        <button onclick="deleteitem('.$rows['ID'].')"> Delete </button>
                        <button onclick="modifyitem('.$rows['ID'].')"> Modify </button>
                    </div>
                </div>';
     }


 }

?>

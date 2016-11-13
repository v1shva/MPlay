<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=filesize('styles.css');?>">
</head>
<?php
require("db.php");
$modifyThis = $_REQUEST["modifythis"];
$sql="SELECT * FROM song WHERE ID=".$modifyThis;
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
?>
<body>
  <form action="modify_page.php" method="post" enctype="multipart/form-data">
      <div class="content">
          <input type="hidden" name="id" value="<?php echo $modifyThis; ?>" >
          <div class="row">
              <div class="cell">
                  Title :
              </div>
              <div class="cell">
                  <input type="text" name="title" placeholder=" " value="<?php echo $row['Title']; ?>">
              </div>
          </div>
          <div class="row">
              <div class="cell">
                  Artist :
              </div>
              <div class="cell">
                  <input type="text" name="artist" placeholder=" " value="<?php echo $row['Artist']; ?>">
              </div>
          </div>

          <div class="row">
            <div class="cell">
              Decade :
            </div>
            <div class="cell">
              <input type="text" name="decade" placeholder=" " value="<?php echo $row['Decade']; ?>">
            </div>
          </div>
          <div class="row">
            <div class="cell">
              Emotion :
            </div>
            <div class="cell">
              <select name="emotion">
                <option value="Angry">Angry</option>
                <option value="Sad">Sad</option>
                <option value="Happy">Happy</option>
                <option value="Remorse">Remorse</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="cell">
              Tags :
            </div>
            <div class="cell">
              <input  type="text" name="tags" placeholder=" " value="<?php echo $row['Decade']; ?>">
            </div>
          </div>
          <div class="row">
              <div class="cell">
                  Language :
              </div>
              <div class="cell">
                  <select name="language">
                      <option value="Sinhala">Sinhala</option>
                      <option value="English">English</option>
                      <option value="Tamil">Tamil</option>
                      <option value="Hindi">Hindi</option>
                  </select>
              </div>
          </div>

      </div>
      <div class="row">
          <div class="cell" style="width: 100%">
              <input type="submit" value="Submit">
          </div>
      </div>

  </form>
</body>
<script>
  function uploadFile() {
    var upField = document.getElementById("FileField");
    var urlField = document.getElementById("UrlField");
    upField.style.display = "block";
    urlField.style.display = "none";
  }
  function selectUrl() {
    var upField = document.getElementById("FileField");
    var urlField = document.getElementById("UrlField");
    upField.style.display = "none";
    urlField.style.display = "block";
  }
</script>
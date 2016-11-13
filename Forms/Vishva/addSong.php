<!DOCTYPE html>
<html>
<title> NextMEd </title>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <form action="action_page.php" method="post" enctype="multipart/form-data">
      <div class="content">
          <div class="row">
              <div class="cell">
                  Title :
              </div>
              <div class="cell">
                  <input type="text" name="title" placeholder=" ">
              </div>
          </div>
          <div class="row">
              <div class="cell">
                  Artist :
              </div>
              <div class="cell">
                  <input type="text" name="artist" placeholder=" ">
              </div>
          </div>

          <div class="row">
            <div class="cell">
              Decade :
            </div>
            <div class="cell">
              <input type="text" name="decade" placeholder=" ">
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
              <input  type="text" name="tags" placeholder=" ">
            </div>
          </div>
          <div class="row">
            <div class="cell">
              Song :
            </div>
            <div class="cell">
              <input type="radio" value="file" onclick="uploadFile()"> Upload File
              <input type="radio"  value="url" onclick="selectUrl()"> Url
              <input id="FileField" type="file" name="fileupld" style="display: none">
              <input id="UrlField" type="text" name="urltext" placeholder="url" style="display: none">
            </div>
          </div>

      </div>
    <input type="submit" value="Submit">
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
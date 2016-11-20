<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="viewsearchstyle.css?<?=filesize('viewsearchstyle.css');?>">
</head>

<body>
    <h1> View or Search Songs</h1>
    <hr>
    <button onclick="view('out')">View Songs</button><br>
    <input id="userIn" type="text" placeholder="Artist or Song Title">
    <button onclick="search('userIn','out')">Search Songs</button>
    <div id="out" class="display">
        <div class="table"
    </div>
</body>
<script>
  function search(elementID, outElementID)
  {
      var searchThis = document.getElementById(elementID).value;
      var outElement = document.getElementById(outElementID);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {

          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              outElement.innerHTML = xmlhttp.responseText;
          }
      };

      xmlhttp.open("GET", "search_action.php?searchthis=" + searchThis, true);
      xmlhttp.send();
  }
  function deleteitem(deletethis)
  {
      var outElement = document.getElementById('out');
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {

          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              outElement.innerHTML = xmlhttp.responseText;
          }
      };

      xmlhttp.open("GET", "delete_action.php?deletethis=" + deletethis, true);
      xmlhttp.send();
  }
  function view(outElementID)
  {
      var outElement = document.getElementById(outElementID);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {

          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              outElement.innerHTML = xmlhttp.responseText;
          }
      };

      xmlhttp.open("GET", "view_action.php", true);
      xmlhttp.send();
  }
  function modifyitem(modifythis)
  {
      var xmlhttp = new XMLHttpRequest();
      var outElement = document.getElementById('out');
      xmlhttp.onreadystatechange = function() {

          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              outElement.innerHTML = xmlhttp.responseText;
          }
      };

      xmlhttp.open("GET", "modify.php?modifythis=" + modifythis, true);
      xmlhttp.send();
  }

</script>
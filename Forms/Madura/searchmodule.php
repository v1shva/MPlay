<?php
$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b36179e61784e9";
$password = "d37edf33";
$dbname = "mplaydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//search
$sName = mysqli_real_escape_string($conn,$_POST['sname']);
if(empty($sName)){
	echo "no key searched please try again";
}
else
{

}
$sql ="SELECT * FROM user WHERE name LIKE '%$sName%'";
$r_query = mysqli_query($conn,$sql) or die(mysqli_error());
$name ="";
$email = "";
 $dob = "";
 $language = "";
 $country ="";
while ($row = mysqli_fetch_array($r_query)) {
     $name = $row['name'];
     $email = $row['email'];
     $dob = $row['birthday'];
     $language = $row['motherlanguge'];
     $country = $row['country'];

}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>WTF</title>
</head>
<body>
<form data-toggle = "validator" role = "form" class="form-horizontal" action = "action.php" method="POST">
<h2>Customer Registration</h2>
  <div class="form-group has-feedback">
    <label class="control-label col-sm-2" >Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" name = "Name" value="<?php echo "$name";?>" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group has-feedback">
  <label class="control-label col-sm-2">Email</label>
    <div class="col-sm-10">
    <input type="Email" name="Email" class="form-control" id= "inputemail" value="<?php echo "$email";?>" placeholder="example@mail.com" required>
      
    </div>
  </div>
    <div class="form-group"> 
   <label class="control-label col-sm-2" for = "dob">DOB</label>
    <div class="col-sm-10">
        <input type="date" class = "form-control" value="<?php echo "$dob";?>" name="dob">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name = "Password" placeholder="Enter password" required>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name = "PasswordConfirm" placeholder="Retype password" required>
    </div>
  </div>
    <div class="form-group"> 
   <label class="control-label col-sm-2" for = "dob">Language</label>
    <div class="col-sm-10">
      <select class="form-control" value="<?php echo "$language";?>" id="sel1">
        <option>Sinhala</option>
        <option>English</option>
        <option>Tamil</option>
        <option>Hindi</option>
      </select>   
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Select Your Country:</label>
    <div class="col-sm-10"> 
            <select class="form-control" id="sel1" required>
        <option>Sri Lanka</option>
        <option> Austria</option>
        <option>India</option>
        <option>United Sates</option>
      </select> 
    </div>
  </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Modify</button>
      <button type="submit reset" class="btn btn-default">Delete</button>
    </div>
  </div>
</form>
</body>
</html>
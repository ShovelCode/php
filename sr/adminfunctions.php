
<?php
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];
    
  if(!$username || !$password){
	  echo "You have not entered all the required details.<br>"
	       . "Please go back and try again.";
	  exit;
  }
  
  if(!get_magic_quotes_gpc()) {
	  $username = addslashes($username);
	  $password = addslashes($password);
 
  }
    
 @$db = new mysqli('localhost', 're439504', 're439504s17', 're439504');
  
  if(mysqli_connect_errno()) {
	  echo "Error: Could not connect to database.  Please try again later.";
	  exit;
  }
  
  //$query = "SELECT * FROM admin WHERE username = ".$username." and password = ".$password."";
  //$query = "SELECT * FROM admin WHERE username = 'young_d' AND password = 'securepassword'"; //testing, very insecure
  $query = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
  $result = $db->query($query);
  $count = mysqli_num_rows($result);
  //echo $count; //testing
  if($count == 1){
	  session_register("username");
	  $_SESSION['login_user'] = $username;
	  
	  header('Location: sendemails.html'); //A link
  } else {
	  echo "Login failed, try again";
  }
  
  $db->close();
  
  ?>
  <html>
<head>
 <title>UTPB Science Fair Administration</title>
</head>
<body>
<h1>Login</h1>
  </body>
  </html>
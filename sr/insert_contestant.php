<html>
<head>
 <title>UTPB Science Fair Entry Results</title>
</head>
<body>
<h1>UTPB Science Fair Entry Results</h1>
<?php
  $studentname=$_POST['studentname'];
  $school=$_POST['school'];
  $grade=$_POST['grade'];
  $category=$_POST['category'];
  $teachername=$_POST['teachername'];
  $projecttitle=$_POST['projecttitle'];
  $experimentdescription=$_POST['experimentdescription'];
  $experimentprocedure=$_POST['experimentprocedure'];
  $experimentsafety=$_POST['experimentsafety'];
  
  if(!$studentname || !$school || !$grade || !$category || !$teachername || !$projecttitle || !$experimentdescription || !$experimentprocedure || !$experimentsafety){
	  echo "You have not entered all the required details.<br>"
	       . "Please go back and try again.";
	  exit;
  }
  
  if(!get_magic_quotes_gpc()) {
	  $studentname = addslashes($studentname);
	  $school = addslashes($school);
	  $grade = addslashes($grade);
	  $category = addslashes($category); //doubleeval() or addslashes() ?
	  $teachername = addslashes($teachername);
	  $projecttitle = addslashes($projecttitle);
	  $experimentdescription = addslashes($experimentdescription);
	  $experimentprocedure = addslashes($experimentprocedure);
	  $experimentsafety = addslashes($experimentsafety);
	  
  }
    
 @$db = new mysqli('localhost', 're439504', 're439504s17', 're439504');
  
  if(mysqli_connect_errno()) {
	  echo "Error: Could not connect to database.  Please try again later.";
	  exit;
  }
  
  $query = "insert into contestants values ('".$studentname."', '".$school."', '".$grade."', '".$category."', '".$teachername."', 'x', 'x', 'x', 'x', '".$projectname."', '".$experimentdescription."', '".$experimentprocedure."', '".$experimentsafety."')";
  $result = $db->query($query);
  
  if($result){
	  echo $db->affected_rows." contestant inserted into database.";
	  
  } else {
	  echo "An error has occurred.  The item was not added.";
  }
  
  $db->close();
  
  ?>
  </body>
  </html>
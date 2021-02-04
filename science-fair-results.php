<html>
<head>
<title>UTPB Science Fare</title>
</head>

<body>
<h1>UTPB Science Faire Database Results</h1>

<?php
//create short variable names
$searchtype=$_POST['searchtype'];
$searchtype=trim($_POST['searchterm']);

if (!$searchtype || !$searchterm) {
	echo 'You have no entered search details.  Please go back and try again.';
	exit;
}

if (!get_magic_quotes_gpc()){
	$searchtype = addslashes($searchtype);
	$searchterm = addslashes($searchterm);
}

//Change parameters for our database
@ $db = new msqli('localhost', 'bookorama', 'bookorama123', 'books');

if(mysqli_connect_errno()){
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}

$query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
$result = $db->query($query);

$num_results = $result->num_rows;

echo "<p>Number of books found: ".$num_results."</p>";

for ($i = 0; $i < $numresults; $i++){
	$row = $result->fetch_assoc();
	echo "<p><strong>".($i+1).". Title: ";
	echo htmlspecialchars(stripslashes($row['title']));
	echo "</strong> <br>Author: ";
	echo stripslashes($row['author']);
	echo "<br> ISBN: ";
	echo stripslashes($row['isbn']);
	echo "<br> Price: ";
	echo stripslashes($row['price']);
	echo "</p>";
}

$result->free();
$db->close();

?>

</body>
</html>

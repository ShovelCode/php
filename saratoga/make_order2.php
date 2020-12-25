 <?php
$servername = "localhost";
$username="cosc445504";
$password="cosc445504sm16";
$db_name="cosc445504";
$tbl_name="orders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$value1 = $_POST['name'];
$value2 = $_POST['itemnum'];
$value3 = $_POST['quantity'];

$sql = "INSERT INTO $db_name.$tbl_name (Orderer, ProductNumber, Quantity)
VALUES ('$value1', '$value2', '$value3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_query($sql);
$conn->close();
?> 
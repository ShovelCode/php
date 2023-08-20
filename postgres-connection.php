<?php

// Define connection parameters
$host = 'localhost';
$port = '5432';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

// Create a connection string (DSN)
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

try {
    // Create a new PDO instance
    $connection = new PDO($dsn);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define SQL query
    $sql = "SELECT * FROM your_table_name";

    // Execute the query and store the result in a PHP variable
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Print the result
    echo "<pre>";
    print_r($result);
    echo "</pre>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

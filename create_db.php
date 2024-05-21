<?php
// Enable error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

function createDatabase($servername, $username, $password, $dbname) {
    // Enable MySQLi error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        // Create a connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connection was successful<br>";
        }

        // Create a database
        $sql = "CREATE DATABASE $dbname";
        if ($conn->query($sql) === TRUE) {
            echo "The database was created successfully!<br>";
        } else {
            throw new Exception("The database was not created successfully: " . $conn->error);
        }
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage() . "<br>";
    } finally{
        $conn->close();
    }
}

// Call the function
createDatabase("localhost", "root", "", "sampleDb");
?>

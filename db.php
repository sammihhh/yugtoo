<?php
    // Database connection parameters
    $servername = "localhost";
    $local ="root";
    $password = "";
    $dbname = "yugto.db";

    // Create connection to the database
    $conn = new mysqli($servername, $local, $password, $dbname);

    // Check connection status
    if (!$conn) {
        // If the connection fails, terminate and show an error message
        die("Connection failed: " . mysqli_connect_error());
    }
?>

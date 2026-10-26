
<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    echo "Success. Connected to database </br>";

    $sql= "CREATE DATABASE institute";
    
    if($conn->query($sql) === TRUE){
        echo "Database cretaed successfully </br>";
    }else{
        echo "Error creatiing table:".$conn->error;
    }

   mysqli_select_db($conn,"institute");

    $sql= "CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(120) UNIQUE,
    course VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);";

    if($conn->query($sql) === TRUE){
        echo "Students Table cretaed successfully</br>";
    }else{
        echo "Error creatiing table:".$conn->error;
    }

    $conn->close();
?>












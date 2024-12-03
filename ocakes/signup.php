<?php

$servername = "localhost"; 
$username = "root";        
$password = "";          
$dbname = "imageplay"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   
    $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullName, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Sign-up successful!";
        
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<?php
session_start(); 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "imageplay";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id, fullname, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullname, $hashed_password);
        $stmt->fetch();

       
        if (password_verify($password, $hashed_password)) {
            $_SESSION["logged_in"] = true; 
            $_SESSION["user_id"] = $id; 
            $_SESSION["fullname"] = $fullname;
            $_SESSION["user_email"] = $email;

            header("Location: index.php");
            exit();
        } else {
            header("Location: login.html");;
        }
    } else {
        header("Location: login.html");;
    }

    $stmt->close();
}

$conn->close();
?>

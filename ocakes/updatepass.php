<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "imageplay"; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

   
    $user_id = $_SESSION["user_id"];

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashed_password, $user_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['password_update_success'] = "Password updated successfully!";
        header("Location: profile.php");
        exit();
    } else {
        echo "Failed to update password.";
    }

    $stmt->close();
}

$conn->close();
?>

<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
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


$user_id = $_SESSION['user_id'];
$sql = "SELECT fullname, email FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($fullname, $email);
$stmt->fetch();
$stmt->close();

$conn->close();


$password_update_success = isset($_SESSION['password_update_success']) ? $_SESSION['password_update_success'] : null;
unset($_SESSION['password_update_success']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Profile Page">
    <meta name="keywords" content="Profile, Update Password, Cake">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li><a href="profile.php"><?php echo $fullname; ?>'s Profile</a></li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="container">
        <h2>Profile Information</h2>
        <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <?php if ($password_update_success): ?>
            <div class="alert alert-success">
                <?php echo $password_update_success; ?>
            </div>
        <?php endif; ?>

        <h3>Update Password</h3>
        <form action="updatepass.php" method="POST">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" required><br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required><br>
            <button type="submit" class="btn">Update Password</button>
        </form>
    </div>

</body>
</html>

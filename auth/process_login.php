<?php
session_start();
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Admin email must contain sokotrend
if($role == 'admin' && strpos($email, 'sokotrend') === false){
    die("Admin email must contain 'sokotrend'");
}

$sql = "SELECT * FROM users WHERE email=? AND role=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $role);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // REDIRECT DIRECTLY (NO LOGIN PAGE AGAIN)
        if($role == 'admin'){
            header("Location: ../admin/dashboard.php");
        } elseif($role == 'seller'){
            header("Location: ../seller/dashboard.php");
        } else {
            header("Location: ../customer/dashboard.php");
        }
        exit();
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}
?>
<?php
session_start();
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "SELECT * FROM users WHERE email='$email' AND role='$role'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
 if(password_verify($password, $user['password'])){
   
        if($role == 'admin'){
            header("Location: ../admin/dashboard.php");
        }
        elseif($role == 'seller'){
            header("Location: ../seller/dashboard.php");
        }
        else{
            header("Location: ../customer/dashboard.php");
        }
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}
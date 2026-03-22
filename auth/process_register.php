<?php
include("../config/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

// Prevent admin registration
if($role == 'admin'){
    die("Admin cannot register here!");
}

$sql = "INSERT INTO users (name,email,password,role)
VALUES (?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name,$email,$password,$role);

if($stmt->execute()){
    echo "Registered successfully. <a href='../index.php'>Login</a>";
} else {
    echo "Error: ".$conn->error;
}
?>
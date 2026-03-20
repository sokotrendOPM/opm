<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>SokoTrend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand fw-bold">SokoTrend</span>

    <div>
        <?php if(isset($_SESSION['role'])) { ?>
            <span class="text-white me-3"><?=$_SESSION['role']?></span>
            <a href="/sokotrend/OPM/auth/logout.php" class="btn btn-danger">Logout</a>
        <?php } else { ?>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#authModal">Login / Register</button>
        <?php } ?>
    </div>
</nav>

<div class="container mt-4">
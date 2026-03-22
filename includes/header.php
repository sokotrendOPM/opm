<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SokoTrend - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        :root { --primary-blue: #2c5282; --bg-light: #f7fafc; }
        body { background-color: var(--bg-light); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-custom { background-color: var(--primary-blue); color: white; }
        .card-stat { border: none; border-radius: 10px; color: white; transition: transform 0.2s; }
        .card-stat:hover { transform: translateY(-5px); }
        .sidebar { background-color: #1a365d; min-height: 100vh; color: white; }
        .nav-link-custom { color: #cbd5e0; padding: 12px 20px; display: block; text-decoration: none; }
        .nav-link-custom:hover, .nav-link-custom.active { background: #2d3748; color: white; border-left: 4px solid #4299e1; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom px-4 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white" href="../index.php">
            <img src="../images/logo3.png" alt="" height="30" class="me-2"> SokoTrend
        </a>
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bell me-3"></i>
            <i class="fa-solid fa-circle-user fs-4 me-2"></i>
            <span class="fw-medium text-white me-3"><?php echo $_SESSION['name'] ?? 'User'; ?></span>
            <a href="../auth/logout.php" class="btn btn-sm btn-outline-light">Logout</a>
        </div>
    </div>
</nav>
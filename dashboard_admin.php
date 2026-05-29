<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #e6f2ff; min-height:100vh;">
<div class="container mt-5 col-md-6">
  <div class="card shadow-lg" style="background-color: #f5f5f5;">
    <div class="card-header text-white" style="background-color:#343a40;">
      <h2 class="card-title mb-0">Dashboard Admin</h2>
    </div>
    <div class="card-body">
      <p>Login sebagai: <b><?= $_SESSION['username'] ?></b></p>
      <ul class="list-group">
          <li class="list-group-item"><a href="data_mahasiswa.php">Kelola Data Mahasiswa</a></li>
          <li class="list-group-item"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>




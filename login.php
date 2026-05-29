<?php
// BAGIAN LOGIKA (OTAK)
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users 
        WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if ($data['role'] == 'admin') {
            header("Location: dashboard_admin.php");
        } else {
            header("Location: dashboard_user.php");
        }
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem Informasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #e6f2ff; min-height:100vh;">
<div class="container mt-5 col-md-4">
  <div class="card shadow-lg" style="background-color:#f5f5f5;">
    <div class="card-header text-white" style="background-color:#343a40;">
      <h2 class="card-title mb-0">Login Sistem Informasi Mahasiswa</h2>
    </div>
    <div class="card-body">
      <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
      <form method="POST">
          <div class="mb-3">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
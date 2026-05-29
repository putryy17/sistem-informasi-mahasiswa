<?php
include 'koneksi.php';
session_start();

// Cek role Admin
if($_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}

// Ambil ID dari parameter URL
$id = $_GET['id'];

// Ambil data lama
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

// Proses update
if(isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];

    mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', fakultas='$fakultas' WHERE id='$id'");
    header("Location: data_mahasiswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#e6f2ff; min-height:100vh;">
<div class="container mt-5 col-md-6">
  <div class="card shadow-lg" style="background-color:#f5f5f5;">
    <div class="card-header text-white" style="background-color:#343a40;">
      <h2 class="card-title mb-0">Edit Mahasiswa</h2>
    </div>
    <div class="card-body">
      <form method="POST">
          <div class="mb-3">
              <label class="form-label">NIM</label>
              <input type="text" name="nim" value="<?= $data['nim'] ?>" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Jurusan</label>
              <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Fakultas</label>
              <input type="text" name="fakultas" value="<?= $data['fakultas'] ?>" class="form-control" required>
          </div>
          <button type="submit" name="update" class="btn btn-primary w-100">Update</button>
          <a href="data_mahasiswa.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: login.php");
    exit;
}
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #e6f2ff; min-height:100vh;">
<div class="container mt-5">
  <div class="card shadow-lg" style="background-color:#f5f5f5;">
    <div class="card-header text-white" style="background-color:#343a40;">
      <h2 class="card-title mb-0">Data Mahasiswa</h2>
    </div>
    <div class="card-body">
      <p>Login sebagai: <b><?= $_SESSION['username'] ?></b></p>

      <?php if($_SESSION['role']=='admin'){ ?>
        <a href="tambah_mahasiswa.php" class="btn btn-success mb-3">Tambah Mahasiswa</a>
      <?php } ?>

      <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <?php if($_SESSION['role']=='admin'){ ?><th>Tindakan</th><?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['nim'] ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['jurusan'] ?></td>
              <td><?= $row['fakultas'] ?></td>
              <?php if($_SESSION['role']=='admin'){ ?>
              <td>
                <a href="edit_mahasiswa.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="hapus_mahasiswa.php?id=<?= $row['id'] ?>" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin hapus mahasiswa <?= $row['nama'] ?>?')">Hapus</a>
              </td>
              <?php } ?>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <a href="<?= ($_SESSION['role']=='admin')?'dashboard_admin.php':'dashboard_user.php' ?>" class="btn btn-secondary mt-2">Kembali ke Dashboard</a>
    </div>
  </div>
</div>
</body>
</html>


<?php
include 'koneksi.php';
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");
header("Location: data_mahasiswa.php");
exit;
?>


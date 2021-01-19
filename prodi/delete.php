<?php
session_start();
require_once '../helper/connection.php';

$kode_prodi = $_GET['kode_prodi'];

$result = mysqli_query($connection, "DELETE FROM prodi WHERE kode_prodi='$kode_prodi'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}

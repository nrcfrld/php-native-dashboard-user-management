<?php
session_start();
require_once '../helper/connection.php';

$ruang_id = $_POST['ruang_id'];
$nama_ruang = $_POST['nama_ruang'];
$kapasitas = $_POST['kapasitas'];
$query = mysqli_query($connection, "insert into ruang(ruang_id, nama_ruang, kapasitas) value('$ruang_id', '$nama_ruang', '$kapasitas')");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}

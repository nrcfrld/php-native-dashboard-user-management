<?php
session_start();
require_once '../helper/connection.php';

$mk_id = $_POST['mk_id'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$query = mysqli_query($connection, "insert into mata_kuliah(mk_id, nama_mk, sks) value('$mk_id', '$nama_mk', '$sks')");

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

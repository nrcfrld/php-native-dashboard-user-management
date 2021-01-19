<?php
session_start();
require_once '../helper/connection.php';

$nim = $_POST['nim'];
$mk_id = $_POST['mk_id'];
$kode_prodi = $_POST['kode_prodi'];
$inisial = $_POST['inisial'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_akhir = $_POST['nilai_akhir'];

$query = mysqli_query($connection, "insert into nilai(nim, mk_id, kode_prodi, inisial, nilai_uts, nilai_uas, nilai_akhir) value('$nim', '$mk_id', '$kode_prodi', '$inisial', '$nilai_uts', '$nilai_uas', '$nilai_akhir')");

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

<?php
session_start();
require_once '../helper/connection.php';

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$agama = $_POST['agama'];
$sex = $_POST['sex'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$asal_sekolah = $_POST['asal_sekolah'];
$no_hp = $_POST['no_hp'];
$login = $_POST['login'];
$password = $_POST['password'];
$kode_prodi = $_POST['kode_prodi'];
$birth_date = $_POST['birth_date'];

$query = mysqli_query($connection, "insert into mahasiswa(nim, nama_mhs, agama, sex, alamat, kota, asal_sekolah, no_hp, login, password, kode_prodi, birth_date) value('$nim', '$nama_mhs', '$agama', '$sex', '$alamat', '$kota', '$asal_sekolah', '$no_hp', '$login', '$password', '$kode_prodi', '$birth_date')");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}

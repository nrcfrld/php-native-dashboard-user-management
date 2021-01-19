<?php
session_start();
require_once '../helper/connection.php';

$nik = $_POST['nik'];
$nama_dosen = $_POST['nama_dosen'];
$status = $_POST['status'];
$sex = $_POST['sex'];
$agama = $_POST['agama'];
$login = $_POST['login'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
$salary = $_POST['salary'];

$query = mysqli_query($connection, "UPDATE dosen SET nama_dosen = '$nama_dosen', status = '$status', sex = '$sex', agama = '$agama', login = '$login', password = '$password', alamat = '$alamat', kota = '$kota', email = '$email', nohp = '$nohp', salary = '$salary' WHERE nik = '$nik'");
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
                                              ?>
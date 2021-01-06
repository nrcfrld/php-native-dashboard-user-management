<?php
session_start();
require_once '../helper/connection.php';

$nik = $_POST['nik'];
$inisial = $_POST['inisial'];
$nama_dosen = $_POST['nama_dosen'];
$status = $_POST['status'];
$sex = $_POST['sex'];
$agama = $_POST['agama'];
$login = $_POST['login'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$salary = $_POST['salary'];
$query = mysqli_query($connection, "insert into dosen(NIK, Inisial, nama_dosen, status, sex, agama, login, password, alamat, kota, email, nohp, salary) value('$nik', '$inisial', '$nama_dosen', '$status', '$sex', '$agama', '$login', '$password', '$alamat', '$kota', '$email', '$no_hp', '$salary')");
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
                                              ?>
<?php
session_start();
require_once '../helper/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

$query = mysqli_query($connection, "insert into user_levels(username, password, userlevel) value('$username', '$password', '$userlevel')");
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
<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

$query = mysqli_query($connection, "UPDATE user_levels SET username = '$username', password = '$password', userlevel = '$userlevel' WHERE id = '$id'");
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
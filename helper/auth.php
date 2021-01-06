<?php
session_start();

function isLogin()
{
  if(!isset($_SESSION['login'])){
    header('Location: ../index.php');
  }
}

function checkRole()
{
  if($_SESSION['login']['userlevel'] == 1){
    return 'admin';
  }elseif($_SESSION['login']['userlevel'] == 2){
    return 'user';
  }
}
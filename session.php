<?php
include('dbconnect.php');
session_start();

$user_check = $_SESSION['username'];

$ses_sql = mysqli_query($db,"select user_id from users where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['user_id'];

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
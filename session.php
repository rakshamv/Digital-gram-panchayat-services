<?php

include 'config.php';
session_start();
$username=$_SESSION['username'];
$role=$_SESSION['role'];
$password=$_SESSION['password']; 
$check=mysqli_query($connection,"select * from login where username='".$username."' and role='".$role."' and password='".$password."'");
$row=mysqli_fetch_array($check,MYSQLI_ASSOC);
$loginuser=$row['username'];
$pass=$row['password'];
$role=$row['role'];

if(!isset($_SESSION['username']))
{
	header("location:index.php");
}

?>
<?php 
//session_start();
date_default_timezone_set('Asia/Kolkata'); // time zone set

/*  connection to database */
$link=mysqli_connect($servername, $username,$password);
mysqli_select_db($link,$db);
if($link ===false){
    die("Error : Database not connected." . mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');
?>
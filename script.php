<?php
require 'config.php';
require 'connection.php';

//$call=$_POST['call'];
$id=uniqid();
$created=date('Y-m-d H:i:s');
$last_edited=date('Y-m-d H:i:s');
$msg="";
//if($call=='order')
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobileNo=$_POST['mobileNo'];
	$email=$_POST['email'];
	$property_list=$_POST['property_list'];
	$message=$_POST['message'];
	
	
	$insertSql=mysqli_query($link,"INSERT INTO `dreamhome_datails`(`id`, `first_name`, `last_name`, `mobile_no`, `email`, `property_list`, `message`, `created`, `last_edited`) VALUES 
		('".$id."','".$fname."','".$lname."','".$mobileNo."','".$email."','".$property_list."', '".$message."','".$created."','".$last_edited."')");

	if($insertSql===true)
	{
		header("Location:index.php?suc=Record Added Successfully"); 
	}
	else
	{
		header("Location:index.php?suc=Failed To Add Record.Please try again.");
	}

}


?>
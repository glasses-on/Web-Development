<?php
	session_start();
	require_once("connection.php");
	if(isset($_GET['add'])){
		$id=$_GET['id'];
		echo $id;
		$query = "INSERT INTO ord VALUES ('{$_SESSION['email']}',{$_GET['id']})";
		echo $query;
		if(mysqli_query($con, $query)){
			header("location:home.php");
		}
	}
 ?>

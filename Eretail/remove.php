<?php 

session_start();

	require_once("connection.php");
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id=$_GET["id"];
		$query = "DELETE FROM ord WHERE item_id='{$id}' AND Email='{$_SESSION[email]}'";
		$res=mysqli_query($con,$query);
		if($res){
			header("location:cart.php");
			exit;
		}else{
			echo "error while deleting records".mysqli_error($con);
		}
	}else{
		echo "Dont try this!";
	}
?>

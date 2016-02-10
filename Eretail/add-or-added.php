<?php

	function message($id){
		require("connection.php");
		$query = "SELECT * FROM ord";
		$result=mysqli_query($con, $query);
		
		$there=0;
		while($row=mysqli_fetch_array($result)){
			if($row['Email']==$_SESSION['email'] and $row['item_id']==$id)
			{$there=1;break;}
		}
		
		if($there == 0){
				return "Add to cart";
			}else{
				return "Added!";
			}
		
	}
	
?>

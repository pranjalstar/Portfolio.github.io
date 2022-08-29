<?php
	if(isset($_POST)){
		require_once("db_connect.php");
	$name=($_POST['name']);
	$email=($_POST['email']);	
	$message=($_POST['message']);

	$sql="insert into contact(name,email,message)
		values('$name','$email','$message')";

	if (mysqli_query($conn, $sql)) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
	}	
?>
<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection failed : ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into inregistrare(username,pass) values(?,?)");
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		echo "Bravo";

		
		$stmt->close();
		$conn->close();
	}   
	



?>
	<link rel = "stylesheet" href="style_login.css">
	<br>
	<br>
	<br>
	<a href="home.php"><button class="ho">Go To Home</button></a>
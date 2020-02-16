<?php
	if($_POST)
	{
		$name = $_POST["name"];
		$num = $_POST["num"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];//key
		$gender = $_POST["gender"];
		$state = $_POST["state"];
		$occ = $_POST["occupation"];
		$pass = $_POST["password"];
		$c_pass = $_POST["confirm_Password"];

		$conn = new mysqli('localhost','root','','test');
		if($conn -> connect_error)
		{
			die("Connection Failed : ".$conn->connect_error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO try(Name,Mobile,DOB,Email,Gender,State,Occupation,Password,ConfirmPassword) values(?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sisssssss",$name,$num,$dob,$email,$gender,$state,$occ,$pass,$c_pass);
			$stmt->execute();
			$stmt->close();
			$conn->close();
		}
		header('Location:options.html');
	}
	
?>
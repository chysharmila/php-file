<?php
	
	$servername = "localhost";
	$username = "sharmila";
	$password ="dell";
	$dbname = "merosathi";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error)
	{
		die("Connection Problem:".$conn->connect_error);


	}
	else
	{

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$name = $_POST["name"];
			$company = $_POST["company"];
			$title = $_POST["title"];
			$mobile = $_POST["mobile"];
			$email = $_POST["email"];
			$group = $_POST["group"];

			$sql = "INSERT INTO contacts (name, company, title, mobile, email, groupname) VALUES('".$name."', '".$company."', '".$title."', '".$mobile."', '".$email."', '".$group."' )";

			if($conn->query($sql) === TRUE)
			{
				echo "<h2>Contact Registered Success !</h2>";
			}

			else
			{
				echo "Error:" . $sql . "<br>" . $conn->error;
			}
		}
	}
	$conn->close();


?>
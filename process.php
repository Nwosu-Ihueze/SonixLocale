<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "test";
	
	 //set PHP variables 
	$email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	

	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}


	//Connect to mysql
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	

	//prepare sql insert query
	$statement = $mysqli->prepare("INSERT INTO users_data (user_email) VALUES(?)"); 

	//bind parameters for markers, where (s = string)
	$statement->bind_param('s',$email); //bind values and execute insert query
	
	if($statement->execute()){
		print "Email registered successfully";
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
?>
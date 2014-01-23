I<?php
	$con = mysql_connect("localhost", "root", "bsos");

	mysql_select_db("trabalhos", $con);

	$firstName = $_POST["firstName"];
	
	$lastName = $_POST["lastName"];
	
	mysql_query("INSERT INTO PERSONS (firstname, lastname) VALUES ('$firstName', '$lastName')");

	header("location: list.php");

	mysql_close($con);

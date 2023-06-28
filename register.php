<?php 
	$db = mysqli_connect('localhost','root','','crudflutter');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO users (email, password) VALUES ('".$email."', '".$password."')";

	if (mysqli_query($db, $sql)) {
		echo json_encode("Success");
	} else {
		echo json_encode("Error");
	}
?>
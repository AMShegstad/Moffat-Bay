<?php

require_once('config.php');

if(isset($_POST)){

	$firstname 		= $_POST['firstName'];

	$lastname 		= $_POST['lastName'];

	$email 			= $_POST['emailTxt'];
	
	$phonenumber	= $_POST['phoneNumber'];
	
	$pass 			= $_POST['passwordTxt'];

	$hashpassword = password_hash($pass, PASSWORD_DEFAULT, array('cost'=>9));

	$sql = "INSERT INTO Customers (firstName, lastName, email, phone, pass ) VALUES(?,?,?,?,?)";

	$stmtinsert = $db->prepare($sql);

	$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $hashpassword]);

	if($result){
		
		header("Location: index.php");

	}else{
		echo 'There were errors while saving the data.';
	}

}else{

	echo 'No data';

}
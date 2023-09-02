<?php
require_once('databaseConnection.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstName'];
	$lastname 		= $_POST['lastName'];
	$email 			= $_POST['email'];
	$phone			= $_POST['phone'];
	$pass 			= $_POST['pass'];
	$hashpassword = password_hash($pass, PASSWORD_DEFAULT, array('cost'=>9));

		$sql = "INSERT INTO customers (firstName, lastName, email, phone, pass ) VALUES(?,?,?,?,?)";
		$stmtinsert = $dbDatabase->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $hashpassword]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}

// need to put <?php tags around this


    //$name = $_POST['userName'];

   // $sql = "SELECT * FROM dbName WHERE username = {$name}";

    // $page = 

    /**
     * If username is in the db
     * {
     * 
     *  If password given matches encrypted pass{
     * 
     *          redirect them to 
     * 
     * }
     * 
     * }
     */


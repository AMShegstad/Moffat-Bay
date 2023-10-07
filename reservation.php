<?php

/* 
    Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten
*/

session_start();
require_once('config.php');

if(isset($_POST)){
       
    // Defining the variables to be stored

    switch ($_SESSION['roomConfig']) {
        case "1":
            $roomConfig = "Double Full";
            break;
        case "2":
            $roomConfig = "Queen";
            break;
        case "3":
            $roomConfig = "Double Queen";
            break;
        case "4":
            $roomConfig = "King";
            break;
    }

    $checkInDate = $_SESSION['cidString'];

    $checkOutDate = $_SESSION['codString'];

    $customerID = $_SESSION['customerID'];

    $customerEmail = $_SESSION['emailAddress'];

    // sql query to be executed
	$sql = "INSERT INTO reservation (customerID, roomConfig, checkInDate, checkOutDate, email ) VALUES(?,?,?,?, ?)";

	$stmtinsert = $db->prepare($sql);

    // getting the results
	$result = $stmtinsert->execute([$customerID, $roomConfig, $checkInDate, $checkOutDate, $customerEmail]);

    // confirming the entries
	if($result){
		
		header("Location: index.php");

	}else{

		echo 'There were errors while saving the data.';

	}

}else{

	echo 'No data';

}
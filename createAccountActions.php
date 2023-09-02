<?php

include 'process.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $emailFlag = "true";

    $email = $_REQUEST['emailTxt'];

    $sqlEmail = "SELECT email FROM customers";
    
    $emails = $conn->query($sqlEmail);

    if($emails->num_rows > 0){

        while($row = $emails->fetch_assoc()){

            if($email == $row['email']){

                $emailFlag = "false";

            }
            
        }

    }
    
    

}

?>
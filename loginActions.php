<?php

session_start();
include 'databaseConnection.php';

if(isset($_POST)){

    $inputEmail = $_POST['emailTxt'];

    $inputPassword = $_POST['passwordTxt'];

    $usersSql = "SELECT customerID, email, pass, firstName, lastName FROM customers;";

    $users = $conn->query($usersSql);

    $fName = "";

    if($users->num_rows > 0){

        while($row = $users->fetch_assoc()){

            if($row['email'] == $inputEmail){

              if(password_verify($inputPassword, $row['pass'])){

                $_SESSION['login']=$row['firstName'];

                $_SESSION['lastName']=$row['lastName'];

                $_SESSION['emailAddress'] = $row['email'];

                $_SESSION['customerID'] = $row['customerID'];

                header("Location: index.php");

              }

            }

        }

    }
	
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


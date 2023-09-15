<?php

/* 
    Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten
*/

require_once('config.php');

if(isset($_SESSION['login'])){

    $cid =(string)$_SESSION['customerID'];

    $stmtSELECT = $db->prepare("SELECT * FROM reservation WHERE customerID = ?");

    $stmtSELECT->execute(array($_SESSION['customerID']));

    echo "<table id='currentResTable'>";
    echo "<tr>";
    echo "<th> Check In </th>";
    echo "<th> Check Out </th>";
    echo "<th> Room Configuration </th>";
    echo "</tr>";
    
    if($stmtSELECT){

        foreach ($stmtSELECT as $res) {


            // confirming the entries
            if($res){
                
                //echo "You currently have a reservation from {$res['checkInDate']} until {$res['checkOutDate']} for a {$res['roomConfig']} room";
                //header("Location: index.php");
                echo "<tr>";
                echo "<td>{$res['checkInDate']}</td>";
                echo "<td>{$res['checkOutDate']}</td>";
                echo "<td>{$res['roomConfig']}</td>";
                echo "</tr>";

            }else{

                //echo 'You have no pending reservations. Navigate to "Reservations" to book today!';
                echo "failed to retrieve reservations.";

            }
        }

    } else {

	    echo 'You have no current reservations. Book Today!';

    }
    echo "</table>";
}
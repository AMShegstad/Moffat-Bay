<?php

/* 
Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten
*/

session_start();

session_destroy();

header("Location: index.php");

?>
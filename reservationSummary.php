
<!-- Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten -->

<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>

    <link rel="stylesheet" href="site.css">

    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>

    <!-- Use this link for the hamburger menu icon when the screen is smaller -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js' integrity='sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' crossorigin='anonymous'></script>

    <title>Reservation Summary</title>

</head>
<body>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>

    <div class="topbar" id="navbar-items">

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">

            <a class="navbar-brand mx-3" href="#landingPage">
                
                <img id="mbLogo" src="images/logo.png" width="160" height="70" class="d-inline-block align-top" alt="Moffat Bay Lodge">
            
            </a>

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item text-center">
                        <a class="nav-link" href="index.php">Back to Moffay Bay Home</a>
                    </li>

                </ul>

                <a href="javascript:void(0);"class="icon" onclick="openNavbar()">
                            <i class="fa fa-bars"></i>
                </a>
        
        </nav>

        <script src="actions.js"></script>

</div>

<script src="actions.js"></script>

</div>

<div class="my-5" id="login">

    <?php

     

    ?>

</div>

<script>

    function openNavbar(){

        var x =document.getElementById("navbar-items");

        if(x.className === "topbar"){

            x.className += " responsive";

        }else{

            x.className = "topbar";

        }

    }

</script>


<br>
<br>

<div class="container">

<div id="reservationThanks">

    <div id="reservationThanksText">

        <h1>Please confirm the details of your reservation...</h1>

    </div>
</div>
<hr>
<section class="section mt-5 text-center" id="reservationSummary">
    <form action="reservation.php" method="POST">
        <?php
        
            /*
            $roomConfig = $_POST['roomConfig'];
            $checkInDate = new dateTime($_POST['checkIn']);
            $checkOutDate = new dateTime($_POST['checkOut']);
            $cidString = date_format($checkInDate, "m/d/y");
            $codString = date_format($checkOutDate, "m/d/y");
            $days = $checkOutDate->diff($checkInDate)->format('%a');
            //$emailAddress = $_SESSION['emailAddress'];
            //$name = $_SESSION['login'];
            if ($roomConfig % 2 == 0){
                $reservationCost = $days * 115.00;
            } else {
                $reservationCost = $days * 150.00;
            }
            */
            $_SESSION['roomConfig'] = $_POST['roomConfig'];
            $_SESSION['checkInDate'] = new dateTime($_POST['checkIn']);
            $_SESSION['checkOutDate'] = new dateTime($_POST['checkOut']);
            $_SESSION['cidString'] = date_format($_SESSION['checkInDate'], "y/m/d");
            $_SESSION['codString'] = date_format($_SESSION['checkOutDate'], "y/m/d");
            $_SESSION['days'] = $_SESSION['checkOutDate']->diff($_SESSION['checkInDate'])->format('%a');

            if ($_POST['roomConfig'] == "1" || $_POST['roomConfig'] == 3){
                $_SESSION['reservationCost'] = $_SESSION['days'] * 115.00;
            } else {
                $_SESSION['reservationCost'] = $_SESSION['days'] * 150.00;
            }

            echo "<h2> RESERVATION SUMMARY </h2>";

            echo "<h3>Reservation for {$_SESSION["login"]}</h3>";

            switch ($_SESSION['roomConfig']) {
                case "1":
                    echo "<p>Room Configuration: Double Full </p>";
                    break;
                case "2":
                    echo "<p>Room Configuration: Queen </p>";
                    break;
                case "3":
                    echo "<p>Room Configuration: Double Queen </p>";
                    break;
                case "4":
                    echo "<p>Room Configuration: King </p>";
                    break;
                default:
                    echo "<p>Error...</p>";
            }
            
            echo "<p>Room congifuration: {$_SESSION['roomConfig']}</p>";
            echo "<p>Check-in date: {$_SESSION['cidString']}</p>";
            echo "<p>Check-out date: {$_SESSION['codString']}</p>";
            echo "<p>Total due at Check-in: $ {$_SESSION['reservationCost']}</p>";
        ?>

        <button id="confirmReservation" type="submit"> Confirm Reservation </button>
        <button id="cancel" href="index.php"> CANCEL </button>
    </form>

    <a href="sessionTest.php"> session variables</a>
</section>

</div>
</body>
</html>
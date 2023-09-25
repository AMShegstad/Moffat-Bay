
<!-- Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten -->

<?php
    
    session_start();

    include_once 'config.php';

if(isset($_SESSION['login'])){

    $text = "Welcome " . $_SESSION['login'];

}else{

    $text = "Login/Sign-Up";

}

function runQuery($statement){

    global $db;

    $results = $db->query($statement);

    return $results;

}

?>


<!DOCTYPE html>

<html lang='en'>

    <head>

        <meta charset='UTF-8'>

        <link rel="stylesheet" href="site.css">

        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>

        <!-- Use this link for the hamburger menu icon when the screen is smaller -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>

        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js' integrity='sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' crossorigin='anonymous'></script>

        <title>Document</title>

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
                    <a class="nav-link" href="index.php">Return To Home</a>
                </li>            

            </ul>

            <a href="javascript:void(0);"class="icon" onclick="openNavbar()">
                        <i class="fa fa-bars"></i>
            </a>

            <ul class="nav navbar-nav navbar-right mx-3">

                <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#loginForm"><span class="fas fa-sign-in-alt"></span><?php echo $text; ?></a>

            </ul>

            <?php
            
            if(isset($_SESSION['login'])){

                ?>

                <ul class="nav navbar-nav navbar-right mx-3">

                    <a class="nav-link" href="logout.php" type="button">Logout</a>

                </ul>

                <?php

            }else{

                include 'loginPage.php';

            }
            
            ?>

            </nav>

            <script src="actions.js"></script>

            </div>

            <?php


            ?>

            <br>
            <br>

        <div class="container">

            <form class="text-center" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="form-outline w-50 mx-auto" style="border: 1px solid black">

                    <h2>Search Reservation:</h2>

                    <select name="searchOptions" class="mb-3 mt-3">

                        <option disabled selected> -- Search Options --</option>

                        <option value="sAll">All</option>

                        <option value="sEmail">Email</option>

                        <option value="sRoomConfig">Room Config</option>

                        <option value="sCheckInDate">Check-In Date (YYYY-MM-DD)</option>

                        <option value="sCheckOutDate">Check Out Date (YYYY-MM-DD)</option>

                    </select>

                    <input type="text" name="searchTxt" class="form-control w-50 mx-auto mb-3 text-center" placeholder="Criteria.." style="border: 2px solid black">

                    <button type="submit" name="submitSearch" class="btn btn-primary mb-3">Search</button>

                </div>

            </form>

        </div>

        <br>
        <br>

        <div class="my-5">

            <table class="table table-bordered table-striped">

                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Room Config</th>
                    <th>Check-In Date</th>
                    <th>Check-Out Date</th>
                </tr>
            

        <?php

            if(isset($_SESSION['login'])){

                $customerSessionID = $_SESSION['customerID'];

                if(isset($_POST['submitSearch'])){

                    $searchChoice = $_POST['searchOptions'];
                    

                    if($searchChoice == "sAll"){

                        $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.customerID = {$customerSessionID};";

                    }else if($_POST['searchTxt']){

                        $criteria = $_POST['searchTxt'];
                    
                        if($searchChoice == 'sEmail'){

                                $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.email = '{$criteria}';";


                        }else if($searchChoice == 'sRoomConfig'){

                                $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.roomConfig = '{$criteria}';";

                        }else if($searchChoice == 'sCheckInDate'){

                            $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.checkInDate = '{$criteria}';";


                        }else if($searchChoice == 'sCheckOutDate'){

                            $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.checkOutDate = '{$criteria}';";

                        }

                    }

                    $results = runQuery($sqlStmt);

                    $results->setFetchMode(PDO::FETCH_ASSOC);

                    while($row = $results->fetch()){

                        $fullName = "{$row['firstName']} {$row['lastName']}";

                        ?>

                            <tr>

                                <td><?php echo $fullName ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['roomConfig'] ?></td>
                                <td><?php echo $row['checkInDate'] ?></td>
                                <td><?php echo $row['checkOutDate'] ?></td>

                            </tr>

                        <?php

                    }

                }else{

                    $sqlStmt = "SELECT * FROM customers INNER JOIN reservation ON customers.customerID = reservation.customerID AND reservation.customerID = {$customerSessionID};";

                    //$queryResults = runQuery($sqlStmt, $db);

                    $results = runQuery($sqlStmt);

                    $results->setFetchMode(PDO::FETCH_ASSOC);

                    while($row = $results->fetch()){

                        $fullName = "{$row['firstName']} {$row['lastName']}";

                        ?>

                            <tr>

                                <td><?php echo $fullName ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['roomConfig'] ?></td>
                                <td><?php echo $row['checkInDate'] ?></td>
                                <td><?php echo $row['checkOutDate'] ?></td>

                            </tr>

                        <?php

                    }

                }      

            }

        ?>

            </table>

        </div>

        <image src="images/thumbnail_SalishSalmon2.png"></image>

    </html>
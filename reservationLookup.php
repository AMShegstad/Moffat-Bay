<?php
    
    //Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten

    session_start();

if(isset($_SESSION['login'])){

    $text = "Welcome " . $_SESSION['login'];

}else{

    $text = "Login/Sign-Up";

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
                            <a class="nav-link" href="index.php">Back to home page</a>
                        </li>

                    </ul>

                    <a href="javascript:void(0);"class="icon" onclick="openNavbar()">
                                <i class="fa fa-bars"></i>
                    </a>

                    <ul class="nav navbar-nav navbar-right mx-3">

                        <a class="nav-link" onclick="showLogin()"><span class="fas fa-sign-in-alt"></span><?php echo $text; ?></a>

                    </ul>
            
            </nav>

            

            <script src="actions.js"></script>

        </div>

        <div class="my-5" id="login">

            <?php

                include 'loginPage.php';
                include 'createAccountForm.php';

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

        <image src="images/thumbnail_SalishSalmon2.png"></image>
    </html>
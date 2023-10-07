<!-- Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten -->

<?php
    
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

        <link rel="icon" href="images/red_fish.png">

        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>

        <!-- Use this link for the hamburger menu icon when the screen is smaller -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>

        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js' integrity='sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' crossorigin='anonymous'></script>

        <title>Moffat Bay</title>

    </head>

    <body class="">

        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>

        <script src="actions.js"></script>

        <div class="topbar" id="navbar-items">

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
        
                    <a class="navbar-brand mx-3" href="#landingPageSection">
                        
                        <img id="mbLogo" src="images/logo.png" width="160" height="70" class="d-inline-block align-top" alt="Moffat Bay Lodge">
                    
                    </a>

                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item text-center">
                                <a class="nav-link" href="#aboutUs">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#attractions">Attractions</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#registrationContainer">Reservation</a>
                            </li>
                        
                            <?php 
                                if (ISSET($_SESSION['login'])) { ?>
                                    <li class='nav-item text-center'>
                                    <a class='nav-link' href='reservationLookup.php'>Look up your reservation</a>
                                    </li>
                                    <?php
                                } else {
                                    echo "";
                                }
                            ?>
                        

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

                                <button type="button" class="nav-link" onclick="checkLogout()" type="button">Logout</a>

                            </ul>

                            <?php

                        }
                        
                        ?>
            
            </nav>

        </div>

            <?php

                include 'loginPage.php';

            ?>

        <br>
        <br>

        <div class="px-5 py-5">

            <section class="section mt-5 img-fluid text-right bg-dark" id="landingPageSection">

                <div class="d-flex justify-content-end" id="landingPage">

                    <div class="mx-3" id="landingPageText">

                        <div class="col mt-5">

                            <div class="row" >

                                <div class="opacity-75 rounded-pill text-center my-5" style="background: rgba(255,255,255,0.75);">
                            
                                    <div class="mx-4 my-5">

                                        <p class="opacity-100" style="font-size: 6vw;color: black;"><b>Making Memories</b></p>


                                        <p class="opacity-100" style="font-size: 4vw; color: black;">That will last a lifetime!</p>

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                            <!-- Testing purposes
                        <div id="currentReservations">

                        <!-- <div id="currentReservations">
                            <?php include('currentRes.php') ?>
                        </div> -->
                    </div>

                </div>

            </section>

        </div>

        <div class="pb-5 h-100 bg-dark">

            <section class="section mb-5 mt-5 text-center bg-dark h-100" id="attractions">

            <div id="attractionsSection" class="mb-5">

            <h3 id="attractionText" class="mt-5">WE SUGGEST THE FOLLOWING LOCAL ATTRACTIONS:</h3>
            <p style="color: white">(all links open in a new tab)</p>

                <div class="panelContainer bg-dark">
                    <div class="panel active" onclick="setPanel1Links()" onload="setPanel1Links()" style="background-position: center; background-image: url(attractionImages/horseArmy.jpg);">
                        <h3 id="panel1text" style="color: white"> Learn New Activities... </h3>
                    </div>

                    <div class="panel" onclick="setPanel2Links()" style="background-position: center bottom; background-image: url(attractionImages/AlaskaNorthernLights.jpg);">
                        <h3 id="panel2text"> Or Simply Go Exploring... </h3>
                    </div>

                    <div class="panel" onclick="setPanel3Links()" style="background-position: center bottom; background-image: url(attractionImages/cheers.jpg);">
                        <h3 id="panel3text"> Enjoy Local Dining, Fine or Otherwise... </h3>
                    </div>

                    <div class="panel" onclick="setPanel4Links()" style="background-position: center; background-image: url(attractionImages/alaskaNightLife.jpg);">
                        <h3 id="panel4text"> Take Part In Our Vibrant Night Life! </h3>
                    </div>

                </div>

                <div id="attractionsContainer" class="bg-dark">

                    <div  id="linkContainer" class="mb-3 mt-3 w-100 bg-dark">

                        <div class="linkItem">
                            <img id="link1Image" class="linkImage" src="attractionImages/curling.jpg">
                            <br>
                            <a id="link1" class="attractionLinks mt-2" href="https://www.viator.com/tours/Montreal/Curling-4-Ever/d625-269817P1" target="_blank"> Awesome Curling Experience! </a>
                        </div>

                        <div class="linkItem">
                            <img id="link2Image" class="linkImage" src="attractionImages/horseTours.jpg">
                            <br>
                            <a id="link2" class="attractionLinks" href="https://www.equitours.com/#" target="_blank"> Horseback Riding Tours </a>
                        </div>

                        <div class="linkItem">
                            <img id="link3Image" class="linkImage" src="attractionImages/scubaSteve.jpeg">
                            <br>
                            <a id="link3" class="attractionLinks" href="https://divealaska.net/resurrection-bay-seward-alaska/" target="_blank"> Scuba Diving</a>
                        </div>

                    </div>

                </div>

            </div>

            <script src="attractions.js"></script>
            </section>

        </div>

        <div class="px-5">

            <div class="mt-5 mb-5">

                <?php
                
                    include 'roomCarousel.php';

                ?>

            </div>

            <section class="section mt-5 text-center" id="registrationContainer">

                <div class="mt-5">

                    <h1>Book Your Vacation Today!!!</h1>

                    <form action="reservationSummary.php" method="POST" class="mt-5 mb-5" id="reservationForm">

                        <div class="d-flex flex-row gx-5">

                            <div class="p-3 d-flex flex-column mt-2 w-25">

                                <label for="roomConfig" id="resFormLabel"><b>Room Configuration:</b></label>

                                <select name="roomConfig" class="form-control">
                                    <option value="">Select room configuration:</option>
                                    <option value="1">Double Full</option>
                                    <option value="2">Queen</option>
                                    <option value="3">Double Queen</option>
                                    <option value="4">King</option>
                                </select>

                            </div>

                            <div class="p-3 d-flex flex-column mt-2 w-25">

                                <label for="checkIn" id="resFormLabel"><b>Start Date:</b></label>

                                <input type="date" name="checkIn" class="form-control">

                            </div>

                            <div class="p-3 d-flex flex-column mt-2 w-25">
                                
                                <label for="checkOut" id="resFormLabel"><b>End Date:</b></label>

                                <input type="date" name="checkOut" class="form-control">

                            </div>

                            <div class="p-3 d-flex flex-column mt-2 w-25 justify-content-end">

                                <?php
                                    if(isset($_SESSION["login"])){

                                        $_SESSION["lastLocation"] = "#registrationContainer";

                                        ?>
                                        <button class="btn btn-primary" id="reserve" type="submit" name=""reserveBtn">Reserve</button>
                                        <?php

                                    }else{

                                        ?>

                                        <a class="btn btn-primary" type="button" id="reserve" name="reserveBtn" data-bs-toggle="modal" data-bs-target="#loginForm">Log in</a>

                                        <?php

                                    }
                                ?>

                            </div>

                        </div>

                    </form>

                </div>

            </section>

        </div>

        <div class="px-5 bg-dark">

            <section class="section mt-5 text-center" id="aboutUs">

                <div class="about-us-wrap mb-5">
                
                    <div class="about-content">

                        <div class="border border-light mt-5 mb-3">

                            <h1 class="mx-3 my-4">About Us</h1>

                            <hr class="w-50 mx-auto">

                            <div class="mx-5 my-5" id="aboutBody">

                                <p>The Moffat Bay Lodge and Marina is a luxurious, 118 acre private retreat nestled on the southern shore of Joviedsa Island. The lodge overlooks the pristine beauty of the Moffat Bay which is the starting point for many vessels traveling across the seas.</p>

                                <p>The main Lodge features spacious updated rooms, as well as an indoor pool, and lounge ran by ICE certified mixologist Dwayne Denair. Laundry service is availible on weekdays. Updated rooms include kitchenettes, private bathrooms, electric fireplaces, air conditioning, hard wood floors throughout, vaulted ceilings with extravagant woodwork from local sculptors, private porch  area, 65" flat screen televisions, and fiber internet connection.</p>

                                <p>The surrounding area provides guests with the opportunity to see deer, wild turkey, beaver, ducks, red tail hawks, red tail fox, Canadian geese, American Bald Eagle, and the black-footed ferret all in thier natural habitat. All we ask is that your interactions with the native wildlife be limited to your camera shutters.</p>

                                <h2>Our History</h2>
                                <br>
                                <p>First Nations Development Committee was founded in 2020 by four friends Alexander Shegstad, Bryan Moten, Andrew McCloud, and Timmy Bell. After extreme consideration on locations the friends decided on Moffat Bay. Plans were presented and approved by the Joviedsa Island Council in 2022. Construction began in February 2023 and is nearing completion for this coming season.</p>

                            </div>

                        </div>
                            
                        <br>
                        <br>
                        <h3 class="mb-5">Click <a href="contact.php" style="text-decoration: none; visited: none" target="_blank">HERE</a> to contact the Moffat Bay Lodge team</h3>
                    </div>
                </div>    

            </section>

        </div>


                <!-- Testing Purposes
                    <a href="sessionTest.php">Testing the session variables</a> -->
        </div>

<footer class="bg-dark" style=" text-align: center; position: fixed; bottom: 0; left: 0; padding: 10px 0; font-size: 14px; width: 100%;">
    <div style="color: white; text-align: center; padding: 5px 0; font-size: 14px;">
        &copy; <span style="font-weight: bold;">Moffat Bay Lodge 2023</span>
    </div>
</footer>


    </body>

</html>
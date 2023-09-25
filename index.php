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

                                <a class="nav-link" href="logout.php" type="button">Logout</a>

                            </ul>

                            <?php

                        }
                        
                        ?>
            
            </nav>

            <script src="actions.js"></script>

        </div>

            <?php

                include 'loginPage.php';

            ?>

        <br>
        <br>

        <div class="px-5 body">

            <section class="section mt-5 text-right" id="landingPage">

                <div class="d-flex flex-column justify-content-center" id="landingPageText">

                    <h1 class="ms-auto">Making Memories</h1>
                    <h2 class="ms-auto">That will last a lifetime!</h2>

                    <div id="currentReservations">
                        <?php include('currentRes.php') ?>
                    </div>
                </div>

            </section>

            <section class="section mt-5 text-center" id="aboutUs">

                <div class="about-us-wrap">
                    <img class="about-us-bg" src="" alt="">
                
                    <div class="about-content">
                        <h1>About Us</h1>
                        <br>
                        <hr>
                        <br>
                        <h2>Our Location</h2>
                        <br>
                        <p>The Moffat Bay Lodge and Marina is a luxurious, 118 acre private retreat nestled on the southern shore of Joviedsa Island. The lodge overlooks the pristine beauty of the Moffat Bay which is the starting point for many vessels traveling across the seas.</p>

                        <p>The main Lodge features spacious updated rooms, as well as an indoor pool, and lounge ran by ICE certified mixologist Dwayne Denair. Laundry service is availible on weekdays. Updated rooms include kitchenettes, private bathrooms, electric fireplaces, air conditioning, hard wood floors throughout, vaulted ceilings with extravagant woodwork from local sculptors, private porch  area, 65" flat screen televisions, and fiber internet connection.</p>

                        <p>The surrounding area provides guests with the opportunity to see deer, wild turkey, beaver, ducks, red tail hawks, red tail fox, Canadian geese, American Bald Eagle, and the black-footed ferret all in thier natural habitat. All we ask is that your interactions with the native wildlife be limited to your camera shutters.</p>

                        <h2>Our History</h2>
                        <br>
                        <p>First Nations Development Committee was founded in 2020 by four friends Alexander Shegstad, Bryan Moten, Andrew McCloud, and Timmy Bell. After extreme consideration on locations the friends decided on Moffat Bay. Plans were presented and approved by the Joviedsa Island Council in 2022. Construction began in February 2023 and is nearing completion for this coming season.</p>
                        
                        <hr>
                        <br>
                        <br>
                        <h3>Click <a href="contact.php">HERE</a> to contact our the Moffat Bay Lodge team</h3>
                    </div>
                </div>    

            </section>

            <section class="section mt-5 text-center" id="attractions">

            <div id="attractionsSection">

            <h3 id="attractionText">WE SUGGEST THE FOLLOWING LOCAL ATTRACTIONS:</h3>

                <div class="panelContainer">
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

                <div  id="linkContainer">

                    <div class="linkItem">
                        <img id="link1Image" class="linkImage" src="attractionImages/curling.jpg"><br>
                        <a id="link1" class="attractionLinks" href="https://www.viator.com/tours/Montreal/Curling-4-Ever/d625-269817P1"> Awesome Curling Experience! </a><br>
                    </div>

                    <div class="linkItem">
                        <img id="link2Image" class="linkImage" src="attractionImages/horseTours.jpg"><br>
                        <a id="link2" class="attractionLinks" href="https://www.equitours.com/#"> Horseback Riding Tours </a><br>
                    </div>

                    <div class="linkItem">
                        <img id="link3Image" class="linkImage" src="attractionImages/scubaSteve.jpeg"><br>
                        <a id="link3" class="attractionLinks" href="https://divealaska.net/resurrection-bay-seward-alaska/"> Scuba Diving at Ressurection Bay </a><br>
                    </div>

            </div>

            <!--</div>-->

            <script src="attractions.js"></script>
            </section>


            <section class="section mt-5 text-center" id="registrationContainer">

            <h1>Book Your Vacation Today!!!</h1>

                <div class="registrationChild" id="thanks">

                </div>

                <div class="registrationChild" id="form">

                    <form action="reservationSummary.php" method="POST">
                        <select name="roomConfig">
                            <option value="">Select room configuration:</option>
                            <option value="1">Double Full</option>
                            <option value="2">Queen</option>
                            <option value="3">Double Queen</option>
                            <option value="4">King</option>
                        </select>
                        <br>
                        <br>
                        <label for="checkIn"> Start Date: </label>
                        <input type="date" name="checkIn"><br>
                        <br>
                        <label for="checkOut"> End Date: </label>
                        <input type="date" name="checkOut"><br>
                        <br>
                        <button class="btn btn-primary btn-block" id="reserve" type="submit">Reserve Now!</button>
                    </form>
                    <br>

                </div>

            </section>


                <a href="sessionTest.php">Testing the session variables</a>
        </div>

    </body>

</html>
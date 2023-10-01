<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
    / 
    Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten

    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moffat Bay Contact Us</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="box">
            <!-- Form -->
            <div class="contact form" class="mt-5">
                <h3>Send a Message</h3>
                <hr>
                <?php
                
                    $Msg = "";
                    if(isset($_GET['error']))
                    {
                        $Msg = " Please fill in all blanks on the form. ";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                    }

                    if(isset($_GET['success']))
                    {
                        $Msg = " Your message has been sent ";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';                       
                    }
                
                ?>

                <form action="sendMail.php" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input name="firstName" type="text" placeholder="John">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input name="lastName" type="text" placeholder="Doe">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input name="email" type="email" placeholder="johndoe@email.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input name="mobile" type="text" placeholder="308 308 3125">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" placeholder="Write your message here"></textarea>
                            </div>
                        </div>
                        
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="btn-send" value="Send">
                                <a href="index.php">Return to Home</a>
                            </div>
                            <a href="index.php"> Return to Home </button></a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Info Box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="pin"></ion-icon></span>
                        <p>Moffat Bay Lodge, Joviedsa Island <br>Alaska</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:got1ssei@gmail.com">Moffat Bay Team</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:13085553343">1 (308) 555-3343</a>
                    </div>
                    <!-- Social Media Links -->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- Map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d470024.05204891216!2d-149.17018759274177!3d59.87892586179545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1694201019955!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
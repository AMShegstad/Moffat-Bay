 
<!-- Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten -->

<!DOCTYPE html>

<html lang='en'>

    <head>

        <meta charset='UTF-8'>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <link rel="stylesheet" href="createAccountStyles.css">

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>

        <script src="https://kit.fontawesome.com/8d0c065460.js" crossorigin="anonymous"></script>

        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>

        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js' integrity='sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' crossorigin='anonymous'></script>

        <title>Sign Up</title>

    </head>

    <body class="bg-dark">

        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <div class="container h-100">

            <div class="row d-flex justify-content-center h-100 mt-5">

              <div class="col-lg-12 col-xl-11">

                <div class="card text-white mb-4" style="border-radius: 25px; border: 3px solid white" id="createAccountForm">
              
                  <div class="card-body p-md-5">

                    <div class="row justify-content-center">

                        <div class="col d-flex align-items-center justify-content-center" id="fishLogo">

                          <div class="row text-center">

                            <img class="img-fluid" src="images/red_fish.png">

                          </div>

                        </div>

                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                          <h1 class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4">Create An Account</h1>

                          <form class="mx-4 mx-md-4" action="/moffat-bay/process.php" method="post">

                            <div class="bg-dark py-4 px-4" id="formBackground">

                              <div class="d-flex flex-row align-items-center mb-4">

                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>

                                <div class="form-outline flex-fill mb-0">

                                  <input type="email" id="createAccountTextBox" name="emailTxt" class="form-control" placeholder="Email">

                                </div>

                                </div>

                                <div class="d-flex flex-row align-items-center mb-4 bg-dark">

                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                                <div class="form-outline flex-fill mb-0">

                                  <input type="text" id="createAccountTextBox" name="firstName" class="form-control mb-4" placeholder="First Name">

                                  <input type="text" id="createAccountTextBox" name="lastName" class="form-control" placeholder="Last Name">

                                </div>

                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">

                                  <i class="fas fa-phone fa-lg me-3 fa-fw"></i>

                                  <div class="form-outline flex-fill mb-0">

                                    <input type="text" id="createAccountTextBox" name="phoneNumber" class="form-control" placeholder="Phone">

                                  </div>

                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">

                                  <i class="fas fa-key fa-lg me-3 fa-fw"></i>

                                  <div class="form-outline flex-fill mb-0">

                                    <input type="password" id="regularPass" name="passwordTxt" class="form-control mb-4" placeholder="Password">

                                    <span>Password must have:</span>
                                    <br>
                                    <span id="pwd-length-Req">Atleast 8 Characters</span>
                                    <br>
                                    <span id="pwd-lower-Req">Atleast 1 Lower Case</span>
                                    <br>
                                    <span id="pwd-upper-Req">Atleast 1 Upper Case</span>

                                    <input type="password" id="confirmPass" name="passwordCheck" class="form-control mb-4 mt-4" placeholder="Confirm Password">

                                    <span id="passwordError"></span>

                                    <script>

                                      function checkPasswordLength() {

                                        var pWordLength = /^.{8,16}$/;
                                        var pWordUpper = /[A-Z]+/;
                                        var pWordLower = /[a-z]+/;

                                        var password = $("#regularPass").val();

                                        if (pWordLength.test(password)) {
                                            
                                          $('#pwd-length-Req').css('color','green');

                                        } else {
                                            $('#pwd-length-Req').css('color','red');

                                        }

                                        if(pWordLower.test(password)){

                                          $('#pwd-lower-Req').css('color','green');

                                          }else{

                                          $('#pwd-lower-Req').css('color','red');

                                        }

                                        if(pWordUpper.test(password)){

                                          $('#pwd-upper-Req').css('color','green');

                                          }else{

                                          $('#pwd-upper-Req').css('color','red');

                                        }
                                      }

                                      function checkPasswordMatch(){

                                        var password = $("#regularPass").val();

                                        var confirmPassword = $("#confirmPass").val();

                                        if(password != confirmPassword){

                                          $('#passwordError').html("Passwords do not match!");
                                          $('#subBtn').attr("disabled", true);

                                        }else{

                                          $('#passwordError').html("");
                                          $('#subBtn').attr("disabled", false);

                                        }

                                      }

                                      $(document).ready(function(){

                                        $("#confirmPass").keyup(checkPasswordMatch);

                                        $("#regularPass").keyup(checkPasswordLength);

                                      });

                                    </script>

                                  </div>

                                </div>

                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                                  <button type="submit" id="subBtn" class="btn btn-primary btn-lg">Submit</button>

                                </div>

                                  <div class="form-outline flex-fill mb-0 text-center">

                                      <a href="index.php" style="text-decoration: none; color: white; font-size: 24px">Return Home</a>

                                  </div>

                            </div>

                          </form>

                        </div>

                    </div>

                  </div>
              
                </div>

              </div>

            </div>

        </div>

    </body>

</html>
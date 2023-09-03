<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- The form -->
<div class="create-account-form-popup" id="createAccountForm">
  <form id="createAccountForm" action="/moffat-bay/process.php" method="post">
    <h1>Create Account</h1>

    <div class="form-outline mb-2">

      <label class="form-label" id="loginTxt" for="emailTxt"><b>Email</b></label>
      <input type="text" class="form-control" placeholder="Email.." name="emailTxt" required>

    </div>

    <div class="form-outline mb-2">

      <label class="form-label" id="loginTxt" for="first-name"><b>First Name</b></label>
      <input type="text" class="form-control" placeholder="First Name.." name="firstName" required>

    </div>

    <div class="form-outline mb-2">

      <label class="form-label" id="loginTxt" for="last-name"><b>Last Name</b></label>
      <input type="text" class="form-control" placeholder="Last Name.." name="lastName" required>

    </div>

    <div class="form-outline mb-2">

      <label class="form-label" id="loginTxt" for="phoneNumber"><b>Phone Number</b></label>
      <input type="text" class="form-control" placeholder="Phone number..." name="phoneNumber" required>

</div>


    <div class="form-outline mb-2">

      <label id="loginTxt" for="password"><b>Password</b></label>
      <input type="password" class="form-control" id="regularPass" placeholder="Password.." name="passwordTxt" required>

      <span>Password must have:</span>
      <br>
      <span id="pwd-length-Req">Atleast 8 Characters</span>
      <br>
      <span id="pwd-lower-Req">Atleast 1 Lower Case</span>
      <br>
      <span id="pwd-upper-Req">Atleast 1 Upper Case</span>

      <br>

      <label id="loginTxt" for="passwordCheck"><b>Type password again</b></label>
      <input type="password" class="form-control" id="confirmPass" placeholder="Password Again.." name="passwordCheck" required>

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
    

    <div class="text-center">

      <button class="btn btn-primary btn-block mb-4" id="subBtn" type="submit" class="btn" disabled>Create Account</button>

      <button class="btn btn-danger btn-block mb-4" id="loginTxt" type="button" class="btn cancel" onclick="closeCreateAccountForm()">Cancel</button>

    </div>

    <div class="text-center">

      <p>Actually have an account?<br> <a href="#!">Sign-In Here</a></p>

    </div>

  </form>
</div>
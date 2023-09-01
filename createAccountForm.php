<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- The form -->
<div class="create-account-form-popup" id="createAccountForm">
  <form id="createAccountForm" action="/loginActions.php" method="post">
    <h1>Create Account</h1>

    <div class="form-outline mb-4">

      <label class="form-label" id="loginTxt" for="emailTxt"><b>Email</b></label>
      <input type="text" class="form-control" placeholder="Email.." name="emailTxt" required>

    </div>

    <div class="form-outline mb-4">

      <label class="form-label" id="loginTxt" for="first-name"><b>First Name</b></label>
      <input type="text" class="form-control" placeholder="First Name.." name="firstName" required>

    </div>

    <div class="form-outline mb-4">

      <label class="form-label" id="loginTxt" for="last-name"><b>Last Name</b></label>
      <input type="text" class="form-control" placeholder="Last Name.." name="lastName" required>

    </div>

    <div class="form-outline mb-4">

      <label id="loginTxt" for="password"><b>Password</b></label>
      <input type="password" class="form-control" id="regularPass" placeholder="Password.." name="passwordTxt" required>

      <br>

      <label id="loginTxt" for="passwordCheck"><b>Type password again</b></label>
      <input type="password" class="form-control" id="confirmPass" placeholder="Password Again.." name="passwordCheck" required>

      <span id="passwordError"></span>

      <script>

        function checkPasswordMatch(){

          var password = $("#regularPass").val();

          var confirmPassword = $("#confirmPass").val();

          if(password != confirmPassword){

            $('#passwordError').html("Passwords do not match!");

          }else{

            $('#passwordError').html("");

          }

        }

        $(document).ready(function(){

          $("#confirmPass").keyup(checkPasswordMatch);

        });

      </script>

    </div>
    

    <div class="text-center">

      <button class="btn btn-primary btn-block mb-4" id="loginTxt" type="submit" class="btn">Create Account</button>

      <button class="btn btn-danger btn-block mb-4" id="loginTxt" type="button" class="btn cancel" onclick="closeCreateAccountForm()">Cancel</button>

    </div>

    <div class="text-center">

      <p>Actually have an account?<br> <a href="#!">Sign-In Here</a></p>

    </div>

  </form>
</div>
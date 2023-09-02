

<!-- The form -->
<div class="login-form-popup" id="loginForm">
  <form id="loginForm" action="/capstone_project_test/process.php" method="post">
    <h1>Login</h1>

    <div class="form-outline mb-4">

      <label class="form-label" id="loginTxt" for="userName"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Username.." name="userName" required>

    </div>

    <div class="form-outline mb-4">

      <label id="loginTxt" for="password"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Password.." name="passwordTxt" required>

    </div>

    <div class="row mb-4 text-center">

      <div class="col">

        <a href="#!">Forgot Password?</a>

      </div>

    </div>

    <div class="text-center">

      <button class="btn btn-primary btn-block mb-4" id="loginTxt" type="submit" class="btn">Login</button>

      <button class="btn btn-danger btn-block mb-4" id="loginTxt" type="button" class="btn cancel" onclick="closeLogin()">Close</button>

    </div>

    <div class="text-center">

      <p>No Account?<br> <button type="button" onclick="showCreateAccountForm()">Register Here</button></p>

    </div>

  </form>
</div>
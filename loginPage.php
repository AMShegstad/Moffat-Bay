

<!-- The form -->
<div class="form-popup" id="loginForm">
  <form action="/loginActions.php" class="form-container" method="post">
    <h1>Login</h1>

    <label id="loginTxt" for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="userName" required>

    <label id="loginTxt" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwordTxt" required>

    <button id="loginTxt" type="submit" class="btn">Login</button>
    <button id="loginTxt" type="button" class="btn cancel" onclick="closeLogin()">Close</button>
  </form>
</div>
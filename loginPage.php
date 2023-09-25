<!-- Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten -->

<div id="loginForm" class="modal fade">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                <div class="myform bg-dark">

                    <h1 class="text-center">Login Form</h1>

                    <form action="/moffat-bay/loginActions.php" method="post">

                        <div class="mb-3 mt-3">

                            <label for="email">Email Address</label>

                            <input type="email" name="emailTxt" class="form-control bg-dark" id="loginInput">

                        </div>

                        <div class="mb-3 mt-3">

                            <label for="password">Password</label>

                            <input type="password" name="passwordTxt" class="form-control">

                        </div>

                        <button type="submit" class="btn btn-light mt-3 mb-3">Login</button>

                        <p>Don't have an account? <a class="toggleFormBtn" href="/Moffat-Bay/createAccountForm.php">Sign Up Here</a></p>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


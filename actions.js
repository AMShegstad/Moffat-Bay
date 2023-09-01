function showLogin(){

    if(document.getElementById("loginForm").style.display === "block"){

        

        closeLogin();

        

    }else if(document.getElementById("createAccountForm").style.display === "block"){

        closeCreateAccountForm();

    }else{

        document.getElementById("loginForm").style.display = "block";


    }

    closeNavFromLogin();

}

function closeLogin(){

    document.getElementById("loginForm").style.display = "none";

}

function closeNavFromLogin(){

    var x =document.getElementById("navbar-items");

    if(x.className === "topbar responsive"){

        x.className = "topbar";

    }

}

function showCreateAccountForm(){

    closeLogin();

    document.getElementById("createAccountForm").style.display = "block";

}

function closeCreateAccountForm(){

    document.getElementById("createAccountForm").style.display = "none";

}

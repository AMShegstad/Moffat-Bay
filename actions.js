// Alpha Team is Alexander Shegstad, Andrew McCloud, Timmy Bell, and Bryan Moten

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

function openNavbar(){

    var x =document.getElementById("navbar-items");

    if(x.className === "topbar"){

        x.className += " responsive";

    }else{

        x.className = "topbar";

    }

}

function checkLogout(){

    var result = confirm("Are you sure you want to log out?");

    if(result){

        location.href = "logout.php";

    }else{

        location.href = "index.php";

    }

}


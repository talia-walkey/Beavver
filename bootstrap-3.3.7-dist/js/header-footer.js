//SEARCH BAR ANIMATION
$(document).ready(function(){
    $("#nav-search").click(function(){
        $("#search-box").slideToggle();
    });
});

//LOGIN NAVBAR

var beforeLogin = document.getElementById("before-login"),
    afterLogin = document.getElementById("after-login"),
    signinBtn = document.getElementById("signin-button"),
    beforeLoginName = document.getElementById("before-login-span"),
    afterLoginName = document.getElementById("after-login-span"),
    signOut = document.getElementById("signOut"),
    signupBtn = document.getElementById("signup-button");

signinBtn.addEventListener("click", function(){    
    // changing the dropdown components
    beforeLogin.style.display = "none";
    afterLogin.style.display = "block";
    
    // changing the name in the login button
    beforeLoginName.style.display = "none";
    afterLoginName.style.display = "inline-block";
    
    signupBtn.style.display = "none";
});

signOut.addEventListener("click", function(){
    loginBool = false;
    
    // changing the dropdown components
    beforeLogin.style.display = "block";
    afterLogin.style.display = "none";
    
    // changing the name in the login button
    beforeLoginName.style.display = "inline-block";
    afterLoginName.style.display = "none";
    
    signupBtn.style.display = "block";
});


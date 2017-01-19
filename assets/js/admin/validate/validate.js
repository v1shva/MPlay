function validateLoginForm(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    var n = password.length;
                
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    if(n<8){
        alert("Not a valid password");
        return false;
    }
}


function validateEmail(){
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById('email').style.borderColor = "red";
    }
    else{
        document.getElementById('email').style.borderColor = "green";
    }
}

function validatePassword(){
    var password = document.getElementById("password").value;
    if(password.length<8){
        document.getElementById("password").style.borderColor = "red";
    }
    else{
        document.getElementById("password").style.borderColor = "green";
    }
}
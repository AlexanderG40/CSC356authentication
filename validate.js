 // create a validation function for our form
 function validateForm(){
    // create shortcut/nickname to the username
    var userName = document.frmLogin.txtUserName.value;

    // create shortcut/nickname to the password
    var password = document.frmLogin.txtPassword.value;

    // create a shortcut to the message div
    var divMessage = document.getElementById("divMessage");
    

    var lblUserName = document.getElementById("lblUserName");
    var lblPassword = document.getElementById("lblPassword");

    //remove any error message
    divMessage.textContent = "";
    // this makes the code way cleaner remove yellow background
    lblUserName.style.backgroundColor = "";
    lblPassword.style.backgroundColor = "";

    if (userName == ""){
        divMessage.textContent = "User name cannot be blank!";
        lblUserName.style.backgroundColor = "green";
        return false;
    }
    else if(password.length < 7){
        divMessage.textContent = "Password cannot be blank or is too short!";
        lblPassword.style.backgroundColor = "green";
        return false;
    }
    // validation has passed, so now submit form
    return true;
}
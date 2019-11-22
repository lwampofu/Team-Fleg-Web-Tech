
//Expression to check email
var checkEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gm;


//var checkPassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/gm;

function validateEmail() {
    //get user input
    var user_email = document.getElementById("inputEmail").value;

    //validate user input
    var testEmail = checkEmail.test(user_email);

    if (testEmail) {
        alert("Email valid!");
    } else {
        alert("Invalid email address");
        return false;
    }
}


function validatePassword(){
    
    //get user password
    var password = document.getElementById("inputPassword").value;

    //validate user password to check if it fits into the regular expression
    var testpass = checkPassword.test(password);

    if(testpass){
        return true;
        //alert("Password is valid");
    }else{
        alert("Invalid Password");
        return false;
    }

}


function checkEMAIL(){
    validateEmail();
    //validatePassword();
}
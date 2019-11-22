//These are expressions that check if user input is the right format

//Expression to check email
var checkEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gm;

//Expression to check password
//at least one small letter, at least one capital, at least a digit,at least one special character.
//Password  should be at least 8 characters
var checkPassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/gm;

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

function validatePass(form) {
    //get user input
    var user_pass = document.getElementById("inputPassword").value;
    var pass_confirm = document.getElementById("inputConfirmPassword").value;

    //validate user input
    //var testPass = checkPassword.test(user_pass);

    if ( user_pass == pass_confirm) {
        //alert("Pasword valid for real!");
        return true;
    } else if (user_pass != pass_confirm) {
        alert("passwords don't match");
    } 
        else if (len(user_pass<6)){
            alert("password must be 6 characters or more");
        }

    else {
        alert("Error: Your password must include at least one of each of the following:\n1. small letter\n 2. uppercase letter\n 3. digit \n4. special character (e.g %*&)\n 5. must be atleast 8 characters long ");
        return false;
    }
}



function phoneNumber(){

      var pnum = document.getElementById("inputLastName").value;
      var testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(pnum)){
        alert("Enter a valid phone number");
         //action="https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec"
        return false;
      }
      //else if()
      else {
        //alert("input should be a text");
        return true;
        //break;

      }

}

function homeAddress(){

    var haddress = document.getElementById("inputLastName").value;
      var testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(haddress)){
        alert("Enter a valid phone number");
         //action="https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec"
        return false;
      }
      //else if()
      else {
        //alert("input should be a text");
        return true;
        //break;

      }
}

function validate() {
    validateEmail();
    validatePass();
    
}
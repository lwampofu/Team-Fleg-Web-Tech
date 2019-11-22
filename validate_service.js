//alert("here");
function  validateForm(){
    /*validate first name, last name, password, email*/
     var name = document.getElementById("inputFirstname").value;
      var testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(name)){
        alert("Enter only characters");
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

function validateLName(){

      var lname = document.getElementById("inputLastname").value;
      var testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(lname)){
        alert("Enter only characters");
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

function validateEmail() {

	var checkEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gm;
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
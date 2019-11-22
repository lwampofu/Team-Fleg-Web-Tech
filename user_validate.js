
function  validateForm(){
	/*validate first name, last name, password, email*/
	 var name = document.getElementById("inputUserame").value;
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

      var lname = document.getElementById("inputLastName").value;
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
function validatePass(){
	var lname = document.getElementById("inputLastName").value;
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
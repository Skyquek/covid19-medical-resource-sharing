var password = document.getElementById("psw");
var remPassword = document.getElementById("psw-repeat");
var errorBox = document.getElementById("error-box");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// Variable Checking
var lowerCaseLetters = /[a-z]/g;
var upperCaseLetters = /[A-Z]/g;
var numbers = /[0-9]/g;

// When the user clicks on the password field, show the message box
password.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
password.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
password.onkeyup = function() {
  // Validate lowercase letters
  if(password.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  if(password.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  if(password.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(password.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function registerValidation() 
{
  errorBox.style.display = "none";

  // Check if password is strong enough
  if(password.value.match(lowerCaseLetters) && password.value.match(upperCaseLetters) && password.value.match(numbers) && password.value.length >= 8)
  {
    // Check if the remember password match the password fields
    if(password.value == remPassword.value)
    {
      // Check other field is empty
      

      // Debugging
      return false;
    }
    else
    {
      errorBox.innerHTML = "<i class='fa fa-times'></i>" + " Confirm Password not match.";
      errorBox.style.display = "block";

      return false;
    }
  }
  else
  {
    errorBox.innerHTML = "<i class='fa fa-times'></i>" + " Password not secure enough.";
    errorBox.style.display = "block";

    return false;
  }
}
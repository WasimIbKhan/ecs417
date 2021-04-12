function validateForm() {
  var emailInput = document.getElementById("email").value;
  var passwordInput = document.getElementById("password").value;
  if(emailInput === "") {
    emailInput.style.backgroundColor = "pink";
    return false;
  } 
  if(passwordInput === "") {
    emailInput.style.backgroundColor = "pink";
    return false;
  }
  
  return true;
}

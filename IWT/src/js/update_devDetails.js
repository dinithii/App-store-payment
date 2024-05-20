function validateForm(event) {
    event.preventDefault(); //prevent the form from submitting

var name = document.getElementById("name").value;
var email= document.getElementById("email").value;
var bday = document.getElementById("bday").value;
var address = document.getElementById("address").value;
var phone = document.getElementById("phone").value;

//Validate name
  name = name.trim();
  var nameRegex = /^[A-Za-z]+(?:[-\s][A-Za-z]+)*$/;
  if (!nameRegex.test(name)) {
    alert("Invalid name. Enter the valid name");
    return false;
  }

//validate email
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

//validate date of birth
    if (bday.trim() === "") {
        alert("Please enter your date of birth.");
        return false;
      }


//validate address
    if (address.trim() === "") {
            alert("Please enter your address.");
            return false;
          }

//validate phone number 
  var phonePattern = /^\d{10}$/;
  if (!phonePattern.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    return false;
  }


  // If all validations pass, submit the form
  
  document.getElementById("upForm").submit();
}
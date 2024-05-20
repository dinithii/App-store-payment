function validateForm(event) {
    event.preventDefault(); //prevent the form from submitting

var cardNumber = document.getElementById("cNumber").value;
var name= document.getElementById("cname").value;
var expirationDate = document.getElementById("expDate").value;
var cvv = document.getElementById("cvv").value;

  if (cardNumber.length !== 16) {
    alert("Invalid card number. Please enter a 16-digit card number.");
    return;
  }

  // Validate expiration date (example: MM/YY format)
  var expirationRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
  if (!expirationRegex.test(expirationDate)) {
    alert("Invalid expiration date. Please enter a valid date in the MM/YY format.");
    return;
  }

  // Validate CVV (example: 3 digits)
  if (cvv.length !== 3) {
    alert("Invalid CVV. Please enter a 3-digit CVV number.");
    return;
  }

  //Validate name
  name = name.trim();
  var nameRegex = /^[A-Za-z]+(?:[-\s][A-Za-z]+)*$/;
  if (!nameRegex.test(name)) {
    alert("Invalid name. Enter the valid name");
    return false;
  }

  // If all validations pass, submit the form
  document.getElementById("paymentForm").submit();
}
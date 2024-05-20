document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var firstName = document.getElementById("fname").value;
    var email= document.getElementById("email").value;
    var birthDate = document.getElementById("bday").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("contact").value;
  
    // Validate name
    if (firstName.trim() === "") {
      alert("Name must be filled out");
      return;
    }
    if (lastName.trim() === "") {
        alert("Name must be filled out");
        return;
    }
  
    // Validate email
    var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!emailRegex.test(email)) {
      alert("Invalid email address");
      return;
    }

    var birthDateRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
  if (!birthDateRegex.test(birthDate)) {
    alert("Invalid expiration date. Please enter a valid date in the MM/YY format.");
    return;
   }

    if (address.trim() === "") {
        alert("Address must be filled out");
        return;
    }

    var phoneRegex = /^\d{10}$/;
    if (phoneRegex.test(phone)) {
    return true; // Valid phone number format
    } 
    else {
        return false; // Invalid phone number format
      }
    // If all validations pass, update the form data
    // Call a function here to perform the update operation
    updateFormData(firstName, lastName, email, birthDate, address1, address2, city, phone);
  });

  function updateFormData(firstName, lastName, email, birthDate, address1, address2, city, phone) {

    console.log("Name: " + firstName);
    console.log("Name: " + lastName);
    console.log("Email: " + email);
    console.log("Date of Birth: " + birthDate);
    console.log("Address: " + address);
    console.log("Contact No: " + phone);
  
    // Optionally, you can reset the form after successful update
    document.getElementById("myForm").reset();
  }
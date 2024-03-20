function validateForm() {
    var age = document.getElementById('age').value;
    var dob = document.getElementById('dob').value;
    var contact = document.getElementById('contact').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Age validation
    if (age <= 0) {
      alert("Age must be a positive number.");
      return false;
    }
  
    // Date of birth validation (optional)
    // You can add more specific validation rules based on your requirements
  
    // Contact information validation
    // You can add more specific validation rules based on your requirements
  
    // Username validation
    if (username.length < 6) {
      alert("Username must be at least 6 characters long.");
      return false;
    }
  
    // Password validation
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
    }
    // Password strength validation
  var uppercaseRegex = /[A-Z]/;
  var lowercaseRegex = /[a-z]/;
  var numericRegex = /[0-9]/;
  var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

  var hasUppercase = uppercaseRegex.test(password);
  var hasLowercase = lowercaseRegex.test(password);
  var hasNumeric = numericRegex.test(password);
  var hasSpecialChar = specialCharRegex.test(password);

  if (!(hasUppercase && hasLowercase && hasNumeric && hasSpecialChar)) {
    alert("Password must contain at least one uppercase letter, one lowercase letter, one numeric digit, and one special character.");
    return false;
  }

  
    // You can add more password strength checks or requirements here
  
    return true; // Form submission will proceed if all validations pass
  }
function validateForm() {
    var password = document.getElementById('password').value;
    var passwordStrength = document.getElementById('password-strength');
    
    // Regular expressions for password strength check
    var uppercaseRegex = /[A-Z]/;
    var lowercaseRegex = /[a-z]/;
    var numericRegex = /[0-9]/;
    var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    
    // Check for uppercase, lowercase, numeric, and special character requirements
    var isUppercase = uppercaseRegex.test(password);
    var isLowercase = lowercaseRegex.test(password);
    var isNumeric = numericRegex.test(password);
    var isSpecialChar = specialCharRegex.test(password);
    
    // Calculate password strength
    var strength = 0;
    if (isUppercase) strength++;
    if (isLowercase) strength++;
    if (isNumeric) strength++;
    if (isSpecialChar) strength++;
    
    // Display password strength
    if (password.length >= 8 && strength >= 3) {
      passwordStrength.innerHTML = 'Strong';
      passwordStrength.style.color = 'green';
      return true;
    } else {
      passwordStrength.innerHTML = 'Weak - Password must be at least 8 characters long and contain at least 3 of the following: uppercase letter, lowercase letter, number, special character';
      passwordStrength.style.color = 'red';
      return false;
    }
  }
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        
        // Loop over them and prevent submission if they are invalid
        Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                // Check if the form is valid
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// document.getElementById('SignInForm').addEventListener('submit', function(e) {
//     e.preventDefault();

//     // Fixed username and password
//     const fixedEmail = 'user@gmail.com'; 
//     const fixedPassword = 'user'; 

//     // Get input values
//     const email = document.getElementById('email').value;
//     const password = document.getElementById('password').value;

//     // Error message element
//     const errorMessage = document.getElementById('error-message');

//     // Check if the entered email and password match the fixed values
//     if (email === fixedEmail && password === fixedPassword) {
//         alert('Login successful!');
//         errorMessage.textContent = '';  // Clear any error message
//         // You can redirect to another page here if needed
//         // window.location.href = 'dashboard.html';
//     } else {
//         errorMessage.textContent = 'Invalid email or password. Please try again.';
//     }
// });
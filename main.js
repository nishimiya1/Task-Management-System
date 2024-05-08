document.addEventListener('DOMContentLoaded', function () {
    // Your JavaScript code here
    document.querySelector('.show-password').addEventListener('click', function () {
        togglePasswordVisibility();
        this.classList.toggle('show-passwordIcon'); // Toggle the 'show-passwordIcon' class
        toggleSvgColor();
    });
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('Password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
    function toggleSvgColor() {
        const svg = document.querySelector('.show-password svg');
        svg.classList.toggle('show-passwordIcon'); // Toggle the 'show-passwordIcon' class
    }


});

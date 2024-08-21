document.getElementById('loginForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorElement = document.getElementById('loginError');

    if (username.trim() === '' || password.trim() === '') {
        event.preventDefault();
        errorElement.textContent = 'Username and password are required.';
        return false;
    }

    // You can add more complex validation here if needed

    return true;
});

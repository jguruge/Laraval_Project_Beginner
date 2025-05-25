<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 22px); /* Account for padding and border */
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
    transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Added transition */
}

/* Added focus style for input fields */
input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: background-color 0.3s ease; /* Added transition */
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.login-container div a {
    color: #007bff;
    text-decoration: none;
    display: block;
    margin-top: 10px;
    font-size: 14px;
}

.login-container div a:hover {
    text-decoration: underline;
}

/* Keyframes for fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Apply animation to login container */
.login-container {
    /* ... existing styles ... */
    animation: fadeIn 0.5s ease-out;
}

/* Responsive adjustments */
@media (max-width: 480px) {
    .login-container {
        margin: 20px;
        padding: 15px;
    }

    input[type="text"],
    input[type="password"] {
        font-size: 16px; /* Increase font size for better readability on small devices */
    }

    button[type="submit"] {
        padding: 12px; /* Slightly larger tap target */
    }
}
</style>
<body>
    <div class= "login-container">
        <form action="/login" method="post">
            <div>
                <label for="username">Username/Email:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        <div>
            <a href="/forgot-password">Forgot Password?</a>
        </div>
        <div>
            <a href="/create-account">Create Account</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form[action="/login"]');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    if (loginForm && usernameInput && passwordInput) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const usernameValue = usernameInput.value.trim();
            const passwordValue = passwordInput.value.trim();

            if (usernameValue === '') {
                alert('Username/Email cannot be empty.');
                usernameInput.focus(); // Optional: focus on the empty field
                return;
            }

            if (passwordValue === '') {
                alert('Password cannot be empty.');
                passwordInput.focus(); // Optional: focus on the empty field
                return;
            }

            // If both fields are filled
            console.log('Form submitted');
            alert('Login successful (simulation)');
            // Here you would typically send the data to a server
            // For example:
            // fetch('/login', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify({ username: usernameValue, password: passwordValue }),
            // })
            // .then(response => response.json())
            // .then(data => console.log(data))
            // .catch((error) => console.error('Error:', error));
        });
    } else {
        console.error('Could not find one or more required elements: login form, username input, or password input.');
    }
});

    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <div class="container">
        <div>
            <div class="form-container">
                <div class="home-form">
                    <a aria-current="page" href="/" class="login-form login-decoration">Login</a>
                    <a href="/signup.php" class="signup-form">Register</a>
                </div>
                <form method="post" action="/account/login" class="form-class">
                    <div class="login">
                        <input class="user-input" type="email" id="email" name="email" autocomplete="email"
                            placeholder="Email Address*" required aria-label="Email Address" enterkeyhint="next">
                        <label for="email" class="user-label"></label>
                    </div>
                    <div>
                        <div class="login">
                            <input class="user-input" type="password" id="password" name="password"
                                autocomplete="current-password" placeholder="Password*" required aria-label="Password*"
                                minlength="8">
                            <label for="password" class="user-label password-label"></label>
                            <button class="login-form show-password" type="button" aria-label="Show Password">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1718_108214)">
                                        <circle cx="7.50465" cy="7.50001" r="1.95353" stroke="black"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.00485823 7.51068C0.664199 8.97078 3.0477 11.6962 7.50461 11.6962C11.9615 11.6962 14.345 8.97078 15.0044 7.51068L15.0123 7.50714C15.0113 7.50477 15.0102 7.50239 15.0092 7.50002C15.0102 7.49764 15.0113 7.49527 15.0123 7.49291L15.0044 7.48936C14.345 6.02926 11.9615 3.30386 7.50461 3.30386C3.0477 3.30386 0.664199 6.02926 0.00485822 7.48936L-0.00311279 7.49291C-0.00205861 7.49527 -0.000999836 7.49764 6.35399e-05 7.50002C-0.000999836 7.5024 -0.00205861 7.50477 -0.00311279 7.50714L0.00485823 7.51068ZM1.13106 7.50002C1.88984 8.73835 3.91544 10.6962 7.50461 10.6962C11.0938 10.6962 13.1194 8.73835 13.8782 7.50002C13.1194 6.26169 11.0938 4.30386 7.50461 4.30386C3.91544 4.30386 1.88984 6.26169 1.13106 7.50002Z"
                                            fill="black"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1718_108214">
                                            <rect width="15" height="15" fill="white" transform="translate(0.00375366)">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="login-form submit-button submit-display" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
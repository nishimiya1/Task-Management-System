<?php

include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Extract form data
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $FullName = $_POST['FullName'];
    $DepartmentID = $_POST['DepartmentID'];
    $RoleID = $_POST['RoleID'];

    // Prepare SQL statement to insert data into Users table
    $insert_user_stmt = $conn->prepare("INSERT INTO Users (Username, Password, Email, FullName, DepartmentID, RoleID) VALUES (?, ?, ?, ?, ?, ?)");
    $insert_user_stmt->bind_param("ssssii", $Username, $Password, $Email, $FullName, $DepartmentID, $RoleID);

    // Execute SQL statement
    if ($insert_user_stmt->execute()) {
        echo "Form data successfully submitted!";
    } else {
        echo "Error: " . $insert_user_stmt->error;
    }

    // Close statement
    $insert_user_stmt->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="main.css" />

</head>

<body class="register">
    <div class="container">
        <div>
            <div class="form-container">
                <div class="home-form">

                    <a href="index.php" class="login-form">Login</a>

                    <a href="signupPage.php" class="login-form login-decoration">Register</a>
                </div>
                <form id="signupForm" method="POST" novalidate class="form-class">
                    <div class="login">
                        <input type="Username" class="user-input" id="Username" name="Username" autocomplete="Username"
                            required minlength="3" placeholder="" aria-label="User Name">
                        <label for="Username" class="user-label">User Name*</label>
                    </div>
                    <div class="login">
                        <input type="Password" class="user-input" id="Password" name="Password"
                            autocomplete="current-password" required minlength="8" placeholder=""
                            aria-label="Password*">
                        <label for="Password" class="user-label password-label">Password*</label>
                        <button class="login-form show-password" type="button" aria-label="Show password">
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
                    <div class="login">
                        <input type="Email" class="user-input" id="Email" name="Email" autocomplete="Email"
                            placeholder="" aria-label="Email Address*">
                        <label for="Email" class="user-label">Email Address*</label>
                    </div>
                    <div class="login">
                        <input type="FullName" class="user-input" id="FullName" name="FullName" placeholder=""
                            aria-label="Full Name*">
                        <label for="FullName" class="user-label">Full Name*</label>
                    </div>
                    <div class="login">
                        <label for="DepartmentID" class="select-label">Department*</label>
                        <select class="form-select" id="DepartmentID" name="DepartmentID">
                            <option value="1">IT</option>
                            <option value="2">Marketing</option>
                            <option value="3">HR</option>
                        </select>
                    </div>
                    <div class="login">
                        <label for="RoleID" class="select-label">Role*</label>
                        <select class="form-select" id="RoleID" name="RoleID">


                        </select>
                    </div>
                    <button type="submit" class="login-form submit-button submit-display">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
    <script src="register.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
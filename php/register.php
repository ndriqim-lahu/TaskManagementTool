<?php
    session_start();
    require_once "./util.php";

    // check user if logged-in and then redirect to tasklist.php
    if (isUserLoggedIn()) {
        header("Location: ./tasklist.php");
        die();
    }
?>
<html>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Task Management Tool" />
    <meta name="author" content="Ndriçim Lahu" />

    <title>Task Management Tool | Register</title>

    <!-- Favicons -->
    <link href="../assets/favicon/android-chrome-192x192.png" rel="android-chrome-icon" />
    <link href="../assets/favicon/android-chrome-512x512.png" rel="android-chrome-icon" />
    <link href="../assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="../assets/favicon/favicon-16x16.png" rel="icon" />
    <link href="../assets/favicon/favicon-32x32.png" rel="icon" />
    <link href="../assets/favicon/favicon.ico" rel="icon" />

    <!-- Icon Pack -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Font Pack -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <center>
        <br><br>
        <p><b>Task Management Tool - REGISTER</b></p>
        <br><br>
        <form method="POST" action="./register_api.php" onsubmit="return validatePassword();">
            <label>Full Name:</label><br>
            <input id="register_fullname" type="text" name="full_name" required /><br><br>
            <label>Email:</label><br>
            <input id="register_email" type="email" name="email" required /><br><br>
            <label>Password:</label><br>
            <input id="register_password" type="password" name="password" /><br><br>
            <input type="submit" value="Register" />
        </form>
        <br>
        <a href="./login.php">Login</a> if you already have an account!
    </center>
</body>
<script>
    function validatePassword() {
        var password = document.getElementById("register_password").value;

        // check empty password of field
        if (password == "") {
            alert("Fill the password please!");
            return false;
        }

        // check minimum length of password validation
        if (password.length < 8) {
            alert("Password length must be atleast 8 characters!");
            return false;
        }

        // check maximum length of password validation
        if (password.length > 16) {
            alert("Password length must not exceed 16 characters!");
            return false;
        }

        // check uppercase of password validation
        if (password.search(/[A-Z]/i) < 0) {
            alert("Password must have atleast one uppercase!");
            return false;
        }

        // check lowercase of password validation
        if (password.search(/[a-z]/i) < 0) {
            alert("Password must have atleast one lowercase!");
            return false;
        }

        // check number of password validation
        if (password.search(/[0-9]/) < 0) {
            alert("Password must have atleast one digit number!");
            return false;
        }

        // check special characters of password validation
        if (password.search(/[!@#$%^&*]/) < 0) {
            alert("Password must have atleast one special character!");
            return false;
        }
    }
</script>

</html>
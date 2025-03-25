<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $role = 'user'; // Default role

    $user_data = 'uname='. $uname. '&name='. $name;

    if (empty($uname)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re-enter Password is required&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=Passwords do not match&$user_data");
        exit();
    } else {
        // Hash the password securely
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Check if username already exists
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            die("SQL Error: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is already taken, try another&$user_data");
            exit();
        } else {
            // Insert new user into the database with the default role
            $sql2 = "INSERT INTO users (username, password, name, role) VALUES (?, ?, ?, ?)";
            $stmt2 = mysqli_prepare($conn, $sql2);

            if (!$stmt2) {
                die("SQL Error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt2, "ssss", $uname, $hashed_pass, $name, $role);
            $result2 = mysqli_stmt_execute($stmt2);

            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}

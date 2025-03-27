<?php
session_start();
include "../db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize inputs
    function test_input($data) {
        return trim(stripslashes(htmlspecialchars($data)));
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    // Input validation
    if (empty($username)) {
        header("Location: ../login.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: ../login.php?error=Password is required");
        exit();
    }

    // Query the users table
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    if (!$stmt) {
        header("Location: ../login.php?error=Database error");
        exit();
    }
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Use password_verify for bcrypt hashes
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['username'];

            // Redirect based on role
            switch ($user['role']) {
                case 'admin':
                    header("Location: ../admin/index.php");
                    break;
                case 'waiter':
                    header("Location: ../waiter/index.php");
                    break;
                case 'cashier':
                    header("Location: ../cashier/index.php");
                    break;
                case 'kitchen':
                    header("Location: ../kitchen/index.php");
                    break;
                default:
                    header("Location: ../index.php"); // Default for general users
                    break;
            }
            exit();
        }
    }

    // If login fails
    header("Location: ../login.php?error=Invalid username or password");
    exit();
} else {
    header("Location: ../login.php");
    exit();
}
?>
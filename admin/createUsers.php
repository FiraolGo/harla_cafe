<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session to pass variables back to form
session_start();

// Include database connection
require_once '../db_conn.php';

// Initialize variables
$errors = [];
$success = false;

// Store form data to repopulate the form
$formData = [
    'role' => $_POST['country'] ?? '',
    'username' => $_POST['username'] ?? '',
    'name' => $_POST['fullname'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'email' => $_POST['email'] ?? '',
    'gender' => ''
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    foreach ($formData as $key => $value) {
        if ($key !== 'gender') {
            $formData[$key] = mysqli_real_escape_string($conn, $value);
        }
    }
    
    // Handle gender mapping
    $genderInput = $_POST['fav_language'] ?? '';
    $formData['gender'] = ($genderInput === 'HTML') ? 'Male' : 
                         (($genderInput === 'CSS') ? 'Female' : 'Unknown');
    
    // Get passwords
    $password = $_POST['Password'] ?? '';
    $confirm_password = $_POST['Confirm'] ?? '';
    
    // Validate inputs
    if (empty($formData['role'])) $errors[] = "Role is required";
    if (empty($formData['username'])) $errors[] = "Username is required";
    if (strlen($formData['username']) < 4) $errors[] = "Username must be at least 4 characters";
    if (empty($password)) $errors[] = "Password is required";
    if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters";
    if ($password !== $confirm_password) $errors[] = "Passwords do not match";
    if (empty($formData['name'])) $errors[] = "Full name is required";
    if (empty($formData['phone'])) $errors[] = "Phone number is required";
    if (!preg_match('/^[0-9]{10,15}$/', $formData['phone'])) $errors[] = "Invalid phone number format";
    if (empty($formData['email'])) $errors[] = "Email is required";
    if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    
    // If no errors, proceed with database insertion
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (role, username, password, name, phone, email, gender) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", 
                $formData['role'], 
                $formData['username'], 
                $hashed_password, 
                $formData['name'], 
                $formData['phone'], 
                $formData['email'], 
                $formData['gender']);
            
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['alert_message'] = "User created successfully!";
            } else {
                $errors[] = "Database error: " . mysqli_error($conn);
            }
            
            mysqli_stmt_close($stmt);
        } else {
            $errors[] = "Database preparation error: " . mysqli_error($conn);
        }
    }
    
    // Store data in session
    $_SESSION['errors'] = $errors;
    $_SESSION['formData'] = $formData;
    
    // Close connection and redirect
    mysqli_close($conn);
    
    header("Location: create.php");
    exit();
}
?>
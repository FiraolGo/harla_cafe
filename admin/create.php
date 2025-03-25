<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session to get form data
session_start();

// Get errors, form data, and success status
$errors = $_SESSION['errors'] ?? [];
$formData = $_SESSION['formData'] ?? [];
$alertMessage = $_SESSION['alert_message'] ?? '';

// Clear the session data
unset($_SESSION['errors']);
unset($_SESSION['formData']);
unset($_SESSION['alert_message']);
?>

<div class="form-container">
    <h3>Add New Users</h3>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?= htmlspecialchars($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form id="user-create-form" method="post" action="createUsers.php">
        <label for="country">Role</label>
        <select id="country" name="country" required>
            <option value="waiter" <?= ($formData['role'] ?? '') === 'waiter' ? 'selected' : '' ?>>Waiter</option>
            <option value="cashier" <?= ($formData['role'] ?? '') === 'cashier' ? 'selected' : '' ?>>Cashier</option>
            <option value="kitchen" <?= ($formData['role'] ?? '') === 'kitchen' ? 'selected' : '' ?>>Kitchen</option>
        </select>
     
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Enter Your Full name.." 
               value="<?= htmlspecialchars($formData['name'] ?? '') ?>" >

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username.." 
               value="<?= htmlspecialchars($formData['username'] ?? '') ?>" >

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email.." 
               value="<?= htmlspecialchars($formData['email'] ?? '') ?>" >

        <label for="password">Password</label>
        <input type="password" id="password" name="Password" placeholder="Password..">

        <label for="Confirm">Confirm Password</label>
        <input type="password" id="Confirm" name="Confirm" placeholder="Confirm Password.." >

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Enter Phone.." 
               value="<?= htmlspecialchars($formData['phone'] ?? '') ?>" >

        <p>Gender:</p>
        <input type="radio" id="male" name="fav_language" value="HTML" 
               <?= ($formData['gender'] ?? '') === 'Male' ? 'checked' : '' ?> >
        <label for="male">Male</label>
        <input type="radio" id="female" name="fav_language" value="CSS" 
               <?= ($formData['gender'] ?? '') === 'Female' ? 'checked' : '' ?>>
        <label for="female">Female</label><br>
        
        <input type="submit" value="Submit">
    </form>
</div>

<?php if (!empty($alertMessage)): ?>
    <script>
        window.onload = function() {
            alert("<?= addslashes($alertMessage) ?>");
        };
    </script>
<?php endif; ?>

<style>
    .form-container input[type=text], 
    .form-container input[type=password], 
    .form-container select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-container input[type=submit] {
      width: 10%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-container input[type=submit]:hover {
      background-color: #45a049;
    }

    .form-container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    
    .form-container .error {
        color: red;
        margin-bottom: 10px;
    }
</style>
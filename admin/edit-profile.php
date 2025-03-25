<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h4 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-submit {
            width: 100%;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .password-strength {
            font-weight: bold;
            padding: 5px;
            margin-top: 5px;
            border-radius: 5px;
            text-align: center;
        }
        #avatar-preview {
            display: block;
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="container">
    <h4>Edit Profile</h4>
    <form action="process-edit-profile.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name *</label>
            <input type="text" class="form-control" id="firstName" name="firstName"  required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name *</label>
            <input type="text" class="form-control" id="lastName" name="lastName"  required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username *</label>
            <input type="text" class="form-control" id="username" name="username"  readonly>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Image</label>
            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
            <img id="avatar-preview" src="default-avatar.png" alt="Avatar Preview">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control" id="email" name="email"  required>
        </div>
   
        <div class="mb-3">
            <label for="password" class="form-label">Password *</label>
            <input type="password" class="form-control" id="password" name="password" required>
          
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password *</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
        </div>
        
        <button type="submit" class="btn btn-submit">Update Profile</button>
    </form>
</div>



</body>
</html>

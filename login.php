
<!DOCTYPE html>
<html>
<head>
    <title>Multi-User Role-Based Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        /* Style for the error alert */
        .error-alert {
            position: relative; /* Keep it in the flow of the document */
            margin-top: 10px; /* Space above the form */
            width: 100%; /* Match the form width */
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb; /* Main border */
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            opacity: 1;
            transition: all 0.3s ease-in-out, border-bottom-width 0.3s ease-in-out;
        }

        /* Animation for decreasing bottom border */
        .error-alert.hide {
            opacity: 0;
            border-bottom-width: 0; /* Decrease the bottom border */
            padding: 0; /* Reduce padding */
            height: 0; /* Collapse the height */
            margin-bottom: 0; /* Remove spacing */
        }
        .loginbox{
            background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(./img/bg-hero.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form label,form h1{
            color: white;
            font-weight: 800;
        }
        .container{
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="loginbox">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class=" shadow p-3 rounded" action="./php/check-login.php" method="post" style="width: 450px; border: 1px solid rgb(0, 195, 230); background: linear-gradient(rgba(25, 40, 73, 0.9), rgba(7, 14, 32, 0.9));">
            <h1 class="text-center p-3">LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <!-- Display the error alert -->
                <div id="errorAlert" class="error-alert">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
                <script>
                    // JavaScript to hide the alert after 3 seconds with animation
                    setTimeout(function () {
                        const alertElement = document.getElementById('errorAlert');
                        alertElement.classList.add('hide'); // Add the 'hide' class for animation
                        setTimeout(function () {
                            alertElement.style.display = 'none'; // Remove the element after animation
                        }, 300); // Wait for the animation to complete
                    }, 3000); // Hide after 3 seconds
                </script>
            <?php } ?>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a href="index.php">Back Home</a>
        </form>
    </div>
    </div>
</body>
</html>

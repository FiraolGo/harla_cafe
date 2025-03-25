<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: 600;
        }
        .btn-success {
            width: 100%;
            border-radius: 5px;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card p-4">
            <h4 class="mb-3 text-center">Please Fill All Fields</h4>
            <form action="add-customer.php" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Customer Name</label>
                        <input type="text" name="customer_name" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Customer Phone Number</label>
                        <input type="tel" name="customer_phone" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Customer Email</label>
                        <input type="email" name="customer_email" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Customer Password</label>
                        <input type="password" name="customer_password" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Customer</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

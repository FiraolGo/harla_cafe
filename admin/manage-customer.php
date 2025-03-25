<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 40px;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn-add {
            margin-bottom: 15px;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .btn-update {
            background-color: #007bff;
            color: white;
        }
        .btn-update:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="add-customer.php" class="btn btn-success btn-add">
            <i class="fas fa-user-plus"></i> Add New Customer
        </a>
        <div class="card p-3 shadow">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>FULL NAME</th>
                        <th>CONTACT NUMBER</th>
                        <th>EMAIL</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">Zoha gul</a></td>
                        <td>565655556565</td>
                        <td>admin@mail.com</td>
                        <td>
                            <button class="btn btn-delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            <button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>2145896547</td>
                        <td>janed@mail.com</td>
                        <td>
                            <button class="btn btn-delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            <button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Brian S. Boucher</td>
                        <td>1020302055</td>
                        <td>brians@mail.com</td>
                        <td>
                            <button class="btn btn-delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            <button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Melody E. Hance</td>
                        <td>3210145550</td>
                        <td>melody@mail.com</td>
                        <td>
                            <button class="btn btn-delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            <button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Trina L. Crowder</td>
                        <td>5896321002</td>
                        <td>trina@mail.com</td>
                        <td>
                            <button class="btn btn-delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            <button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

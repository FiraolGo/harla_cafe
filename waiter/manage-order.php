<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn-action {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin: 2px;
        }
        .btn-print {
            background-color: orange;
        }
        .btn-edit {
            background-color: blue;
        }
        .btn-delete {
            background-color: red;
        }
        .badge-paid {
            background-color: green;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .badge-not-paid {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Manage Orders</h2>
            <a href="add-order.php" class="btn btn-success"><i class="fa fa-plus"></i> Add Order</a>
        </div>

        <table id="ordersTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Bill no</th>
                    <th>Date Time</th>
                    <th>Total Products</th>
                    <th>Total Amount</th>
                    <th>Paid status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CDSTRO-0E73</td>
                    <td>25-05-2021 07:18 pm</td>
                    <td>1</td>
                    <td>11.43</td>
                    <td><span class="badge-paid">Paid</span></td>
                    <td>
                        <button class="btn-action btn-print"><i class="fa fa-print"></i></button>
                        <button class="btn-action btn-edit"><i class="fa fa-pen"></i></button>
                        <button class="btn-action btn-delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>CDSTRO-B82C</td>
                    <td>25-05-2021 07:14 pm</td>
                    <td>7</td>
                    <td>50.43</td>
                    <td><span class="badge-paid">Paid</span></td>
                    <td>
                        <button class="btn-action btn-print"><i class="fa fa-print"></i></button>
                        <button class="btn-action btn-edit"><i class="fa fa-pen"></i></button>
                        <button class="btn-action btn-delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>CDSTRO-9507</td>
                    <td>25-05-2021 06:35 pm</td>
                    <td>2</td>
                    <td>22.03</td>
                    <td><span class="badge-paid">Paid</span></td>
                    <td>
                        <button class="btn-action btn-print"><i class="fa fa-print"></i></button>
                        <button class="btn-action btn-edit"><i class="fa fa-pen"></i></button>
                        <button class="btn-action btn-delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>CDSTRO-8C40</td>
                    <td>25-05-2021 06:00 pm</td>
                    <td>4</td>
                    <td>41.27</td>
                    <td><span class="badge-paid">Paid</span></td>
                    <td>
                        <button class="btn-action btn-print"><i class="fa fa-print"></i></button>
                        <button class="btn-action btn-edit"><i class="fa fa-pen"></i></button>
                        <button class="btn-action btn-delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>CDSTRO-D1E6</td>
                    <td>25-05-2021 05:01 pm</td>
                    <td>3</td>
                    <td>34.55</td>
                    <td><span class="badge-not-paid">Not Paid</span></td>
                    <td>
                        <button class="btn-action btn-print"><i class="fa fa-print"></i></button>
                        <button class="btn-action btn-edit"><i class="fa fa-pen"></i></button>
                        <button class="btn-action btn-delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#ordersTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthMenu": [10, 25, 50, 100]
            });
        });

        // Delete Confirmation
        $(".btn-delete").on("click", function () {
            if (!confirm("Are you sure you want to delete this order?")) {
                return false;
            }
        });

        // Print Bill Action
        $(".btn-print").on("click", function () {
            alert("Printing Bill...");
        });

        // Edit Action
        $(".btn-edit").on("click", function () {
            alert("Editing Order...");
        });
    </script>

</body>
</html>

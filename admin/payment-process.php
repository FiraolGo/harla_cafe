<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process</title>
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }
        h2 {
            color: #343a40;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            background-color: #007bff;
            color: #ffffff;
            border-bottom: 2px solid #0056b3;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Payment Process</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>CODE</th>
                    <th>CUSTOMER</th>
                    <th>PRODUCT</th>
                    <th>TOTAL PRICE</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MKPV-5167</td>
                    <td>Zoha gul</td>
                    <td>Philly Cheesesteak</td>
                    <td>$14</td>
                    <td>04/Feb/2023 2:39</td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="payOrder()">Pay Order</button>
                        <button class="btn btn-danger btn-sm" onclick="cancelOrder()">Cancel Order</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function payOrder() {
            // Implement payment logic here
            alert('Order paid successfully!');
        }

        function cancelOrder() {
            // Implement cancellation logic here
            alert('Order cancelled!');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
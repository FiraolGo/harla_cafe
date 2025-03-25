<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paid Orders</title>
 
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
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Paid Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>CODE</th>
                    <th>CUSTOMER</th>
                    <th>PRODUCT</th>
                    <th>UNIT PRICE</th>
                    <th>QTY</th>
                    <th>TOTAL PRICE</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MKFV-5167</td>
                    <td>Zoha gul</td>
                    <td>Philly Cheesesteak</td>
                    <td>$ 7</td>
                    <td>2</td>
                    <td>$ 14</td>
                    <td>04/Feb/2023 2:39</td>
                    <td><button class="btn btn-primary">Print R</button></td>
                </tr>
                <tr>
                    <td>INHG-0875</td>
                    <td>Delbert G. Campbell</td>
                    <td>Enchiladas</td>
                    <td>$ 10</td>
                    <td>1</td>
                    <td>$ 10</td>
                    <td>04/Sep/2022 9:35</td>
                    <td><button class="btn btn-primary">Print R</button></td>
                </tr>
                <tr>
                    <td>AEHM-0653</td>
                    <td>Ana J. Browne</td>
                    <td>Turkish Coffee</td>
                    <td>$ 8</td>
                    <td>1</td>
                    <td>$ 8</td>
                    <td>03/Sep/2022 6:26</td>
                    <td><button class="btn btn-primary">Print R</button></td>
                </tr>
                <tr>
                    <td>OTEV-8532</td>
                    <td>Louise R. Holloman</td>
                    <td>Spaghetti Bolognese</td>
                    <td>$ 15</td>
                    <td>1</td>
                    <td>$ 15</td>
                    <td>03/Sep/2022 6:13</td>
                    <td><button class="btn btn-primary">Print R</button></td>
                </tr>
                <tr>
                    <td>ZPXD-6951</td>
                    <td>Julie R. Martin</td>
                    <td>Pulled Pork</td>
                    <td>$ 8</td>
                    <td>2</td>
                    <td>$ 16</td>
                    <td>03/Sep/2022 6:12</td>
                    <td><button class="btn btn-primary">Print R</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Add any JavaScript functionality here if needed
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
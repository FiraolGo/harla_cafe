<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .table-selection label {
            font-weight: bold;
        }

        select, input[type="text"], input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-table th, .order-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .order-table th {
            background-color: #28a745;
            color: white;
        }

        .add-row, .remove-row {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        .add-row {
            color: green;
        }

        .remove-row {
            color: red;
        }

        .summary {
            margin-top: 20px;
        }

        .summary label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .create-order {
            background: green;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back {
            background: red;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Add Order</h2>

        <div class="order-header">
            <div class="table-selection">
                <label for="table">Table</label>
                <select id="table" name="table">
                    <option value="T 10">T 10</option>
                    <option value="T 11">T 11</option>
                    <option value="T 12">T 12</option>
                    <option value="T 13">T 13</option>
                </select>
            </div>
            <div class="datetime">
                <p><strong>Date:</strong> <?php echo date("Y-m-d"); ?></p>
                <p><strong>Time:</strong> <?php echo date("h:i a"); ?></p>
            </div>
        </div>

        <table class="order-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="order-items">
                <tr>
                    <td>
                        <select name="product[]" class="product-select">
                            <option value="">Select Product</option>
                            <option value="Burger" data-price="5">Burger ($5)</option>
                            <option value="Pizza" data-price="8">Pizza ($8)</option>
                            <option value="Pasta" data-price="7">Pasta ($7)</option>
                        </select>
                    </td>
                    <td><input type="number" name="qty[]" class="qty" min="1" value="1"></td>
                    <td><input type="text" name="rate[]" class="rate" readonly></td>
                    <td><input type="text" name="amount[]" class="amount" readonly></td>
                    <td>
                        <button type="button" class="add-row">➕</button>
                        <button type="button" class="remove-row">❌</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="summary">
            <label>Gross Amount:</label>
            <input type="text" id="gross-amount" readonly>

            <label>S-Charge 3%:</label>
            <input type="text" id="service-charge" readonly>

            <label>VAT 13%:</label>
            <input type="text" id="vat" readonly>

            <label>Discount:</label>
            <input type="text" id="discount">

            <label>Net Amount:</label>
            <input type="text" id="net-amount" readonly>

            <label for="paid">Paid Status</label>
                <select id="paid" name="paid">
                <option value="waiter">paid</option>
                <option value="cashier">Unpaid</option>
                
                </select>
 
        </div>

        <div class="buttons">
            <button type="submit" class="create-order">Create Order</button>
            <button type="button" class="back">Back</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
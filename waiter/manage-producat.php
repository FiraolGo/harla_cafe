<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .search-container {
            margin-bottom: 20px;
        }
        .search-container input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .entries-select {
            margin-bottom: 20px;
        }
        .entries-select select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .action-buttons {
            margin-bottom: 20px;
        }
        .action-buttons button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .action-buttons button.add-product {
            background-color: #4CAF50;
            color: white;
        }
        .action-buttons button.view-product {
            background-color: #008CBA;
            color: white;
        }
    </style>
</head>
<body>

<h1>Manage Products</h1>

<div class="action-buttons">
    <button class="add-product" onclick="window.location.href='add-product.php'">Add Product</button>
    <button class="view-product" onclick="window.location.href='view-product.php'">View Product</button>
</div>

<div class="entries-select">
    Show 
    <select>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </select> entries
</div>

<div class="search-container">
    <input type="text" placeholder="Search..." id="searchInput">
</div>

<div class="table-container">
    <table id="productsTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><Crispy Chicken Yecas></td>
                <td>Crispy Chicken Tacos</td>
                <td>$10.00</td>
                <td>Fast Food</td>
                <td>Active</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td><Silicen Smoked Turkey yeast></td>
                <td>Sliced Smoked Turkey Breast</td>
                <td>$9.85</td>
                <td>Deli</td>
                <td>Active</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td><Chicken Caesar 'Irap></td>
                <td>Chicken Caesar Wrap</td>
                <td>$10.30</td>
                <td>Fast Food</td>
                <td>Active</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td><Shrimp 'scamp'></td>
                <td>Shrimp Scampi</td>
                <td>$10.95</td>
                <td>Seafood</td>
                <td>Active</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td>.BBQ shrimp and Hot Seal</td>
                <td>BBQ Shrimp and Hot Seal Sausage</td>
                <td>$12.50</td>
                <td>Seafood</td>
                <td>Active</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#productsTable tbody tr');
        
        rows.forEach(row => {
            const productName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            if (productName.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>
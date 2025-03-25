<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .entries-info {
            text-align: right;
            margin-bottom: 20px;
            color: #666;
        }

        .search-bar {
            margin-bottom: 20px;
            text-align: right;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #007bff;
            color: #fff;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .action-buttons button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 5px;
        }

        .action-buttons button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Users</h1>
        <div class="entries-info">Show 10 entries</div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>final</td>
                    <td>ftrad.gended@gmail.com</td>
                    <td>ftra ayana</td>
                    <td>0988352894</td>
                    <td>Staff</td>
                    <td class="action-buttons">
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>donna</td>
                    <td>donna@gmail.com</td>
                    <td>Donna Edwards</td>
                    <td>Y05585980</td>
                    <td>Cashier</td>
                    <td class="action-buttons">
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>veronica</td>
                    <td>veronica@gmail.com</td>
                    <td>Veronica Lyle</td>
                    <td>7850002600</td>
                    <td>Manager</td>
                    <td class="action-buttons">
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>hamacre</td>
                    <td>ham@gmail.com</td>
                    <td>Uam Moore</td>
                    <td>7400002140</td>
                    <td>Members</td>
                    <td class="action-buttons">
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
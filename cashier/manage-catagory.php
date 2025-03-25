<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category</title>
   <style>body {
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

/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    border-radius: 5px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover, .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Manage Category</h1>
        <div class="entries-info">Show 10 entries</div>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search...">
            <button id="searchButton">Search</button>
        </div>
        <button id="load-add-catagory-user" class="btn-success">Add Category</button>
        <br><br>
        <table id="categoryTable">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tocoa</td>
                    <td>Active</td>
                    <td class="action-buttons">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>BGO Policies</td>
                    <td>Active</td>
                    <td class="action-buttons">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Add Category</h2>
            <form id="addCategoryForm">
                <label for="categoryName">Category Name:</label>
                <input type="text" id="categoryName" name="categoryName" required>
                <br><br>
                <label for="categoryStatus">Status:</label>
                <select id="categoryStatus" name="categoryStatus">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
                <br><br>
                <button type="submit">Save</button>
                <button type="button" id="closeFormButton">Close</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 100%;
            margin: auto;
        }
        .form-container input, .form-container textarea, .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add Product</h2>
    <form id="productForm">
        <label for="productImage">Image</label>
        <input type="file" id="productImage" name="productImage" accept="image/*">

        <label for="productName">Product name</label>
        <input type="text" id="productName" name="productName" placeholder="Enter product name">

        <label for="price">Price</label>
        <input type="number" id="price" name="price" placeholder="Enter price">

        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Enter description"></textarea>

        <label for="category">Category</label>
        <select id="category" name="category">
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="home">Home</option>
            <!-- Add more categories as needed -->
        </select>

        <label for="active">Active</label>
        <select id="active" name="active">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <button type="submit">Save Changes</button>
    </form>
</div>



</body>
</html>
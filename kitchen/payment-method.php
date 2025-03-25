<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
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
            color: #343a40; /* Dark gray text */
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            color: #495057; /* Dark gray text */
            margin-bottom: 0.5rem;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da; /* Light gray border */
            border-radius: 4px;
            font-size: 1rem;
        }
        .form-group input:read-only {
            background-color: #e9ecef; /* Light gray background for read-only fields */
            cursor: not-allowed;
        }
        .file-upload {
            border: 2px dashed #ced4da; /* Dashed border */
            padding: 1.5rem;
            text-align: center;
            border-radius: 8px;
            background-color: #f8f9fa; /* Light gray background */
            cursor: pointer;
            margin-bottom: 1.5rem;
        }
        .file-upload input[type="file"] {
            display: none; /* Hide the default file input */
        }
        .file-upload label {
            color: #495057; /* Dark gray text */
            font-weight: bold;
            cursor: pointer;
        }
        .file-upload:hover {
            border-color: #007bff; /* Blue border on hover */
            background-color: #e9f5ff; /* Light blue background on hover */
        }
        .btn-primary {
            background-color: #007bff; /* Blue button */
            color: #ffffff; /* White text */
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Method</h2>
        <form id="paymentForm">
            <!-- Payment ID -->
            <div class="form-group">
                <label for="paymentId">Payment ID</label>
                <input type="text" id="paymentId" >
            </div>

            <!-- Payment Code -->
            <div class="form-group">
                <label for="paymentCode">Payment Code</label>
                <input type="text" id="paymentCode" >
            </div>

            <!-- Amount -->
            <div class="form-group">
                <label for="amount">Amount ($)</label>
                <input type="text" id="amount">
            </div>

            <!-- Payment Method -->
            <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod">
                    <option value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="PayPal">PayPal</option>
                </select>
            </div>

            <!-- File Upload -->
            <div class="file-upload">
                <input type="file" id="fileInput" accept=".pdf,.jpg,.png,.jpeg">
                <label for="fileInput">Click to upload or drag and drop</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-primary">Pay Order</button>
        </form>
    </div>

    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const paymentMethod = document.getElementById('paymentMethod').value;
            const fileInput = document.getElementById('fileInput');

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                alert(`Payment processed via ${paymentMethod}. File uploaded: ${fileName}`);
                // Implement payment processing and file upload logic here
            } else {
                alert('Please upload a payment receipt.');
            }
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- MAIN CONTENT -->
<main id="main-content">
    <div id="default-content">
        <h1 class="title">Kitchen Overview</h1>
        
        <!-- Quick Stats -->
        <div class="info-data">
            <div class="card">
                <div class="head">
                    <div>
                        <h2 id="pending-orders">0</h2>
                        <p>Pending Orders</p>
                    </div>
                    <i class='bx bx-time-five icon'></i>
                </div>
                <span class="progress" data-value="0%"></span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2 id="in-progress">0</h2>
                        <p>In Progress</p>
                    </div>
                    <i class='bx bx-loader-circle icon'></i>
                </div>
                <span class="progress" data-value="0%"></span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2 id="urgent-orders">0</h2>
                        <p>Urgent Orders</p>
                    </div>
                    <i class='bx bx-alarm-exclamation icon'></i>
                </div>
                <span class="progress" data-value="0%"></span>
            </div>
        </div>

        <!-- Active Orders Section -->
        <div class="kitchen-orders">
            <h2>Active Orders <span class="badge" id="active-order-count">0</span></h2>
            <div class="order-grid" id="active-orders-container">
                <!-- Orders will be dynamically inserted here -->
            </div>
        </div>
    </div>
</main>
</body>
</html>
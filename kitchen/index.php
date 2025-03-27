<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h1>Kitchen Dashboard</h1>
                <div class="current-time" id="current-time">10:45 AM</div>
            </div>
            
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="#"><i class="fas fa-clipboard-list"></i> Order Queue</a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i> Food Stations</a></li>
                    <li><a href="#"><i class="fas fa-box-open"></i> Inventory</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Performance</a></li>
                    <li><a href="#"><i class="fas fa-comments"></i> Staff Chat</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="main-header">
                <h2><i class="fas fa-clipboard-list"></i> Order Queue</h2>
                <div class="header-actions">
                    <button class="btn btn-alert"><i class="fas fa-bell"></i> Low Stock (3)</button>
                    <div class="kitchen-status">
                        <span class="status-indicator active"></span>
                        <span>Kitchen Active</span>
                    </div>
                </div>
            </header>

            <div class="order-grid">
                <!-- Order Cards will be inserted here by JavaScript -->
            </div>

            <div class="bottom-panels">
                <div class="inventory-panel">
                    <h3><i class="fas fa-box-open"></i> Inventory Alerts</h3>
                    <div class="inventory-items">
                        <!-- Inventory items will be inserted here by JavaScript -->
                    </div>
                    <button class="btn btn-primary"><i class="fas fa-truck"></i> Request Restock</button>
                </div>

                <div class="performance-panel">
                    <h3><i class="fas fa-chart-line"></i> Kitchen Metrics</h3>
                    <div class="metrics">
                        <div class="metric">
                            <div class="metric-label">Order Completion</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 78%"></div>
                            </div>
                            <div class="metric-value">78%</div>
                        </div>
                        <div class="metric">
                            <div class="metric-label">On-Time Preparation</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 92%"></div>
                            </div>
                            <div class="metric-value">92%</div>
                        </div>
                        <div class="metric">
                            <div class="metric-label">Station Efficiency</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%"></div>
                            </div>
                            <div class="metric-value">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>
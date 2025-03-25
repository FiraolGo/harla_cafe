<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="kitchen-orders-view">
    <h1>Active Orders</h1>
    
    <div class="order-filters">
        <div class="filter-group">
            <label>Station:</label>
            <select id="station-filter">
                <option value="all">All Stations</option>
                <option value="grill">Grill</option>
                <option value="fryer">Fryer</option>
                <option value="salad">Salad Station</option>
                <option value="dessert">Dessert Station</option>
            </select>
        </div>
        <div class="filter-group">
            <label>Priority:</label>
            <select id="priority-filter">
                <option value="all">All Priorities</option>
                <option value="high">High Priority</option>
                <option value="normal">Normal</option>
            </select>
        </div>
    </div>
    
    <div class="order-list" id="kitchen-order-list">
        <!-- Orders will be dynamically inserted here -->
    </div>
</div>
</body>
</html>


// Sample data
const orders = [
    {
        id: 103,
        vip: true,
        timer: 754, // seconds
        status: 'progress',
        station: 'Grill',
        items: [
            { name: 'Ribeye (Medium)', quantity: 2, allergies: null, note: null },
            { name: 'Truffle Fries', quantity: 1, allergies: null, note: 'Extra crispy' }
        ]
    },
    {
        id: 104,
        vip: false,
        timer: 492,
        status: 'received',
        station: 'Salad',
        items: [
            { name: 'Caesar Salad', quantity: 1, allergies: 'No croutons', note: 'Dairy-free dressing' }
        ]
    },
    {
        id: 105,
        vip: false,
        timer: 900,
        status: 'received',
        station: 'Grill/Salad',
        items: [
            { name: 'Filet Mignon', quantity: 1, allergies: null, note: 'Medium Rare' },
            { name: 'House Salad', quantity: 1, allergies: null, note: null }
        ]
    },
    {
        id: 106,
        vip: false,
        urgent: true,
        timer: 300,
        status: 'progress',
        station: 'Fryer',
        items: [
            { name: 'Chicken Wings', quantity: 1, allergies: null, note: 'Extra spicy' },
            { name: 'Onion Rings', quantity: 1, allergies: 'Gluten', note: null }
        ]
    }
];

const inventoryAlerts = [
    { item: 'Ribeye', level: 'low', remaining: '3 portions' },
    { item: 'Truffle Oil', level: 'medium', remaining: '2 bottles' },
    { item: 'Romaine Lettuce', level: 'low', remaining: '1 case' },
    { item: 'Parmesan Cheese', level: 'medium', remaining: '500g' }
];

// DOM elements
const orderGrid = document.querySelector('.order-grid');
const inventoryItems = document.querySelector('.inventory-items');
const currentTimeElement = document.getElementById('current-time');

// Render functions
function renderOrders() {
    orderGrid.innerHTML = '';
    orders.forEach(order => {
        const orderElement = document.createElement('div');
        orderElement.className = `order-card ${order.vip ? 'vip' : ''} ${order.urgent ? 'urgent' : ''}`;
        
        // Format timer
        const minutes = Math.floor(order.timer / 60);
        const seconds = order.timer % 60;
        const timerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        const timerClass = order.timer < 300 ? 'danger' : order.timer < 600 ? 'warning' : '';
        
        // Status text
        const statusText = {
            'received': 'Received',
            'progress': 'In Progress',
            'completed': 'Completed'
        }[order.status];
        
        // Create order HTML
        orderElement.innerHTML = `
            <div class="order-header">
                <div class="order-id">#${order.id}${order.vip ? ' - VIP' : ''}</div>
                <div class="order-timer ${timerClass}">${timerText}</div>
            </div>
            <div class="order-status ${order.status}">${statusText}</div>
            <div class="order-station">Station: ${order.station}</div>
            <div class="order-items">
                ${order.items.map(item => `
                    <div class="order-item">
                        ${item.quantity}× ${item.name}
                        ${item.allergies ? `<span class="allergy-warning">(Allergy: ${item.allergies})</span>` : ''}
                        ${item.note ? `<span class="special-note">(Note: ${item.note})</span>` : ''}
                    </div>
                `).join('')}
            </div>
            <div class="order-actions">
                <button class="btn ${order.status === 'received' ? 'btn-primary' : ''}" onclick="updateOrderStatus(${order.id}, 'received')">
                    <i class="fas fa-check-circle"></i> Received
                </button>
                <button class="btn ${order.status === 'progress' ? 'btn-primary' : ''}" onclick="updateOrderStatus(${order.id}, 'progress')">
                    <i class="fas fa-utensils"></i> Cooking
                </button>
                <button class="btn ${order.status === 'completed' ? 'btn-primary' : ''}" onclick="updateOrderStatus(${order.id}, 'completed')">
                    <i class="fas fa-check"></i> Done
                </button>
            </div>
        `;
        
        orderGrid.appendChild(orderElement);
    });
}

function renderInventory() {
    inventoryItems.innerHTML = '';
    inventoryAlerts.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.className = 'inventory-item';
        itemElement.innerHTML = `
            <div>${item.item}</div>
            <div>
                <span class="alert-level ${item.level}">${item.remaining}</span>
            </div>
        `;
        inventoryItems.appendChild(itemElement);
    });
}

function updateClock() {
    const now = new Date();
    const timeOptions = { hour: '2-digit', minute: '2-digit' };
    
    currentTimeElement.textContent = now.toLocaleTimeString('en-US', timeOptions);
    
    // Update order timers every second
    orders.forEach(order => {
        if (order.status !== 'completed') {
            order.timer--;
            if (order.timer < 0) order.timer = 0;
        }
    });
    
    renderOrders();
}

// Update order status
function updateOrderStatus(orderId, newStatus) {
    const order = orders.find(o => o.id === orderId);
    if (order) {
        order.status = newStatus;
        renderOrders();
        
        // If completed, move to bottom after a delay
        if (newStatus === 'completed') {
            setTimeout(() => {
                const index = orders.findIndex(o => o.id === orderId);
                if (index !== -1) {
                    const [completedOrder] = orders.splice(index, 1);
                    orders.push(completedOrder);
                    renderOrders();
                }
            }, 1000);
        }
    }
}

// Initialize
renderOrders();
renderInventory();
updateClock();
setInterval(updateClock, 1000);
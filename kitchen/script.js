document.addEventListener("DOMContentLoaded", function () {
    const mainContent = document.getElementById("main-content");
    const defaultContent = document.getElementById("default-content");
    let refreshInterval;

    // ======================
    // CORE FUNCTIONALITY
    // ======================

    // Load content dynamically
    function loadContent(url) {
        if (url === "dashboard") {
            mainContent.innerHTML = defaultContent.innerHTML;
            initKitchenDashboard();
        } else {
            fetch(url)
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.text();
                })
                .then(data => {
                    mainContent.innerHTML = data;
                    if (url.includes("order")) initOrderHandlers();
                    if (url === "kitchen-dashboard.php") initKitchenDashboard();
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                    mainContent.innerHTML = `<p class="error">Error loading content: ${error.message}</p>`;
                });
        }
    }

    // Initialize kitchen dashboard with real-time updates
    function initKitchenDashboard() {
        loadKitchenOrders();
        refreshInterval = setInterval(loadKitchenOrders, 15000); // Refresh every 15 seconds
        
        // Clean up interval when leaving dashboard
        document.addEventListener("visibilitychange", () => {
            if (document.hidden) {
                clearInterval(refreshInterval);
            } else {
                loadKitchenOrders();
                refreshInterval = setInterval(loadKitchenOrders, 15000);
            }
        });
    }

    // ======================
    // KITCHEN ORDER SYSTEM
    // ======================

    // Fetch and display kitchen orders
    function loadKitchenOrders() {
        fetch('api/kitchen/orders')
            .then(response => response.json())
            .then(orders => {
                updateOrderDisplay(orders);
                updateDashboardStats(orders);
            })
            .catch(error => console.error("Failed to load orders:", error));
    }

    // Update the UI with current orders
    function updateOrderDisplay(orders) {
        const container = document.getElementById("kitchen-orders-container");
        if (!container) return;

        container.innerHTML = orders.map(order => `
            <div class="kitchen-order-card ${order.priority}-priority" data-order-id="${order.id}">
                <div class="order-header">
                    <div>
                        <span class="order-id">#${order.id}</span>
                        <span class="table-number">Table ${order.table}</span>
                        ${order.priority === 'high' ? '<span class="badge urgent-badge">URGENT</span>' : ''}
                    </div>
                    <div class="order-timer" data-start-time="${order.startTime}">
                        ${formatTimeElapsed(order.startTime)}
                    </div>
                </div>
                <div class="order-items">
                    ${order.items.map(item => `
                        <div class="order-item ${item.status}">
                            <span>${item.quantity}x ${item.name}</span>
                            ${item.notes ? `<span class="item-notes">(${item.notes})</span>` : ''}
                            <span class="item-status">${item.status.toUpperCase()}</span>
                        </div>
                    `).join('')}
                </div>
                <div class="order-actions">
                    <button class="btn-action btn-start" data-order-id="${order.id}">Start</button>
                    <button class="btn-action btn-complete" data-order-id="${order.id}">Complete</button>
                    <button class="btn-action btn-problem" data-order-id="${order.id}">Problem</button>
                </div>
            </div>
        `).join('');

        // Update timers every second
        updateAllOrderTimers();
    }

    // Update dashboard summary stats
    function updateDashboardStats(orders) {
        const stats = {
            pending: orders.filter(o => o.status === 'pending').length,
            cooking: orders.filter(o => o.status === 'preparing').length,
            urgent: orders.filter(o => o.priority === 'high').length
        };

        document.getElementById("pending-count")?.textContent = stats.pending;
        document.getElementById("cooking-count")?.textContent = stats.cooking;
        document.getElementById("urgent-count")?.textContent = stats.urgent;
    }

    // Format time elapsed for display
    function formatTimeElapsed(startTime) {
        const elapsed = Math.floor((Date.now() - new Date(startTime)) / 1000);
        const mins = Math.floor(elapsed / 60);
        const secs = elapsed % 60;
        return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    }

    // Update all order timers
    function updateAllOrderTimers() {
        document.querySelectorAll(".order-timer").forEach(timer => {
            const startTime = timer.dataset.startTime;
            timer.textContent = formatTimeElapsed(startTime);
        });
    }

    // ======================
    // ORDER ACTION HANDLERS
    // ======================

    function handleOrderAction(action, orderId) {
        const endpoint = `api/orders/${orderId}/${action}`;
        
        fetch(endpoint, { 
            method: 'POST',
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => {
            if (!response.ok) throw new Error('Action failed');
            loadKitchenOrders(); // Refresh orders
        })
        .catch(error => {
            console.error(`Failed to ${action} order:`, error);
            alert(`Could not ${action} order. Please try again.`);
        });
    }

    // ======================
    // EVENT LISTENERS
    // ======================

    function initOrderHandlers() {
        // Order action buttons
        document.addEventListener("click", (e) => {
            if (e.target.classList.contains("btn-start")) {
                handleOrderAction("start", e.target.dataset.orderId);
            }
            if (e.target.classList.contains("btn-complete")) {
                handleOrderAction("complete", e.target.dataset.orderId);
            }
            if (e.target.classList.contains("btn-problem")) {
                const orderId = e.target.dataset.orderId;
                const issue = prompt("What's the issue with this order?");
                if (issue) {
                    reportOrderProblem(orderId, issue);
                }
            }
        });

        // Station filtering
        document.getElementById("station-filter")?.addEventListener("change", (e) => {
            const station = e.target.value;
            document.querySelectorAll(".kitchen-order-card").forEach(card => {
                card.style.display = station === "all" || card.dataset.station === station 
                    ? "" : "none";
            });
        });
    }

    function reportOrderProblem(orderId, issue) {
        fetch(`api/orders/${orderId}/problem`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ issue })
        })
        .then(() => loadKitchenOrders())
        .catch(error => console.error("Failed to report problem:", error));
    }

    // ======================
    // NAVIGATION SYSTEM
    // ======================

    function initNavigation() {
        // Kitchen-specific navigation
        document.getElementById("load-dashboard")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("dashboard");
        });

        document.getElementById("load-active-orders")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("active-orders.php");
        });

        document.getElementById("load-completed-orders")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("completed-orders.php");
        });

        document.getElementById("load-kitchen-inventory")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("kitchen-inventory.php");
        });

        // Sidebar dropdown toggle
        document.querySelectorAll("#sidebar .side-dropdown").forEach(dropdown => {
            const toggleLink = dropdown.parentElement.querySelector("a:first-child");
            toggleLink.addEventListener("click", function (e) {
                e.preventDefault();
                dropdown.classList.toggle("show");
                this.classList.toggle("active");
            });
        });

        // Sidebar collapse toggle
        document.querySelector(".toggle-sidebar")?.addEventListener("click", () => {
            document.getElementById("sidebar").classList.toggle("hide");
        });

        // Profile dropdown
        document.querySelector(".profile img")?.addEventListener("click", () => {
            document.querySelector(".profile-link").classList.toggle("show");
        });

        // Close dropdowns when clicking outside
        document.addEventListener("click", (e) => {
            if (!e.target.closest(".side-dropdown") && !e.target.closest(".side-menu > li > a")) {
                document.querySelectorAll(".side-dropdown").forEach(d => d.classList.remove("show"));
            }
            if (!e.target.closest(".profile")) {
                document.querySelector(".profile-link").classList.remove("show");
            }
        });
    }

    // ======================
    // INITIALIZATION
    // ======================

    initNavigation();
    
    // Initialize appropriate handlers based on current page
    if (document.getElementById("kitchen-orders-container")) {
        initKitchenDashboard();
    } else if (document.getElementById("order-items")) {
        initOrderHandlers();
    }

    // Update timers every second if on dashboard
    if (document.getElementById("default-content")) {
        setInterval(updateAllOrderTimers, 1000);
    }
});
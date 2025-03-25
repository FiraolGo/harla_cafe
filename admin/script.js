document.addEventListener("DOMContentLoaded", function () {
    const mainContent = document.getElementById("main-content");
    const defaultContent = document.getElementById("default-content"); // Default dashboard content

    // Function to load content dynamically
    function loadContent(url) {
        if (url === "dashboard") {
            // Display the default dashboard content
            mainContent.innerHTML = defaultContent.innerHTML;
        } else {
            // Fetch the content from the server
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.text();
                })
                .then(data => {
                    mainContent.innerHTML = data;
                    attachOrderEventListeners(); // Attach event listeners after content is loaded
                })
                .catch(error => {
                    console.error("Error loading content:", error);
                    mainContent.innerHTML = "<p>Error loading content. Please try again.</p>";
                });
        }
    }

    // Function to close all dropdowns except the one being clicked
    function closeOtherDropdowns(currentDropdown) {
        document.querySelectorAll("#sidebar .side-dropdown").forEach(dropdown => {
            if (dropdown !== currentDropdown) {
                dropdown.classList.remove("show");
                dropdown.parentElement.querySelector("a:first-child").classList.remove("active");
            }
        });
    }

    // Function to calculate totals
    function calculateTotal() {
        let grossAmount = 0;

        document.querySelectorAll("#order-items tr").forEach(row => {
            const qty = parseInt(row.querySelector(".qty").value) || 1;
            const rate = parseFloat(row.querySelector(".rate").value) || 0;
            const amount = qty * rate;
            row.querySelector(".amount").value = amount.toFixed(2);
            grossAmount += amount;
        });

        const grossAmountInput = document.getElementById("gross-amount");
        const serviceChargeInput = document.getElementById("service-charge");
        const vatInput = document.getElementById("vat");
        const discountInput = document.getElementById("discount");
        const netAmountInput = document.getElementById("net-amount");

        if (grossAmountInput && serviceChargeInput && vatInput && discountInput && netAmountInput) {
            grossAmountInput.value = grossAmount.toFixed(2);
            const serviceCharge = grossAmount * 0.03;
            const vat = grossAmount * 0.13;
            const discount = parseFloat(discountInput.value) || 0;
            const netAmount = grossAmount + serviceCharge + vat - discount;

            serviceChargeInput.value = serviceCharge.toFixed(2);
            vatInput.value = vat.toFixed(2);
            netAmountInput.value = netAmount.toFixed(2);
        }
    }

    // Function to add a new row
    function addRow() {
        const tableBody = document.getElementById("order-items");
        if (tableBody) {
            const newRow = tableBody.rows[0].cloneNode(true);

            newRow.querySelector(".product-select").value = "";
            newRow.querySelector(".qty").value = 1;
            newRow.querySelector(".rate").value = "";
            newRow.querySelector(".amount").value = "";

            tableBody.appendChild(newRow);
        }
    }

    // Function to remove a row
    function removeRow(event) {
        const tableBody = document.getElementById("order-items");
        if (tableBody && tableBody.rows.length > 1) {
            event.target.closest("tr").remove();
            calculateTotal();
        }
    }

    // Function to attach order-related event listeners
    function attachOrderEventListeners() {
        const orderItems = document.getElementById("order-items");

        if (!orderItems) return; // Exit if the order-items table doesn't exist

        // Product selection change
        orderItems.addEventListener("change", function (e) {
            if (e.target.classList.contains("product-select")) {
                const selectedOption = e.target.options[e.target.selectedIndex];
                const price = selectedOption.getAttribute("data-price") || 0;
                const row = e.target.closest("tr");
                row.querySelector(".rate").value = price;
                calculateTotal();
            }
        });

        // Quantity input change
        orderItems.addEventListener("input", function (e) {
            if (e.target.classList.contains("qty")) {
                calculateTotal();
            }
        });

        // Add row button
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("add-row")) {
                addRow();
            }

            if (e.target.classList.contains("remove-row")) {
                removeRow(e);
            }
        });

        // Discount input change
        const discountInput = document.getElementById("discount");
        if (discountInput) {
            discountInput.addEventListener("input", calculateTotal);
        }
    }

    // Function to attach navigation event listeners
    function attachNavigationEventListeners() {
        // Navigation event listeners
        document.getElementById("load-dashboard")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("dashboard"); // Load default dashboard content
        });

        document.getElementById("load-create-user")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("create.php");
        });

        document.getElementById("load-edit-user")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("edit.php");
        });

        document.getElementById("load-manage-catagory")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("manage-catagory.php");
        });

        document.getElementById("load-add-catagory")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("add-catagory.php");
        });

        document.getElementById("load-add-order")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("add-order.php");
        });

        document.getElementById("load-manage-order")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("manage-order.php");
        });

        document.getElementById("load-add-producat")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("add-producat.php");
        });

        document.getElementById("load-managed-producat")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("manage-producat.php");
        });

        document.getElementById("load-add-customer")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("add-customer.php");
        });

        document.getElementById("load-managed-customer")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("manage-customer.php");
        });

        document.getElementById("load-payment-proccess")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("payment-process.php");
        });

        document.getElementById("load-payment-method")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("payment-method.php");
        });

        document.getElementById("load-payment-list")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("payment-list.php");
        });

        document.getElementById("load-edit-profile")?.addEventListener("click", (e) => {
            e.preventDefault();
            loadContent("edit-profile.php");
        });

        // Sidebar dropdown toggle
        document.querySelectorAll("#sidebar .side-dropdown").forEach(dropdown => {
            const toggleLink = dropdown.parentElement.querySelector("a:first-child");
            toggleLink.addEventListener("click", function (e) {
                e.preventDefault();
                closeOtherDropdowns(dropdown); // Close other dropdowns
                this.classList.toggle("active");
                dropdown.classList.toggle("show");
            });
        });

        // Sidebar collapse toggle
        const sidebar = document.getElementById("sidebar");
        const toggleSidebar = document.querySelector("nav .toggle-sidebar");
        toggleSidebar?.addEventListener("click", () => {
            sidebar.classList.toggle("hide");
        });

        // Profile dropdown toggle
        const profile = document.querySelector("nav .profile");
        const imgProfile = profile?.querySelector("img");
        const dropdownProfile = profile?.querySelector(".profile-link");
        imgProfile?.addEventListener("click", () => {
            dropdownProfile.classList.toggle("show");
        });

        // Close profile dropdown when clicking outside
        document.addEventListener("click", function (e) {
            if (profile && !profile.contains(e.target)) {
                dropdownProfile.classList.remove("show");
            }
        });
    }

    // Initialize event listeners on page load
    attachNavigationEventListeners();
    attachOrderEventListeners();
});
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>AdminSite</title>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
        <ul class="side-menu">
            <li><a href="#" id="load-dashboard" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#"  id="load-user"><i class='bx bxs-inbox icon'></i> Users <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#" id="load-create-user"  ><i class='bx bx-plus'></i> Add User</a></li>
                    <li><a href="#"  id="load-edit-user" >Manage User</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> catagory <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#"  id="load-add-catagory">Add catagory</a></li>
                    <li><a href="#"  id="load-manage-catagory">Manage catagory</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Order <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#"  id="load-add-order">Add Order</a></li>
                    <li><a href="#"  id="load-manage-order">Manage Order</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Producat <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#"  id="load-add-producat">Add Products</a></li>
                    <li><a href="#"  id="load-managed-producat">Manage Products</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Customers <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#"  id="load-add-customer">Add Customers</a></li>
                    <li><a href="#"  id="load-managed-customer">Manage Manage</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> payments <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#"  id="load-payment-proccess">payment Proccess</a></li>
                    <li><a href="#"  id="load-payment-method">payment Method</a></li>
                    <li><a href="#"  id="load-payment-list">payment List</a></li>
                </ul>
            </li>
            
           
            <li class="divider"></li>
            <li><a href="#"><i class='bx bx-cog icon'></i> Settings</a></li>
            <li><a href="#"><i class='bx bx-log-out icon'></i> Logout</a></li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>

            
            <a href="#" class="nav-link">
                <i class='bx bxs-bell icon'></i>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bxs-message-square-dots icon'></i>
                <span class="badge">8</span>
            </a>
            <span class="divider"></span>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <ul class="profile-link">
                    <li><a href="#"   id="load-edit-profile"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                    <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                    <li><a href="#"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                </ul>
            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main id="main-content">
            <!-- Default Dashboard Content -->
            <div id="default-content">
                <h1 class="title">Dashboard</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>

                <div class="info-data">
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>6</h2>
                                <p>Total Paid Orders</p>
                            </div>
                            <i class='bx bx-trending-up icon'></i>
                        </div>
                        <span class="progress" data-value="40%"></span>
                        <span class="label">40%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>3</h2>
                                <p>Unpaid Orders</p>
                            </div>
                            <i class='bx bx-trending-down icon down'></i>
                        </div>
                        <span class="progress" data-value="60%"></span>
                        <span class="label">60%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>34</h2>
                                <p>Available Tables</p>
                            </div>
                            <i class='bx bx-trending-up icon'></i>
                        </div>
                        <span class="progress" data-value="30%"></span>
                        <span class="label">30%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>3</h2>
                                <p>System Users</p>
                            </div>
                            <i class='bx bx-trending-up icon'></i>
                        </div>
                        <span class="progress" data-value="80%"></span>
                        <span class="label">80%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>16</h2>
                                <p>Available Stores</p>
                            </div>
                            <i class='bx bx-trending-up icon'></i>
                        </div>
                        <span class="progress" data-value="50%"></span>
                        <span class="label">50%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>9</h2>
                                <p>Total Orders</p>
                            </div>
                            <i class='bx bx-trending-up icon'></i>
                        </div>
                        <span class="progress" data-value="70%"></span>
                        <span class="label">70%</span>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- SCRIPTS -->
    <script src="script.js"></script>
    
</body>
</html>
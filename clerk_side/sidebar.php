<?php
// Start session if needed
session_start();

// Check if user is logged in (uncomment this code when you have authentication in place)
// if(!isset($_SESSION['clerk_id'])) {
//     header("Location: ../login.html");
//     exit();
// }

// Get the requested page from URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'overview';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBC Fitness Gym - Clerk Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #451968;
            --primary-light: #782e9d;
            --primary-dark: #441170;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --medium-gray: #e9ecef;
            --gradient-primary: linear-gradient(145deg, #3a1356 0%, #451968 30%, #6a2590 70%, #782e9d 100%);
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 70px;
            --header-height: 70px;
            --transition-speed: 0.3s;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            overflow-x: hidden;
            background-color: var(--light-gray);
            margin: 0;
            padding: 0;
        }
        
        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--gradient-primary);
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.1);
            height: 100vh;
            overflow-y: auto;
            position: fixed;
            left: 0;
            top: 0;
            transition: width var(--transition-speed), transform var(--transition-speed);
            z-index: 1000;
        }
        
        /* Custom scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }
        
        .sidebar::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .sidebar-header {
            padding: 25px 15px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--white);
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .sidebar-header h4 {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--white);
            margin-bottom: 0;
        }
        
        /* Style for welcome text */
        .welcome-text {
            font-size: 0.85rem;
            margin-bottom: 5px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }
        
        /* User initials for collapsed state */
        .user-initials {
            display: none;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--white);
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
        }
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .menu-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px 25px 5px;
            opacity: 0.9;
        }
        
        .menu-item {
            position: relative;
            display: block;
            padding: 12px 25px;
            color: var(--white);
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            border-left: 0 solid rgba(255, 255, 255, 0.8);
            margin: 4px 0;
        }
        
        .menu-item:hover, .menu-item.active {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            border-left: 4px solid var(--white);
            padding-left: 21px; /* Adjust padding to prevent content shift */
        }
        
        .menu-item i {
            margin-right: 15px;
            font-size: 1.2rem;
            min-width: 25px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .menu-item:hover i, .menu-item.active i {
            transform: translateX(5px);
        }
        
        /* Logo area */
        .logo-area {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(0, 0, 0, 0.15); /* Slightly darker background for the logo area */
            position: relative;
            z-index: 1;
        }
        
        .logo-area img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            transition: transform 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .logo-area h3 {
            font-weight: 700;
            color: var(--white);
            margin: 0;
            font-size: 1.2rem;
        }
        
        /* Clerk Badge */
        .clerk-badge {
            display: inline-block;
            background-color: #28a745;
            color: white;
            font-weight: 600;
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 12px;
            margin-left: 8px;
            text-transform: uppercase;
        }
        
        /* Responsive Sidebar */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                box-shadow: none;
                z-index: 1050;  /* Increase z-index to appear above other elements */
            }
            
            .sidebar.active {
                transform: translateX(0);
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            }
            
            .mobile-toggle {
                position: fixed;
                top: 15px;
                left: 15px;
                width: 45px;
                height: 45px;
                background: var(--primary);
                color: var(--white);
                border: none;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                z-index: 1060;  /* Higher z-index than sidebar */
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
                font-size: 1.2rem;
            }
        }
        
        /* Overlay styling */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }
        
        .overlay.active {
            display: block;        }
    </style>
    <!-- Additional styles for content wrapper -->    <style>
        .content-wrapper {
            margin-left: var(--sidebar-width);
            padding: 0 30px 30px 30px; /* Removed top padding */
            transition: margin var(--transition-speed);
        }
        
        .page-header {
            border-bottom: 1px solid var(--medium-gray);
            padding: 0 0 15px 0; /* Removed top padding completely */
            margin-bottom: 0; /* Removed bottom margin */
        }
        
        .page-header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0; /* Remove margin from h1 */
        }
        
        .page-content {
            padding: 0;
            margin: 0;
        }
        
        /* Responsive layout */        @media (max-width: 992px) {
            .content-wrapper {
                margin-left: 0;
                padding: 60px 20px 30px; /* Reduced top padding for mobile */
            }
        }
    </style>
    <!-- Bootstrap JS - Required for modals and collapses -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Mobile Toggle Button (Only visible on small screens) -->
    <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Sidebar">
        <i class="fas fa-bars"></i>
    </button>
    
    <!-- Overlay (Only visible on small screens when sidebar is open) -->
    <div class="overlay" id="overlay"></div>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo-area">
            <img src="../images/jbc_logo.jpg" alt="JBC Fitness Gym">
            <h3>JBC Fitness</h3>
        </div>
        
        <div class="sidebar-header">
            <!-- Added user initials for collapsed state -->
            <div class="user-initials">C.D.</div>
            <p class="welcome-text">Welcome!</p>
            <h4>Degamo, Christine <span class="clerk-badge">Clerk</span></h4>
        </div>
          <div class="sidebar-menu">
            <div class="menu-label">Dashboard</div>
            <a href="sidebar.php?page=overview" class="menu-item active" data-title="Overview" data-page="overview">
                <i class="fas fa-tachometer-alt"></i> <span class="menu-text">Overview</span>
            </a>
            
            <div class="menu-label">Management</div>
            <a href="sidebar.php?page=manager_customers" class="menu-item" data-title="Manage Customers" data-page="manager_customers">
                <i class="fas fa-users"></i> <span class="menu-text">Manage Customers</span>
            </a>
            <a href="sidebar.php?page=monitor_attendance" class="menu-item" data-title="Monitor Attendance" data-page="monitor_attendance">
                <i class="fas fa-clipboard-check"></i> <span class="menu-text">Monitor Attendance</span>
            </a>
            
            <div class="menu-label">Products & Sales</div>
            <a href="sidebar.php?page=products" class="menu-item" data-title="Product" data-page="products">
                <i class="fas fa-box"></i> <span class="menu-text">Product</span>
            </a>
            <a href="sidebar.php?page=sales" class="menu-item" data-title="Sales" data-page="sales">
                <i class="fas fa-chart-line"></i> <span class="menu-text">Sales</span>
            </a>
            
            <div class="menu-label">Account</div>
            <a href="sidebar.php?page=profile" class="menu-item" data-title="Profile" data-page="profile">
                <i class="fas fa-user-circle"></i> <span class="menu-text">Profile</span>
            </a>
            <a href="../login.html" class="menu-item" data-title="Logout">
                <i class="fas fa-sign-out-alt"></i> <span class="menu-text">Logout</span>
            </a>
        </div>
    </div>      <!-- Content Wrapper -->
    <div class="content-wrapper" style="padding-top: 0 !important; margin-top: 0 !important;">
        <div class="page-header" style="margin-top: 0 !important; padding-top: 0 !important;">
            <h1 id="pageTitle">
                <?php
                switch($page) {
                    case 'overview':
                        break;
                    case 'manager_customers':
                        break;
                    case 'monitor_attendance':
                        break;
                    case 'products':
                        break;
                    case 'sales':
                        break;
                    case 'profile':
                        break;
                    default:
                        break;
                }
                ?>
            </h1>        </div>
        
        <div class="page-content" style="margin-top: 0 !important; padding-top: 0 !important;">
            <?php
            // Switch case to include the appropriate page content
            switch($page) {
                case 'overview':
                    include "overview/index.php";
                    break;
                    
                case 'manager_customers':
                    include "manage_customers/index.php";
                    break;
                    
                case 'monitor_attendance':
                    include "monitor_attendance/index.php";
                    break;
                    
                case 'products':
                    include "products/index.php";
                    break;
                    
                case 'sales':
                    include "sales/index.php";
                    break;
                    
                case 'profile':
                    include "profile/index.php";
                    break;
                    
                default:
                    include "overview/index.php";
                    break;
            }
            ?>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        document.getElementById('mobileToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            
            sidebar.classList.add('active');
            overlay.classList.add('active');
            
            // Prevent body scrolling when sidebar is open
            document.body.style.overflow = 'hidden';
        });
        
        // Hide sidebar when clicking on overlay
        document.getElementById('overlay').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            
            sidebar.classList.remove('active');
            this.classList.remove('active');
            
            // Re-enable body scrolling
            document.body.style.overflow = '';
        });
        
        // Set active menu item based on URL
        document.addEventListener('DOMContentLoaded', function() {
            // Get current page from URL parameter
            const urlParams = new URLSearchParams(window.location.search);
            const currentPage = urlParams.get('page') || 'overview';
            
            // Remove active class from all menu items
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('data-page') === currentPage) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
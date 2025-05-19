<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Logs - JBC Fitness Gym</title>
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
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            color: var(--dark-gray);
        }
        
        .inventory-container {
            padding: 20px;
            max-width: 1110px; /* Reduced from 1200px to 1000px */
            margin: 0 auto;
        }
        
        .inventory-header {
            margin-bottom: 20px;
        }
        
        .date-display {
            background: var(--gradient-primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .month-selector {
            background: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 1rem;
        }
        
        .month-selector option {
            background-color: var(--primary-dark);
            color: white;
        }
        
        .inventory-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }
        
        /* Set column widths */
        .table th:nth-child(1) { /* Date/Time */
            width: 15%;
        }
        
        .table th:nth-child(2) { /* User */
            width: 12%;
        }
        
        .table th:nth-child(3) { /* Action */
            width: 15%;
        }
        
        .table th:nth-child(4) { /* Product */
            width: 18%;
        }
        
        .table th:nth-child(5) { /* Details */
            width: 40%;
        }
        
        .table tbody tr:nth-child(even) {
            background-color: rgba(69, 25, 104, 0.05);
        }
        
        .table tbody td {
            padding: 12px 15px;
            vertical-align: middle;
            border-color: #eee;
        }
        
        .action-text {
            font-weight: 500;
        }
        
        .action-bullet {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }
        
        .bullet-stock {
            background-color: #28a745;
        }
        
        .bullet-price {
            background-color: #fd7e14;
        }
        
        .bullet-new {
            background-color: #17a2b8;
        }
        
        .bullet-category {
            background-color: #6610f2;
        }
        
        .bullet-capacity {
            background-color: #20c997;
        }
        
        .bullet-stockout {
            background-color: #dc3545;
        }
        
        .action-name {
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .product-name {
            font-weight: 500;
            color: var(--primary);
        }
        
        .user-name {
            font-weight: 500;
        }
        
        .timestamp {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .details-column {
            max-width: 320px;
            white-space: normal;
            word-break: break-word;
        }
        
        /* Search bar */
        .search-bar {
            display: flex;
            margin-bottom: 15px;
        }

        .search-bar .form-control {
            border-radius: 6px 0 0 6px;
            border-right: none;
        }

        .search-bar .btn {
            border-radius: 0 6px 6px 0;
            background: var(--gradient-primary);
            color: white;
            border: none;
        }

        .search-bar .btn:hover {
            opacity: 0.9;
        }
        
        /* Filter button bar */
        .filter-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .filter-button {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 6px 12px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
        }
        
        .filter-button.active {
            background: var(--primary-light);
            color: white;
            border-color: var(--primary-light);
        }
        
        .filter-button .bullet {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }
        
        /* Notification System */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            z-index: 1050;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(-20px);
        }
        
        .notification.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .notification i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .notification.success {
            background-color: #28a745;
        }
        
        .notification.warning {
            background-color: #ffc107;
            color: #212529;
        }
        
        .notification.error {
            background-color: #dc3545;
        }
        
        .notification.info {
            background-color: var(--primary);
        }
        
        /* Highlight search results */
        .highlight {
            background-color: #ffffcc;
            color: #000;
            padding: 2px;
            border-radius: 2px;
        }
        
        /* Export button */
        .export-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 15px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .export-btn:hover {
            opacity: 0.9;
        }
        
        /* Responsive table */
        @media (max-width: 768px) {
            .table-responsive {
                border: none;
            }
            
            .table thead {
                display: none;
            }
            
            .table tbody tr {
                display: block;
                border-bottom: 1px solid #eee;
                margin-bottom: 10px;
            }
            
            .table tbody td {
                display: block;
                text-align: right;
                position: relative;
                padding-left: 50%;
                border-bottom: none;
            }
            
            .table tbody td:before {
                content: attr(data-label);
                position: absolute;
            }
        }
    </style>
</head>
<body>
    <div class="inventory-container">
        
        <!-- Tab content -->
        <div class="tab-content" id="logsTabsContent">
            <!-- Inventory Logs Tab Content -->            <div class="tab-pane fade show active" id="inventory-content" role="tabpanel" aria-labelledby="inventory-tab">
                <div class="date-display">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <select class="month-selector me-2" id="monthSelector">
                                    <option value="4">May 2025</option>
                                    <option value="3">April 2025</option>
                                    <option value="2">March 2025</option>
                                    <option value="1">February 2025</option>
                                    <option value="0">January 2025</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="btn-group w-100" role="group" aria-label="Week filter">
                                <button type="button" class="btn btn-outline-light active" data-week="all">All</button>
                                <button type="button" class="btn btn-outline-light" data-week="0">Partial Week</button>
                                <button type="button" class="btn btn-outline-light" data-week="1">Week 1</button>
                                <button type="button" class="btn btn-outline-light" data-week="2">Week 2</button>
                                <button type="button" class="btn btn-outline-light" data-week="3">Week 3</button>
                                <button type="button" class="btn btn-outline-light" data-week="4">Week 4</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Search and Filter Tools -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="search-bar">
                                    <input type="text" id="inventorySearch" class="form-control" placeholder="Search by product name, user, or details...">
                                    <button id="searchBtn" class="btn"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <button id="exportInventoryBtn" class="export-btn">
                                    <i class="fas fa-file-export"></i> Export Data
                                </button>
                            </div>
                        </div>
                        
                        <div class="filter-buttons">
                            <div class="filter-button active" data-action="all">
                                All Actions
                            </div>
                            <div class="filter-button" data-action="stock">
                                <span class="bullet bullet-stock"></span> Stock Changes
                            </div>
                            <div class="filter-button" data-action="price">
                                <span class="bullet bullet-price"></span> Price Changes
                            </div>
                            <div class="filter-button" data-action="new">
                                <span class="bullet bullet-new"></span> New Products
                            </div>
                            <div class="filter-button" data-action="category">
                                <span class="bullet bullet-category"></span> Category Changes
                            </div>
                            <div class="filter-button" data-action="capacity">
                                <span class="bullet bullet-capacity"></span> Capacity Changes
                            </div>
                            <div class="filter-button" data-action="stockout">
                                <span class="bullet bullet-stockout"></span> Stock Removals
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Summary</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #28a745; margin-right: 10px;"></div>
                                        <span>Stock Changes: 2</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #fd7e14; margin-right: 10px;"></div>
                                        <span>Price Changes: 1</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #17a2b8; margin-right: 10px;"></div>
                                        <span>New Products: 1</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #6610f2; margin-right: 10px;"></div>
                                        <span>Category Changes: 0</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #20c997; margin-right: 10px;"></div>
                                        <span>Capacity Changes: 0</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #dc3545; margin-right: 10px;"></div>
                                        <span>Stock Removals: 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="inventory-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date/Time</th>
                                    <th>User</th>
                                    <th>Action</th>
                                    <th>Product</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 04, 2025 - 10:15 AM</td>
                                    <td data-label="User" class="user-name">Admin</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-new"></span>New Product
                                    </td>
                                    <td data-label="Product" class="product-name">Gatorade</td>
                                    <td data-label="Details" class="details-column">Added to Beverages category, 500ml capacity, ₱46.00, Initial stock: 25 units</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 03, 2025 - 03:30 PM</td>
                                    <td data-label="User" class="user-name">Admin</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-capacity"></span>Capacity Change
                                    </td>
                                    <td data-label="Product" class="product-name">Nature's Spring</td>
                                    <td data-label="Details" class="details-column">Updated capacity from 300ml to 330ml</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 03, 2025 - 02:30 PM</td>
                                    <td data-label="User" class="user-name">Admin</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-price"></span>Price Change
                                    </td>
                                    <td data-label="Product" class="product-name">Gatorade</td>
                                    <td data-label="Details" class="details-column">Changed price from ₱42.00 to ₱46.00</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 03, 2025 - 09:45 AM</td>
                                    <td data-label="User" class="user-name">Degamo C. (Clerk)</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-stock"></span>Stock Addition
                                    </td>
                                    <td data-label="Product" class="product-name">Gatorade</td>
                                    <td data-label="Details" class="details-column">Added 30 units to inventory (Previous: 25, New: 55)</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 02, 2025 - 04:20 PM</td>
                                    <td data-label="User" class="user-name">Degamo C. (Clerk)</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-stock"></span>Stock Addition
                                    </td>
                                    <td data-label="Product" class="product-name">Nature's Spring</td>
                                    <td data-label="Details" class="details-column">Added 50 units to inventory (Previous: 32, New: 82)</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 01, 2025 - 03:45 PM</td>
                                    <td data-label="User" class="user-name">Admin</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-price"></span>Price Change
                                    </td>
                                    <td data-label="Product" class="product-name">Nature's Spring</td>
                                    <td data-label="Details" class="details-column">Changed price from ₱12.00 to ₱15.00</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time" class="timestamp">May 01, 2025 - 02:00 PM</td>
                                    <td data-label="User" class="user-name">Admin</td>
                                    <td data-label="Action" class="action-text">
                                        <span class="action-bullet bullet-new"></span>New Product
                                    </td>
                                    <td data-label="Product" class="product-name">Nature's Spring</td>
                                    <td data-label="Details" class="details-column">Added to Water category, 300ml capacity, ₱12.00, Initial stock: 50 units</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Summary Tab Content -->
            <div class="tab-pane fade" id="summary-content" role="tabpanel" aria-labelledby="summary-tab">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">May 2025 Inventory Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h6 class="fw-bold">Stock Changes</h6>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Nature's Spring
                                        <span class="badge bg-success rounded-pill">+50 units</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gatorade
                                        <span class="badge bg-success rounded-pill">+30 units</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h6 class="fw-bold">Price Changes</h6>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gatorade
                                        <span>₱42.00 → ₱46.00</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Nature's Spring
                                        <span>₱12.00 → ₱15.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <h6 class="fw-bold mt-3">Products Available</h6>
                        <table class="table table-bordered mt-2">
                            <thead class="bg-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Current Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nature's Spring</td>
                                    <td>Beverages</td>
                                    <td>330ml</td>
                                    <td>₱15.00</td>
                                    <td>82 units</td>
                                </tr>
                                <tr>
                                    <td>Gatorade</td>
                                    <td>Beverages</td>
                                    <td>500ml</td>
                                    <td>₱46.00</td>
                                    <td>55 units</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Stock Level Alerts</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <strong>Low Stock Alert:</strong> The following products are running low and may need to be restocked soon:
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Current Stock</th>
                                    <th>Reorder Level</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- No low stock items currently -->
                                <tr>
                                    <td colspan="4" class="text-center">No low stock items currently</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    </div>
    
    <!-- Notification Container -->
    <div id="notificationContainer"></div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const weekButtons = document.querySelectorAll('[data-week]');
            const tableRows = document.querySelectorAll('#inventory-content tbody tr');
            const searchInput = document.getElementById('inventorySearch');
            const searchBtn = document.getElementById('searchBtn');
            const actionFilterButtons = document.querySelectorAll('.filter-button');
            const exportBtn = document.getElementById('exportInventoryBtn');
            
            // Track current filters
            let currentWeek = 'all';
            let currentAction = 'all';
            let currentSearchTerm = '';
            
            // Notification system
            function showNotification(message, type = 'info') {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `notification ${type}`;
                
                // Set icon based on notification type
                let icon;
                switch(type) {
                    case 'success':
                        icon = '<i class="fas fa-check-circle"></i>';
                        break;
                    case 'warning':
                        icon = '<i class="fas fa-exclamation-triangle"></i>';
                        break;
                    case 'error':
                        icon = '<i class="fas fa-times-circle"></i>';
                        break;
                    default:
                        icon = '<i class="fas fa-info-circle"></i>';
                }
                
                notification.innerHTML = `${icon}${message}`;
                
                // Append to container
                document.getElementById('notificationContainer').appendChild(notification);
                
                // Show notification with animation
                setTimeout(() => {
                    notification.classList.add('show');
                }, 10);
                
                // Auto remove after 3 seconds
                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        notification.remove();
                    }, 300);
                }, 3000);
            }
            
            // Helper function to get week number from date
            function getWeekOfMonth(date) {
                // For May 2025, organize dates according to specified structure
                if (date.getMonth() === 4 && date.getFullYear() === 2025) {
                    const dayOfMonth = date.getDate();
                    
                    if (dayOfMonth >= 1 && dayOfMonth <= 3) {
                        return 0; // Partial Week: May 1-3 (Thu-Sat)
                    } else if (dayOfMonth >= 4 && dayOfMonth <= 10) {
                        return 1; // Week 1: May 4-10 (Sun-Sat)
                    } else if (dayOfMonth >= 11 && dayOfMonth <= 17) {
                        return 2; // Week 2: May 11-17 (Sun-Sat)
                    } else if (dayOfMonth >= 18 && dayOfMonth <= 24) {
                        return 3; // Week 3: May 18-24 (Sun-Sat)
                    } else {
                        return 4; // Week 4: May 25-31 (Sun-Sat)
                    }
                }
                
                // Default calculation for other months
                const firstDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();
                return Math.ceil((date.getDate() + firstDay) / 7);
            }
            
            // Assign data-week attribute to each row based on its date
            tableRows.forEach(row => {
                const dateText = row.querySelector('.timestamp').textContent;
                const dateParts = dateText.split(' - ')[0].split(', ')[0].split(' ');
                
                // Skip if not in expected format
                if (dateParts.length < 2) return;
                
                const month = dateParts[0];
                const day = parseInt(dateParts[1]);
                
                // Using current year as placeholder since we're simulating 2025
                const rowDate = new Date(2025, month === 'May' ? 4 : 3, day);
                const weekNum = getWeekOfMonth(rowDate);
                
                // Add week number as data attribute
                row.setAttribute('data-week', weekNum);
                
                // Add month attribute for possible future month filtering
                row.setAttribute('data-month', month);
                
                // Add action type attribute
                const actionText = row.querySelector('.action-text').textContent.trim();
                
                if (actionText.includes('Stock Addition')) {
                    row.setAttribute('data-action', 'stock');
                } else if (actionText.includes('Price Change')) {
                    row.setAttribute('data-action', 'price');
                } else if (actionText.includes('New Product')) {
                    row.setAttribute('data-action', 'new');
                } else if (actionText.includes('Category Change')) {
                    row.setAttribute('data-action', 'category');
                } else if (actionText.includes('Capacity Change')) {
                    row.setAttribute('data-action', 'capacity');
                } else if (actionText.includes('Stock Removal')) {
                    row.setAttribute('data-action', 'stockout');
                }
            });
            
            // Apply all filters and search
            function applyFilters() {
                let visibleCount = 0;
                
                tableRows.forEach(row => {
                    // Check if row matches week filter
                    const weekMatch = currentWeek === 'all' || row.getAttribute('data-week') === currentWeek;
                    
                    // Check if row matches action filter
                    const actionMatch = currentAction === 'all' || row.getAttribute('data-action') === currentAction;
                    
                    // Check if row matches search term
                    let searchMatch = true;
                    if (currentSearchTerm) {
                        const rowText = (
                            row.querySelector('.product-name').textContent.toLowerCase() + ' ' +
                            row.querySelector('.user-name').textContent.toLowerCase() + ' ' +
                            row.querySelector('.details-column').textContent.toLowerCase()
                        );
                        searchMatch = rowText.includes(currentSearchTerm.toLowerCase());
                    }
                    
                    // Show/hide row based on combined filters
                    row.style.display = (weekMatch && actionMatch && searchMatch) ? '' : 'none';
                    
                    if (weekMatch && actionMatch && searchMatch) {
                        visibleCount++;
                    }
                });
                
                // Update summary counts based on visible rows
                updateSummaryCounts();
                
                return visibleCount;
            }
            
            // Function to highlight search terms
            function highlightSearchTerm() {
                if (!currentSearchTerm) {
                    // Remove any existing highlights
                    document.querySelectorAll('.highlight').forEach(el => {
                        el.outerHTML = el.textContent;
                    });
                    return;
                }
                
                const productCells = document.querySelectorAll('.product-name');
                const userCells = document.querySelectorAll('.user-name');
                const detailCells = document.querySelectorAll('.details-column');
                
                const searchTerm = currentSearchTerm.toLowerCase();
                
                // Helper function to highlight text in an element
                function highlightText(element) {
                    const text = element.innerHTML;
                    // Only highlight if not already highlighted (to prevent re-highlighting)
                    if (!text.includes('<span class="highlight">')) {
                        const regex = new RegExp(searchTerm, 'gi');
                        element.innerHTML = text.replace(regex, match => 
                            `<span class="highlight">${match}</span>`
                        );
                    }
                }
                
                // Apply highlighting only to visible rows
                tableRows.forEach(row => {
                    if (row.style.display !== 'none') {
                        if (row.querySelector('.product-name')) highlightText(row.querySelector('.product-name'));
                        if (row.querySelector('.user-name')) highlightText(row.querySelector('.user-name'));
                        if (row.querySelector('.details-column')) highlightText(row.querySelector('.details-column'));
                    }
                });
            }
            
            // Add click handlers for week filter buttons
            weekButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    weekButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    currentWeek = this.getAttribute('data-week');
                    const visibleCount = applyFilters();
                    highlightSearchTerm();
                    
                    if (visibleCount > 0) {
                        showNotification(`Showing ${visibleCount} inventory records for the selected week`, 'info');
                    } else {
                        showNotification('No records found for the selected filters', 'warning');
                    }
                });
            });
            
            // Add click handlers for action filter buttons
            actionFilterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    actionFilterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    currentAction = this.getAttribute('data-action');
                    const visibleCount = applyFilters();
                    highlightSearchTerm();
                    
                    if (visibleCount > 0) {
                        const actionText = currentAction === 'all' ? 'all actions' : 
                            this.textContent.trim() || 'selected action';
                        showNotification(`Showing ${visibleCount} records for ${actionText}`, 'info');
                    } else {
                        showNotification('No records found for the selected filters', 'warning');
                    }
                });
            });
            
            // Search functionality
            function performSearch() {
                currentSearchTerm = searchInput.value.trim();
                const visibleCount = applyFilters();
                highlightSearchTerm();
                
                if (currentSearchTerm) {
                    if (visibleCount > 0) {
                        showNotification(`Found ${visibleCount} matches for "${currentSearchTerm}"`, 'success');
                    } else {
                        showNotification(`No matches found for "${currentSearchTerm}"`, 'warning');
                    }
                } else {
                    // If search is cleared, just apply the existing filters
                    applyFilters();
                }
            }
            
            searchBtn.addEventListener('click', performSearch);
            
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
            
            // Month selector functionality
            const monthSelector = document.getElementById('monthSelector');
            monthSelector.addEventListener('change', function() {
                // In a real application, this would load data for the selected month
                // For this demo, we'll just update the heading and keep using same data
                const monthNames = [
                    'January', 'February', 'March', 'April', 'May', 
                    'June', 'July', 'August', 'September', 'October', 
                    'November', 'December'
                ];
                const selectedMonthIndex = parseInt(this.value);
                const monthName = monthNames[selectedMonthIndex];
                
                document.querySelector('#summary-content .card-header h5').textContent = 
                    `${monthName} 2025 Inventory Activity`;
                
                // Reset week filter to "All"
                document.querySelector('[data-week="all"]').click();
                
                showNotification(`Viewing inventory logs for ${monthName} 2025`, 'info');
            });
            
            // Function to update summary counts based on visible rows
            function updateSummaryCounts() {
                const visibleRows = Array.from(tableRows).filter(row => row.style.display !== 'none');
                
                const stockChanges = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'stock'
                ).length;
                
                const priceChanges = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'price'
                ).length;
                
                const newProducts = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'new'
                ).length;
                
                const categoryChanges = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'category'
                ).length;
                
                const capacityChanges = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'capacity'
                ).length;
                
                const stockRemovals = visibleRows.filter(row => 
                    row.getAttribute('data-action') === 'stockout'
                ).length;
                
                // Update summary display
                document.querySelector('.card-body .row div:nth-child(1) span').textContent = `Stock Changes: ${stockChanges}`;
                document.querySelector('.card-body .row div:nth-child(2) span').textContent = `Price Changes: ${priceChanges}`;
                document.querySelector('.card-body .row div:nth-child(3) span').textContent = `New Products: ${newProducts}`;
                document.querySelector('.card-body .row div:nth-child(4) span').textContent = `Category Changes: ${categoryChanges}`;
                document.querySelector('.card-body .row div:nth-child(5) span').textContent = `Capacity Changes: ${capacityChanges}`;
                document.querySelector('.card-body .row div:nth-child(6) span').textContent = `Stock Removals: ${stockRemovals}`;
            }
            
            // Export functionality
            exportBtn.addEventListener('click', function() {
                // Get visible rows only
                const visibleRows = Array.from(tableRows).filter(row => row.style.display !== 'none');
                
                if (visibleRows.length === 0) {
                    showNotification('No data to export. Please adjust your filters.', 'warning');
                    return;
                }
                
                let csvContent = "Date/Time,User,Action,Product,Details\n";
                
                visibleRows.forEach(row => {
                    const timestamp = row.querySelector('.timestamp').textContent;
                    const user = row.querySelector('.user-name').textContent;
                    const action = row.querySelector('.action-text').textContent.trim();
                    const product = row.querySelector('.product-name').textContent;
                    const details = row.querySelector('.details-column').textContent;
                    
                    // Escape fields that might contain commas
                    csvContent += `"${timestamp}","${user}","${action}","${product}","${details}"\n`;
                });
                
                const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
                const link = document.createElement("a");
                const url = URL.createObjectURL(blob);
                
                link.setAttribute("href", url);
                link.setAttribute("download", "inventory_logs_export.csv");
                link.style.visibility = 'hidden';
                
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                showNotification(`Successfully exported ${visibleRows.length} records to CSV`, 'success');
            });
        });
    </script>
</body>
</html>
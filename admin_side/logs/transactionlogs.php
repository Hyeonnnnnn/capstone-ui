<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Logs - JBC Fitness Gym</title>
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
        
        .transaction-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .transaction-header {
            margin-bottom: 20px;
        }
        
        .date-display {
            background: var(--gradient-primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .transaction-table {
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
        
        .table tbody tr:nth-child(even) {
            background-color: rgba(69, 25, 104, 0.05);
        }
        
        .table tbody td {
            padding: 12px 15px;
            vertical-align: middle;
            border-color: #eee;
        }
        
        .product-name {
            font-weight: 500;
            color: var(--primary);
        }
        
        .product-price {
            font-weight: 600;
        }
        
        .timestamp {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        /* Filter Panel Styles */
        .filter-panel {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .filter-panel .btn-primary {
            background: var(--gradient-primary);
            border: none;
            padding: 8px 20px;
            font-weight: 500;
        }
        
        .filter-panel .form-control {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 8px 15px;
        }
        
        .filter-panel .form-select {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 8px 15px;
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
        
        /* Filter active indicators */
        .filter-active {
            background-color: #e8f4fd;
            border-color: #0d6efd !important;
        }
        
        /* Filter pills */
        .filter-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }
        
        .filter-pill {
            background-color: var(--primary-light);
            color: white;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
            margin-bottom: 5px;
        }
        
        .filter-pill .remove-filter {
            margin-left: 8px;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        /* Highlight search results */
        .highlight {
            background-color: #ffffcc;
            color: #000;
            padding: 2px;
            border-radius: 2px;
        }
        
        /* Time range slider */
        .time-slider {
            width: 100%;
            margin-top: 10px;
        }
        
        .time-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 0.8rem;
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
                left: 15px;
                font-weight: 600;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="transaction-container">
        <div class="transaction-header">
            <h2>Transaction Logs</h2>
            <p class="text-muted">Complete record of product transactions</p>
        </div>
        
        <!-- Filter Section -->
        <div class="filter-panel">
            <h5 class="mb-3">Filter Transaction Records</h5>
            <form id="transactionFilterForm">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="itemNameFilter" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="itemNameFilter" placeholder="Enter Item Name">
                    </div>
                    <div class="col-md-4">
                        <label for="priceRangeFilter" class="form-label">Price Range</label>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="number" class="form-control" id="minPriceFilter" placeholder="Min" min="0">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" id="maxPriceFilter" placeholder="Max" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="timeRangeFilter" class="form-label">Time Range</label>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="time" class="form-control" id="startTimeFilter">
                            </div>
                            <div class="col-6">
                                <input type="time" class="form-control" id="endTimeFilter">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <button type="button" id="applyFilters" class="btn btn-primary me-2">
                            <i class="fas fa-filter me-1"></i> Apply Filters
                        </button>
                        <button type="button" id="resetFilters" class="btn btn-outline-secondary">
                            <i class="fas fa-undo me-1"></i> Reset
                        </button>
                        <button type="button" id="exportData" class="btn btn-success ms-auto">
                            <i class="fas fa-file-export me-1"></i> Export Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Filter Pills to show active filters -->
        <div class="filter-pills mb-3" id="activeFilterPills" style="display: none;">
            <div class="d-flex align-items-center me-2">
                <i class="fas fa-filter me-2"></i>
                <strong>Active Filters:</strong>
            </div>
            <div id="filterPillContainer">
                <!-- Pills will be added here dynamically -->
            </div>
            <button class="btn btn-sm btn-outline-secondary ms-auto" id="clearAllFilters">
                <i class="fas fa-times me-1"></i> Clear All
            </button>
        </div>
        
        <!-- Transaction Logs Content -->
        <div class="date-display">
            <i class="far fa-calendar-alt me-2"></i> May 19, 2025
        </div>
        
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Summary</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: var(--primary); margin-right: 10px;"></div>
                                <span>Nature's Spring: 30 items (₱450.00)</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: var(--primary-light); margin-right: 10px;"></div>
                                <span>Gatorade: 18 items (₱828.00)</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: #28a745; margin-right: 10px;"></div>
                                <span>Total: ₱1,278.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction Records Table -->
        <div class="transaction-table">
            <div class="table-responsive">
                <table class="table" id="transactionTable">
                    <thead>
                        <tr>
                            <th>Item No.</th>
                            <th>Item Name</th>
                            <th>SRP</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Item No.">1</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">07:15 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">2</td>
                            <td data-label="Item Name" class="product-name">Gatorade</td>
                            <td data-label="SRP" class="product-price">₱46.00</td>
                            <td data-label="Timestamp" class="timestamp">07:32 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">3</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">07:45 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">4</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">08:05 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">5</td>
                            <td data-label="Item Name" class="product-name">Gatorade</td>
                            <td data-label="SRP" class="product-price">₱46.00</td>
                            <td data-label="Timestamp" class="timestamp">08:17 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">6</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">08:22 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">7</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">08:40 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">8</td>
                            <td data-label="Item Name" class="product-name">Gatorade</td>
                            <td data-label="SRP" class="product-price">₱46.00</td>
                            <td data-label="Timestamp" class="timestamp">09:03 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">9</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">09:10 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">10</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">09:17 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">11</td>
                            <td data-label="Item Name" class="product-name">Gatorade</td>
                            <td data-label="SRP" class="product-price">₱46.00</td>
                            <td data-label="Timestamp" class="timestamp">09:30 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">12</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">09:42 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">13</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">10:05 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">14</td>
                            <td data-label="Item Name" class="product-name">Gatorade</td>
                            <td data-label="SRP" class="product-price">₱46.00</td>
                            <td data-label="Timestamp" class="timestamp">10:15 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">15</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">10:30 AM</td>
                        </tr>
                        <tr>
                            <td data-label="Item No.">16</td>
                            <td data-label="Item Name" class="product-name">Nature's Spring</td>
                            <td data-label="SRP" class="product-price">₱15.00</td>
                            <td data-label="Timestamp" class="timestamp">10:45 AM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Notification Container -->
    <div id="notificationContainer"></div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script for Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const transactionTable = document.getElementById('transactionTable');
            const applyFiltersBtn = document.getElementById('applyFilters');
            const resetFiltersBtn = document.getElementById('resetFilters');
            const exportDataBtn = document.getElementById('exportData');
            const filterPills = document.getElementById('activeFilterPills');
            const filterPillContainer = document.getElementById('filterPillContainer');
            const clearAllFiltersBtn = document.getElementById('clearAllFilters');
            
            // Filter input elements
            const itemNameFilter = document.getElementById('itemNameFilter');
            const minPriceFilter = document.getElementById('minPriceFilter');
            const maxPriceFilter = document.getElementById('maxPriceFilter');
            const startTimeFilter = document.getElementById('startTimeFilter');
            const endTimeFilter = document.getElementById('endTimeFilter');
            
            // Helper function to parse price from string like "₱15.00"
            function parsePrice(priceString) {
                return parseFloat(priceString.replace('₱', '').replace(',', ''));
            }
            
            // Helper function to parse time from "07:15 AM" to 24-hour format (07:15)
            function parseTime(timeString) {
                const timeParts = timeString.match(/(\d+):(\d+)\s(AM|PM)/i);
                if (!timeParts) return null;
                
                let hours = parseInt(timeParts[1]);
                const minutes = parseInt(timeParts[2]);
                const period = timeParts[3].toUpperCase();
                
                if (period === 'PM' && hours < 12) hours += 12;
                if (period === 'AM' && hours === 12) hours = 0;
                
                return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
            }
            
            // Helper function to format time for display
            function formatTime(timeString) {
                const [hours, minutes] = timeString.split(':');
                const hoursInt = parseInt(hours);
                let period = 'AM';
                let displayHours = hoursInt;
                
                if (hoursInt >= 12) {
                    period = 'PM';
                    displayHours = hoursInt === 12 ? 12 : hoursInt - 12;
                }
                
                if (displayHours === 0) displayHours = 12;
                
                return `${displayHours}:${minutes} ${period}`;
            }
            
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
            
            // Function to update filter pills display
            function updateFilterPills() {
                // Clear existing pills
                filterPillContainer.innerHTML = '';
                
                // Track if any filters are active
                let hasActiveFilters = false;
                
                // Create pills for each active filter
                if (itemNameFilter.value) {
                    createFilterPill('Item: ' + itemNameFilter.value, 'itemName');
                    hasActiveFilters = true;
                }
                
                if (minPriceFilter.value) {
                    createFilterPill('Min Price: ₱' + minPriceFilter.value, 'minPrice');
                    hasActiveFilters = true;
                }
                
                if (maxPriceFilter.value) {
                    createFilterPill('Max Price: ₱' + maxPriceFilter.value, 'maxPrice');
                    hasActiveFilters = true;
                }
                
                if (startTimeFilter.value) {
                    createFilterPill('From: ' + formatTime(startTimeFilter.value), 'startTime');
                    hasActiveFilters = true;
                }
                
                if (endTimeFilter.value) {
                    createFilterPill('To: ' + formatTime(endTimeFilter.value), 'endTime');
                    hasActiveFilters = true;
                }
                
                // Show/hide the filter pills section
                filterPills.style.display = hasActiveFilters ? 'flex' : 'none';
                
                // Update filter input styling
                updateFilterInputStyling();
            }
            
            // Create a single filter pill
            function createFilterPill(text, filterType) {
                const pill = document.createElement('div');
                pill.className = 'filter-pill';
                pill.innerHTML = `${text}<span class="remove-filter" data-filter="${filterType}"><i class="fas fa-times"></i></span>`;
                
                // Add click event to remove this specific filter
                pill.querySelector('.remove-filter').addEventListener('click', function() {
                    const filterType = this.getAttribute('data-filter');
                    
                    switch(filterType) {
                        case 'itemName':
                            itemNameFilter.value = '';
                            break;
                        case 'minPrice':
                            minPriceFilter.value = '';
                            break;
                        case 'maxPrice':
                            maxPriceFilter.value = '';
                            break;
                        case 'startTime':
                            startTimeFilter.value = '';
                            break;
                        case 'endTime':
                            endTimeFilter.value = '';
                            break;
                    }
                    
                    // Reapply filters
                    applyFilters();
                });
                
                filterPillContainer.appendChild(pill);
            }
            
            // Update filter input styling based on whether they have values
            function updateFilterInputStyling() {
                // Reset all inputs
                [itemNameFilter, minPriceFilter, maxPriceFilter, startTimeFilter, endTimeFilter].forEach(input => {
                    input.classList.remove('filter-active');
                });
                
                // Add active class to inputs with values
                if (itemNameFilter.value) itemNameFilter.classList.add('filter-active');
                if (minPriceFilter.value) minPriceFilter.classList.add('filter-active');
                if (maxPriceFilter.value) maxPriceFilter.classList.add('filter-active');
                if (startTimeFilter.value) startTimeFilter.classList.add('filter-active');
                if (endTimeFilter.value) endTimeFilter.classList.add('filter-active');
            }
            
            // Function to validate filters
            function validateFilters() {
                // Validate price range
                if (minPriceFilter.value && maxPriceFilter.value) {
                    const minPrice = parseFloat(minPriceFilter.value);
                    const maxPrice = parseFloat(maxPriceFilter.value);
                    
                    if (minPrice > maxPrice) {
                        showNotification('Minimum price cannot be greater than maximum price.', 'warning');
                        return false;
                    }
                }
                
                // Validate time range
                if (startTimeFilter.value && endTimeFilter.value) {
                    if (startTimeFilter.value > endTimeFilter.value) {
                        showNotification('Start time must be before end time.', 'warning');
                        return false;
                    }
                }
                
                return true;
            }
            
            // Function to apply filters
            function applyFilters() {
                // Validate filters before applying
                if (!validateFilters()) return;
                
                const itemName = itemNameFilter.value.toLowerCase();
                const minPrice = minPriceFilter.value ? parseFloat(minPriceFilter.value) : 0;
                const maxPrice = maxPriceFilter.value ? parseFloat(maxPriceFilter.value) : Number.MAX_VALUE;
                const startTime = startTimeFilter.value;
                const endTime = endTimeFilter.value;
                
                const rows = transactionTable.querySelectorAll('tbody tr');
                let visibleCount = 0;
                let natureSpringCount = 0;
                let natureSpringTotal = 0;
                let gatoradeCount = 0;
                let gatoradeTotal = 0;
                
                rows.forEach(row => {
                    const productNameCell = row.querySelector('td[data-label="Item Name"]').textContent.toLowerCase();
                    const priceCell = parsePrice(row.querySelector('td[data-label="SRP"]').textContent);
                    const timestampCell = row.querySelector('td[data-label="Timestamp"]').textContent;
                    const time24h = parseTime(timestampCell);
                    
                    let showRow = true;
                    
                    // Filter by item name
                    if (itemName && !productNameCell.includes(itemName)) {
                        showRow = false;
                    }
                    
                    // Filter by price range
                    if ((minPrice > 0 && priceCell < minPrice) || (priceCell > maxPrice)) {
                        showRow = false;
                    }
                    
                    // Filter by time range
                    if (startTime && time24h < startTime) {
                        showRow = false;
                    }
                    
                    if (endTime && time24h > endTime) {
                        showRow = false;
                    }
                    
                    // Apply visibility
                    row.style.display = showRow ? '' : 'none';
                    
                    // Count visible rows for statistics
                    if (showRow) {
                        visibleCount++;
                        
                        // Update summary counts
                        if (productNameCell === "nature's spring") {
                            natureSpringCount++;
                            natureSpringTotal += priceCell;
                        } else if (productNameCell === "gatorade") {
                            gatoradeCount++;
                            gatoradeTotal += priceCell;
                        }
                    }
                });
                
                // Update the summary counts
                updateSummary(natureSpringCount, natureSpringTotal, gatoradeCount, gatoradeTotal);
                
                // Update filter pills
                updateFilterPills();
                
                // Show notification
                if (visibleCount > 0) {
                    showNotification(`Showing ${visibleCount} transaction records`, 'info');
                } else {
                    showNotification('No records match the current filters', 'warning');
                }
                
                return visibleCount;
            }
            
            // Update summary card with new counts
            function updateSummary(natureSpringCount, natureSpringTotal, gatoradeCount, gatoradeTotal) {
                const summaryCard = document.querySelector('.card-body');
                if (summaryCard) {
                    const summaryItems = summaryCard.querySelectorAll('.col-md-4 span');
                    if (summaryItems.length >= 3) {
                        const total = natureSpringTotal + gatoradeTotal;
                        
                        // Format for currency
                        const formatCurrency = (value) => {
                            return '₱' + value.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                        };
                        
                        summaryItems[0].textContent = `Nature's Spring: ${natureSpringCount} items (${formatCurrency(natureSpringTotal)})`;
                        summaryItems[1].textContent = `Gatorade: ${gatoradeCount} items (${formatCurrency(gatoradeTotal)})`;
                        summaryItems[2].textContent = `Total: ${formatCurrency(total)}`;
                    }
                }
            }
            
            // Apply filters button click event
            applyFiltersBtn.addEventListener('click', function() {
                applyFilters();
            });
            
            // Reset filters
            resetFiltersBtn.addEventListener('click', function() {
                itemNameFilter.value = '';
                minPriceFilter.value = '';
                maxPriceFilter.value = '';
                startTimeFilter.value = '';
                endTimeFilter.value = '';
                
                const rows = transactionTable.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    row.style.display = '';
                });
                
                // Reset filter pills
                filterPills.style.display = 'none';
                filterPillContainer.innerHTML = '';
                
                // Reset styling
                updateFilterInputStyling();
                
                // Count all rows for summary
                let natureSpringCount = 0;
                let natureSpringTotal = 0;
                let gatoradeCount = 0;
                let gatoradeTotal = 0;
                
                rows.forEach(row => {
                    const productNameCell = row.querySelector('td[data-label="Item Name"]').textContent.toLowerCase();
                    const priceCell = parsePrice(row.querySelector('td[data-label="SRP"]').textContent);
                    
                    if (productNameCell === "nature's spring") {
                        natureSpringCount++;
                        natureSpringTotal += priceCell;
                    } else if (productNameCell === "gatorade") {
                        gatoradeCount++;
                        gatoradeTotal += priceCell;
                    }
                });
                
                // Update the summary counts
                updateSummary(natureSpringCount, natureSpringTotal, gatoradeCount, gatoradeTotal);
                
                showNotification('All filters have been reset', 'success');
            });
            
            // Clear all filters button
            clearAllFiltersBtn.addEventListener('click', function() {
                resetFiltersBtn.click();
            });
            
            // Export data functionality
            exportDataBtn.addEventListener('click', function() {
                let csvContent = "Item No.,Item Name,SRP,Timestamp\n";
                let visibleRowCount = 0;
                
                const rows = transactionTable.querySelectorAll('tbody tr');
                
                rows.forEach(row => {
                    if (row.style.display !== 'none') {
                        visibleRowCount++;
                        const itemNo = row.querySelector('td[data-label="Item No."]').textContent;
                        const itemName = row.querySelector('td[data-label="Item Name"]').textContent;
                        const srp = row.querySelector('td[data-label="SRP"]').textContent;
                        const timestamp = row.querySelector('td[data-label="Timestamp"]').textContent;
                        
                        csvContent += `"${itemNo}","${itemName}","${srp}","${timestamp}"\n`;
                    }
                });
                
                if (visibleRowCount === 0) {
                    showNotification('No data to export. Please adjust your filters.', 'warning');
                    return;
                }
                
                const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
                const link = document.createElement("a");
                const url = URL.createObjectURL(blob);
                
                link.setAttribute("href", url);
                link.setAttribute("download", "transaction_logs_export.csv");
                link.style.visibility = 'hidden';
                
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                showNotification(`Successfully exported ${visibleRowCount} records to CSV`, 'success');
            });
            
            // Add event listeners for "Enter" key on filter inputs
            [itemNameFilter, minPriceFilter, maxPriceFilter].forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        applyFiltersBtn.click();
                    }
                });
            });
            
            // Initialize the summary counts
            resetFiltersBtn.click();
        });
    </script>
</body>
</html>

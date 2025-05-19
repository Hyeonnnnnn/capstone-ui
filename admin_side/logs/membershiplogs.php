<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Logs - JBC Fitness Gym</title>
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
        
        .membership-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .membership-header {
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
        
        .membership-table {
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
        
        .member-name {
            font-weight: 500;
        }
        
        .membership-type {
            font-weight: 600;
            color: var(--primary);
        }
        
        .member-status {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            display: inline-block;
            min-width: 80px;
        }
        
        .status-active {
            background-color: #28a745;
            color: white;
        }
        
        .status-expired {
            background-color: #dc3545;
            color: white;
        }
        
        .status-pending {
            background-color: #ffc107;
            color: #212529;
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
    <div class="membership-container">
        <div class="membership-header">
            <h2>Membership Logs</h2>
            <p class="text-muted">Complete record of gym memberships</p>
        </div>
        
        <!-- Filter Section -->
        <div class="filter-panel">
            <h5 class="mb-3">Filter Membership Records</h5>
            <form id="membershipFilterForm">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="memberIdFilter" class="form-label">Member ID</label>
                        <input type="text" class="form-control" id="memberIdFilter" placeholder="Enter Member ID">
                    </div>
                    <div class="col-md-3">
                        <label for="memberNameFilter" class="form-label">Member Name</label>
                        <input type="text" class="form-control" id="memberNameFilter" placeholder="Enter Member Name">
                    </div>
                    <div class="col-md-3">
                        <label for="membershipTypeFilter" class="form-label">Membership Type</label>
                        <select class="form-select" id="membershipTypeFilter">
                            <option value="">All Types</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Annual">Annual</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="statusFilter" class="form-label">Status</label>
                        <select class="form-select" id="statusFilter">
                            <option value="">All Statuses</option>
                            <option value="Active">Active</option>
                            <option value="Expired">Expired</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="dateRangeFilter" class="form-label">Date Range</label>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="date" class="form-control" id="startDateFilter" placeholder="Start Date">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="endDateFilter" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-end">
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
        
        <!-- Membership Logs Content -->
        <div class="date-display">
            <i class="far fa-calendar-alt me-2"></i> March 04, 2025
        </div>
        
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Summary</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: var(--primary); margin-right: 10px;"></div>
                                <span>Monthly Members: 8</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: var(--primary-light); margin-right: 10px;"></div>
                                <span>Annual Members: 2</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <div style="width: 15px; height: 15px; background-color: #28a745; margin-right: 10px;"></div>
                                <span>Total Active Members: 10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- All Members in a single table -->
        <h4 class="mt-4 mb-3">Membership Records</h4>
        <div class="membership-table">
            <div class="table-responsive">
                <table class="table" id="membershipTable">
                    <thead>
                        <tr>
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Membership Type</th>
                            <th>Start Date</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Member ID">M00123</td>
                            <td data-label="Name" class="member-name">Dela Cruz, Juan, M.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 04, 2025</td>
                            <td data-label="Expiry Date">Mar 04, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00124</td>
                            <td data-label="Name" class="member-name">Reyes, Maria, C.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 10, 2025</td>
                            <td data-label="Expiry Date">Mar 10, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">A00123</td>
                            <td data-label="Name" class="member-name">Dela Cruz, John, M.</td>
                            <td data-label="Membership Type" class="membership-type">Annual</td>
                            <td data-label="Start Date">Feb 05, 2025</td>
                            <td data-label="Expiry Date">Feb 05, 2026</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00125</td>
                            <td data-label="Name" class="member-name">Santos, Pedro, L.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 15, 2025</td>
                            <td data-label="Expiry Date">Mar 15, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00126</td>
                            <td data-label="Name" class="member-name">Gonzales, Anna, R.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 15, 2025</td>
                            <td data-label="Expiry Date">Mar 15, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">A00124</td>
                            <td data-label="Name" class="member-name">Cruz, Sophieia, C.</td>
                            <td data-label="Membership Type" class="membership-type">Annual</td>
                            <td data-label="Start Date">Feb 12, 2025</td>
                            <td data-label="Expiry Date">Feb 12, 2026</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00127</td>
                            <td data-label="Name" class="member-name">Bautista, Carlo, S.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 18, 2025</td>
                            <td data-label="Expiry Date">Mar 18, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00128</td>
                            <td data-label="Name" class="member-name">Mendoza, Luis, T.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 20, 2025</td>
                            <td data-label="Expiry Date">Mar 20, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00129</td>
                            <td data-label="Name" class="member-name">Fernandez, Erika, J.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 25, 2025</td>
                            <td data-label="Expiry Date">Mar 25, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td data-label="Member ID">M00130</td>
                            <td data-label="Name" class="member-name">Ramirez, Daniel, P.</td>
                            <td data-label="Membership Type" class="membership-type">Monthly</td>
                            <td data-label="Start Date">Feb 28, 2025</td>
                            <td data-label="Expiry Date">Mar 28, 2025</td>
                            <td data-label="Status"><span class="member-status status-active">Active</span></td>
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
            const membershipTable = document.getElementById('membershipTable');
            const applyFiltersBtn = document.getElementById('applyFilters');
            const resetFiltersBtn = document.getElementById('resetFilters');
            const exportDataBtn = document.getElementById('exportData');
            const filterPills = document.getElementById('activeFilterPills');
            const filterPillContainer = document.getElementById('filterPillContainer');
            const clearAllFiltersBtn = document.getElementById('clearAllFilters');
            
            // Filter input elements
            const memberIdFilter = document.getElementById('memberIdFilter');
            const memberNameFilter = document.getElementById('memberNameFilter');
            const membershipTypeFilter = document.getElementById('membershipTypeFilter');
            const statusFilter = document.getElementById('statusFilter');
            const startDateFilter = document.getElementById('startDateFilter');
            const endDateFilter = document.getElementById('endDateFilter');
            
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
                if (memberIdFilter.value) {
                    createFilterPill('Member ID: ' + memberIdFilter.value, 'memberId');
                    hasActiveFilters = true;
                }
                
                if (memberNameFilter.value) {
                    createFilterPill('Name: ' + memberNameFilter.value, 'memberName');
                    hasActiveFilters = true;
                }
                
                if (membershipTypeFilter.value) {
                    createFilterPill('Type: ' + membershipTypeFilter.value, 'membershipType');
                    hasActiveFilters = true;
                }
                
                if (statusFilter.value) {
                    createFilterPill('Status: ' + statusFilter.value, 'status');
                    hasActiveFilters = true;
                }
                
                if (startDateFilter.value) {
                    createFilterPill('From: ' + formatDate(startDateFilter.value), 'startDate');
                    hasActiveFilters = true;
                }
                
                if (endDateFilter.value) {
                    createFilterPill('To: ' + formatDate(endDateFilter.value), 'endDate');
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
                        case 'memberId':
                            memberIdFilter.value = '';
                            break;
                        case 'memberName':
                            memberNameFilter.value = '';
                            break;
                        case 'membershipType':
                            membershipTypeFilter.value = '';
                            break;
                        case 'status':
                            statusFilter.value = '';
                            break;
                        case 'startDate':
                            startDateFilter.value = '';
                            break;
                        case 'endDate':
                            endDateFilter.value = '';
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
                [memberIdFilter, memberNameFilter, startDateFilter, endDateFilter].forEach(input => {
                    input.classList.remove('filter-active');
                });
                
                [membershipTypeFilter, statusFilter].forEach(select => {
                    select.classList.remove('filter-active');
                });
                
                // Add active class to inputs with values
                if (memberIdFilter.value) memberIdFilter.classList.add('filter-active');
                if (memberNameFilter.value) memberNameFilter.classList.add('filter-active');
                if (membershipTypeFilter.value) membershipTypeFilter.classList.add('filter-active');
                if (statusFilter.value) statusFilter.classList.add('filter-active');
                if (startDateFilter.value) startDateFilter.classList.add('filter-active');
                if (endDateFilter.value) endDateFilter.classList.add('filter-active');
            }
            
            // Function to format dates in a more readable format
            function formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
            }
            
            // Function to validate date range
            function validateDateRange() {
                if (startDateFilter.value && endDateFilter.value) {
                    const startDate = new Date(startDateFilter.value);
                    const endDate = new Date(endDateFilter.value);
                    
                    if (startDate > endDate) {
                        showNotification('Start date must be before end date', 'warning');
                        return false;
                    }
                }
                return true;
            }
            
            // Function to apply filters
            function applyFilters() {
                // Validate date range before applying filters
                if (!validateDateRange()) return;
                
                const memberId = memberIdFilter.value.toLowerCase();
                const memberName = memberNameFilter.value.toLowerCase();
                const membershipType = membershipTypeFilter.value;
                const status = statusFilter.value;
                const startDate = startDateFilter.value;
                const endDate = endDateFilter.value;
                
                const rows = membershipTable.querySelectorAll('tbody tr');
                let visibleCount = 0;
                let monthlyCount = 0;
                let annualCount = 0;
                let activeCount = 0;
                
                rows.forEach(row => {
                    const idCell = row.querySelector('td[data-label="Member ID"]').textContent.toLowerCase();
                    const nameCell = row.querySelector('td[data-label="Name"]').textContent.toLowerCase();
                    const typeCell = row.querySelector('td[data-label="Membership Type"]').textContent;
                    const statusCell = row.querySelector('span.member-status').textContent;
                    const startDateCell = new Date(row.querySelector('td[data-label="Start Date"]').textContent);
                    const expiryDateCell = new Date(row.querySelector('td[data-label="Expiry Date"]').textContent);
                    
                    let showRow = true;
                    
                    if (memberId && !idCell.includes(memberId)) {
                        showRow = false;
                    }
                    
                    if (memberName && !nameCell.includes(memberName)) {
                        showRow = false;
                    }
                    
                    if (membershipType && typeCell !== membershipType) {
                        showRow = false;
                    }
                    
                    if (status && statusCell !== status) {
                        showRow = false;
                    }
                    
                    if (startDate) {
                        const filterStartDate = new Date(startDate);
                        if (startDateCell < filterStartDate) {
                            showRow = false;
                        }
                    }
                    
                    if (endDate) {
                        const filterEndDate = new Date(endDate);
                        if (expiryDateCell > filterEndDate) {
                            showRow = false;
                        }
                    }
                    
                    row.style.display = showRow ? '' : 'none';
                    
                    // Count visible rows for statistics
                    if (showRow) {
                        visibleCount++;
                        
                        if (typeCell === 'Monthly') {
                            monthlyCount++;
                        } else if (typeCell === 'Annual') {
                            annualCount++;
                        }
                        
                        if (statusCell === 'Active') {
                            activeCount++;
                        }
                    }
                });
                
                // Update the summary counts
                updateSummary(monthlyCount, annualCount, activeCount);
                
                // Update filter pills
                updateFilterPills();
                
                // Show notification
                if (visibleCount > 0) {
                    showNotification(`Showing ${visibleCount} membership records`, 'info');
                } else {
                    showNotification('No records match the current filters', 'warning');
                }
            }
            
            // Update summary card with new counts
            function updateSummary(monthlyCount, annualCount, activeCount) {
                const summaryCard = document.querySelector('.card-body');
                if (summaryCard) {
                    const summaryItems = summaryCard.querySelectorAll('.col-md-4 span');
                    if (summaryItems.length >= 3) {
                        summaryItems[0].textContent = `Monthly Members: ${monthlyCount}`;
                        summaryItems[1].textContent = `Annual Members: ${annualCount}`;
                        summaryItems[2].textContent = `Total Active Members: ${activeCount}`;
                    }
                }
            }
            
            // Apply filters button click event
            applyFiltersBtn.addEventListener('click', function() {
                applyFilters();
            });
            
            // Reset filters
            resetFiltersBtn.addEventListener('click', function() {
                memberIdFilter.value = '';
                memberNameFilter.value = '';
                membershipTypeFilter.value = '';
                statusFilter.value = '';
                startDateFilter.value = '';
                endDateFilter.value = '';
                
                const rows = membershipTable.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    row.style.display = '';
                });
                
                // Reset filter pills
                filterPills.style.display = 'none';
                filterPillContainer.innerHTML = '';
                
                // Reset styling
                updateFilterInputStyling();
                
                // Count all rows for summary
                let monthlyCount = 0;
                let annualCount = 0;
                let activeCount = 0;
                
                rows.forEach(row => {
                    const typeCell = row.querySelector('td[data-label="Membership Type"]').textContent;
                    const statusCell = row.querySelector('span.member-status').textContent;
                    
                    if (typeCell === 'Monthly') {
                        monthlyCount++;
                    } else if (typeCell === 'Annual') {
                        annualCount++;
                    }
                    
                    if (statusCell === 'Active') {
                        activeCount++;
                    }
                });
                
                // Update the summary counts
                updateSummary(monthlyCount, annualCount, activeCount);
                
                showNotification('All filters have been reset', 'success');
            });
            
            // Clear all filters button
            clearAllFiltersBtn.addEventListener('click', function() {
                resetFiltersBtn.click();
            });
            
            // Export data functionality
            exportDataBtn.addEventListener('click', function() {
                let csvContent = "Member ID,Name,Membership Type,Start Date,Expiry Date,Status\n";
                let visibleRowCount = 0;
                
                const rows = membershipTable.querySelectorAll('tbody tr');
                
                rows.forEach(row => {
                    if (row.style.display !== 'none') {
                        visibleRowCount++;
                        const memberId = row.querySelector('td[data-label="Member ID"]').textContent;
                        const name = row.querySelector('td[data-label="Name"]').textContent;
                        const type = row.querySelector('td[data-label="Membership Type"]').textContent;
                        const startDate = row.querySelector('td[data-label="Start Date"]').textContent;
                        const expiryDate = row.querySelector('td[data-label="Expiry Date"]').textContent;
                        const status = row.querySelector('span.member-status').textContent;
                        
                        csvContent += `"${memberId}","${name}","${type}","${startDate}","${expiryDate}","${status}"\n`;
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
                link.setAttribute("download", "membership_logs_export.csv");
                link.style.visibility = 'hidden';
                
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                showNotification(`Successfully exported ${visibleRowCount} records to CSV`, 'success');
            });
            
            // Add event listeners for "Enter" key on filter inputs
            [memberIdFilter, memberNameFilter, startDateFilter, endDateFilter].forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        applyFiltersBtn.click();
                    }
                });
            });
        });
    </script>
</body>
</html>

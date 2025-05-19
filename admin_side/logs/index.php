<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">

<div class="main-content">
    <div class="container-fluid pt-4 px-4">
        <!-- Logs Header -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <h1 class="text-purple fw-bold mb-4">Logs</h1>
        </div>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-4" id="logsTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="transactions-tab" data-bs-toggle="tab" data-bs-target="#transactions-content" type="button" role="tab" aria-controls="transactions-content" aria-selected="true">
                    <i class="fas fa-receipt me-2"></i>Transaction Logs
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="membership-tab" data-bs-toggle="tab" data-bs-target="#membership-content" type="button" role="tab" aria-controls="membership-content" aria-selected="false">
                    <i class="fas fa-id-card me-2"></i>Membership Logs
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory-content" type="button" role="tab" aria-controls="inventory-content" aria-selected="false">
                    <i class="fas fa-boxes me-2"></i>Inventory Logs
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="access-tab" data-bs-toggle="tab" data-bs-target="#access-content" type="button" role="tab" aria-controls="access-content" aria-selected="false">
                    <i class="fas fa-user-clock me-2"></i>Access Logs
                </button>
            </li>
        </ul>
        
        <!-- Tab content -->
        <div class="tab-content" id="logsTabsContent">
            <!-- Transaction Logs Tab Content -->
            <div class="tab-pane fade show active" id="transactions-content" role="tabpanel" aria-labelledby="transactions-tab">
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
                
                <div class="transaction-table">
                    <div class="table-responsive">
                        <table class="table">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            <!-- Membership Logs Tab Content -->
            <div class="tab-pane fade" id="membership-content" role="tabpanel" aria-labelledby="membership-tab">
                <div class="date-display">
                    <i class="far fa-calendar-alt me-2"></i> May 19, 2025
                </div>
                
                <div class="membership-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>Membership Type</th>
                                    <th>Amount</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Member" class="member-name">John Smith</td>
                                    <td data-label="Membership Type" class="membership-type">Gold Monthly</td>
                                    <td data-label="Amount">₱1,500.00</td>
                                    <td data-label="Start Date">Apr 19, 2025</td>
                                    <td data-label="End Date">May 19, 2025</td>
                                    <td data-label="Status"><span class="member-status status-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Member" class="member-name">Maria Garcia</td>
                                    <td data-label="Membership Type" class="membership-type">Platinum Annual</td>
                                    <td data-label="Amount">₱15,000.00</td>
                                    <td data-label="Start Date">May 10, 2025</td>
                                    <td data-label="End Date">May 10, 2026</td>
                                    <td data-label="Status"><span class="member-status status-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Member" class="member-name">Robert Lee</td>
                                    <td data-label="Membership Type" class="membership-type">Silver Monthly</td>
                                    <td data-label="Amount">₱1,200.00</td>
                                    <td data-label="Start Date">Mar 19, 2025</td>
                                    <td data-label="End Date">Apr 19, 2025</td>
                                    <td data-label="Status"><span class="member-status status-expired">Expired</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Member" class="member-name">Sarah Johnson</td>
                                    <td data-label="Membership Type" class="membership-type">Gold Annual</td>
                                    <td data-label="Amount">₱12,000.00</td>
                                    <td data-label="Start Date">Jan 15, 2025</td>
                                    <td data-label="End Date">Jan 15, 2026</td>
                                    <td data-label="Status"><span class="member-status status-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Member" class="member-name">James Wilson</td>
                                    <td data-label="Membership Type" class="membership-type">Gold Monthly</td>
                                    <td data-label="Amount">₱1,500.00</td>
                                    <td data-label="Start Date">May 01, 2025</td>
                                    <td data-label="End Date">Jun 01, 2025</td>
                                    <td data-label="Status"><span class="member-status status-active">Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
              <!-- Inventory Logs Tab Content -->
            <div class="tab-pane fade" id="inventory-content" role="tabpanel" aria-labelledby="inventory-tab">                <div class="date-display">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <select class="month-selector me-2" id="inventoryMonthSelector">
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
                </div>                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Summary</h5>
                                <div>
                                    <div class="input-group input-group-sm me-2 d-inline-flex" style="width: 200px;">
                                        <input type="text" class="form-control" placeholder="Search logs..." id="inventorySearchInput">
                                        <button class="btn btn-outline-secondary" type="button" id="inventorySearchBtn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary" id="exportInventoryLogs">
                                        <i class="fas fa-download me-1"></i> Export
                                    </button>
                                </div>
                            </div>
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
                                        <span>Stock Removals: 1</span>
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
                                    <td data-label="Date/Time">May 19, 2025 08:30 AM</td>
                                    <td data-label="User">Admin</td>
                                    <td data-label="Action"><span class="badge bg-success">Added</span></td>
                                    <td data-label="Product" class="product-name">Nature's Spring</td>
                                    <td data-label="Details">Added 50 units to inventory. New stock: 235 units.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 18, 2025 04:15 PM</td>
                                    <td data-label="User">Clerk1</td>
                                    <td data-label="Action"><span class="badge bg-danger">Removed</span></td>
                                    <td data-label="Product" class="product-name">Gatorade</td>
                                    <td data-label="Details">Removed 5 units from inventory. New stock: 42 units.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 18, 2025 12:00 PM</td>
                                    <td data-label="User">Admin</td>
                                    <td data-label="Action"><span class="badge bg-primary">Updated</span></td>
                                    <td data-label="Product" class="product-name">Protein Bar</td>
                                    <td data-label="Details">Updated product information. Price changed from ₱75.00 to ₱85.00.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 17, 2025 09:40 AM</td>
                                    <td data-label="User">Clerk2</td>
                                    <td data-label="Action"><span class="badge bg-secondary">Count</span></td>
                                    <td data-label="Product" class="product-name">All Products</td>
                                    <td data-label="Details">Daily inventory count completed. 5 items adjusted.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
              <!-- Access Logs Tab Content -->
            <div class="tab-pane fade" id="access-content" role="tabpanel" aria-labelledby="access-tab">                <div class="date-display">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <select class="month-selector me-2" id="accessMonthSelector">
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
                </div>                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Access Summary</h5>
                                <div>
                                    <div class="input-group input-group-sm me-2 d-inline-flex" style="width: 200px;">
                                        <input type="text" class="form-control" placeholder="Search logs..." id="accessSearchInput">
                                        <button class="btn btn-outline-secondary" type="button" id="accessSearchBtn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary" id="exportAccessLogs">
                                        <i class="fas fa-download me-1"></i> Export
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #20c997; margin-right: 10px;"></div>
                                        <span>Staff Logins: 2</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #6610f2; margin-right: 10px;"></div>
                                        <span>Admin Logins: 1</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #dc3545; margin-right: 10px;"></div>
                                        <span>Login Failures: 1</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #ffc107; margin-right: 10px;"></div>
                                        <span>Member Logins: 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="access-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date/Time</th>
                                    <th>User</th>
                                    <th>Role</th>
                                    <th>IP Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Date/Time">May 19, 2025 09:45 AM</td>
                                    <td data-label="User" class="user-name">Admin User</td>
                                    <td data-label="Role">Administrator</td>
                                    <td data-label="IP Address" class="ip-address">192.168.1.100</td>
                                    <td data-label="Status"><span class="badge bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 19, 2025 09:32 AM</td>
                                    <td data-label="User" class="user-name">James Wilson</td>
                                    <td data-label="Role">Member</td>
                                    <td data-label="IP Address" class="ip-address">192.168.1.105</td>
                                    <td data-label="Status"><span class="badge bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 19, 2025 09:15 AM</td>
                                    <td data-label="User" class="user-name">Clerk1</td>
                                    <td data-label="Role">Staff</td>
                                    <td data-label="IP Address" class="ip-address">192.168.1.102</td>
                                    <td data-label="Status"><span class="badge bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td data-label="Date/Time">May 19, 2025 08:55 AM</td>
                                    <td data-label="User" class="user-name">Unknown</td>
                                    <td data-label="Role">-</td>
                                    <td data-label="IP Address" class="ip-address">203.45.23.12</td>
                                    <td data-label="Status"><span class="badge bg-danger">Failed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Colors */
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
    
    /* Text Colors */
    .text-purple {
        color: var(--primary);
    }
    
    /* Tab Styling */
    .nav-tabs .nav-link {
        color: var(--dark-gray);
        font-weight: 500;
        padding: 12px 20px;
        border-radius: 0;
        border: none;
        margin-right: 5px;
        transition: all 0.3s ease;
    }
    
    .nav-tabs .nav-link.active {
        color: var(--primary);
        border-bottom: 3px solid var(--primary);
        background-color: transparent;
    }
    
    .nav-tabs .nav-link:hover:not(.active) {
        background-color: var(--light-gray);
        border-color: transparent;
    }
    
    /* Date Display */
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
    
    /* Table Styling */
    .transaction-table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
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
    }
    
    .product-price {
        font-weight: 600;
        color: var(--primary);
        font-family: 'Roboto Mono', monospace;
    }
    
    .timestamp {
        color: #6c757d;
        font-size: 0.9rem;
    }
    
    /* Membership Table Styles */
    .membership-table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
    
    .membership-type {
        font-weight: 600;
        color: var(--primary);
    }
    
    .member-name {
        font-weight: 500;
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
    
    /* Inventory Table Styles */
    .inventory-table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
    
    /* Access Table Styles */
    .access-table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
    
    .ip-address {
        font-family: 'Roboto Mono', monospace;
        font-size: 0.9rem;
    }
    
    /* Month Selector */
    .month-selector {
        max-width: 150px;
        font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
        .date-display {
            flex-direction: column;
            align-items: center !important;
            gap: 10px;
        }
        
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

<script>    // Script to enhance user experience when switching tabs and handle filters
    document.addEventListener('DOMContentLoaded', function() {
        // Tab switching functionality
        document.querySelectorAll('#logsTabs .nav-link').forEach(function(tab) {
            tab.addEventListener('click', function() {
                // You could add animations or special effects when switching tabs here
            });
        });
        
        // Inventory logs filtering
        setupTabFilters('inventory', 'inventoryMonthSelector');
        
        // Access logs filtering
        setupTabFilters('access', 'accessMonthSelector');
          // Set up export buttons
        setupExportButtons();
          // Set up custom date range filters
        setupDateRangeFilters();
        
        // Set up search functionality
        setupSearchFunctionality();
        
        // Function to setup filtering for tabs
        function setupTabFilters(tabPrefix, monthSelectorId) {
            // Month selector change handler
            const monthSelector = document.getElementById(monthSelectorId);
            if (monthSelector) {
                monthSelector.addEventListener('change', function() {
                    filterLogsByMonth(tabPrefix, this.value);
                });
            }
            
            // Week filter buttons click handler
            const weekButtons = document.querySelectorAll(`#${tabPrefix}-content .btn-group [data-week]`);
            weekButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons in this group
                    this.closest('.btn-group').querySelectorAll('.btn').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Filter logs by selected week
                    filterLogsByWeek(tabPrefix, this.getAttribute('data-week'));
                });
            });
        }
        
        // Function to setup export buttons
        function setupExportButtons() {
            // Inventory logs export button
            const exportInventoryBtn = document.getElementById('exportInventoryLogs');
            if (exportInventoryBtn) {
                exportInventoryBtn.addEventListener('click', function() {
                    exportTableToCSV('inventory-table', 'inventory_logs.csv');
                });
            }
            
            // Access logs export button
            const exportAccessBtn = document.getElementById('exportAccessLogs');
            if (exportAccessBtn) {
                exportAccessBtn.addEventListener('click', function() {
                    exportTableToCSV('access-table', 'access_logs.csv');
                });
            }
        }
        
        // Function to export table data to CSV
        function exportTableToCSV(tableContainerClass, filename) {
            // Get the table element
            const table = document.querySelector(`.${tableContainerClass} table`);
            if (!table) return;
            
            // Get table headers
            const headers = [];
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.textContent.trim());
            });
            
            // Get table rows
            const rows = [];
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = [];
                tr.querySelectorAll('td').forEach(td => {
                    // Remove any HTML tags and get just the text
                    const cellText = td.textContent.trim().replace(/(\r\n|\n|\r)/gm, ' ').replace(/,/g, ';');
                    row.push(cellText);
                });
                rows.push(row);
            });
            
            // Build CSV content
            let csvContent = headers.join(',') + '\n';
            rows.forEach(row => {
                csvContent += row.join(',') + '\n';
            });
            
            // Create download link
            const encodedUri = encodeURI('data:text/csv;charset=utf-8,' + csvContent);
            const link = document.createElement('a');
            link.setAttribute('href', encodedUri);
            link.setAttribute('download', filename);
            document.body.appendChild(link);
            
            // Trigger download and clean up
            link.click();
            document.body.removeChild(link);
            
            // Show success message
            showNotification(`${filename} downloaded successfully.`, 'success');
        }
        
        // Function to show notification to user
        function showNotification(message, type = 'info') {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} position-fixed bottom-0 end-0 m-3`;
            notification.style.zIndex = '9999';
            notification.innerHTML = message;
            
            // Add notification to DOM
            document.body.appendChild(notification);
            
            // Remove notification after 3 seconds
            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transition = 'opacity 0.5s';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 500);
            }, 3000);
        }
        
        // Function to filter logs by month
        function filterLogsByMonth(tabPrefix, monthValue) {
            console.log(`Filtering ${tabPrefix} logs by month: ${monthValue}`);
            // Here you would typically make an AJAX call to fetch data for the selected month
            // For now, we'll simulate the filtering with a UI update
            
            // Update the month name in any display elements if needed
            const monthNames = ['January', 'February', 'March', 'April', 'May'];
            const year = 2025;
            
            // For demonstration purposes, update the summary card
            updateSummaryData(tabPrefix, monthValue);
            
            // Reset week filter to "All"
            document.querySelectorAll(`#${tabPrefix}-content .btn-group [data-week]`).forEach(btn => {
                btn.classList.remove('active');
            });
            document.querySelector(`#${tabPrefix}-content .btn-group [data-week="all"]`).classList.add('active');
            
            // Show notification
            showNotification(`Showing ${monthNames[monthValue]} ${year} logs.`, 'info');
        }
        
        // Function to filter logs by week
        function filterLogsByWeek(tabPrefix, weekValue) {
            console.log(`Filtering ${tabPrefix} logs by week: ${weekValue}`);
            // Here you would typically make an AJAX call to fetch data for the selected week
            // For now, we'll simulate the filtering with a UI update
            
            // For demonstration purposes, update the summary card based on week
            updateSummaryData(tabPrefix, document.getElementById(`${tabPrefix}MonthSelector`).value, weekValue);
            
            // Get week name for notification
            let weekName;
            if (weekValue === 'all') weekName = 'All';
            else if (weekValue === '0') weekName = 'Partial Week';
            else weekName = `Week ${weekValue}`;
            
            // Show notification
            showNotification(`Showing ${weekName} logs.`, 'info');
        }
          // Function to setup date range filters
        function setupDateRangeFilters() {
            // Inventory logs date range
            const applyInventoryDateBtn = document.getElementById('applyInventoryDateRange');
            if (applyInventoryDateBtn) {
                applyInventoryDateBtn.addEventListener('click', function() {
                    const startDate = document.getElementById('inventoryStartDate').value;
                    const endDate = document.getElementById('inventoryEndDate').value;
                    filterLogsByDateRange('inventory', startDate, endDate);
                });
            }
            
            // Access logs date range
            const applyAccessDateBtn = document.getElementById('applyAccessDateRange');
            if (applyAccessDateBtn) {
                applyAccessDateBtn.addEventListener('click', function() {
                    const startDate = document.getElementById('accessStartDate').value;
                    const endDate = document.getElementById('accessEndDate').value;
                    filterLogsByDateRange('access', startDate, endDate);
                });
            }
        }
        
        // Function to filter logs by custom date range
        function filterLogsByDateRange(tabPrefix, startDate, endDate) {
            console.log(`Filtering ${tabPrefix} logs by date range: ${startDate} to ${endDate}`);
            
            // Validate dates
            if (!startDate || !endDate) {
                showNotification('Please select both start and end dates.', 'warning');
                return;
            }
            
            // Check if end date is after start date
            if (new Date(endDate) < new Date(startDate)) {
                showNotification('End date must be after start date.', 'warning');
                return;
            }
            
            // Here you would typically make an AJAX call to fetch data for the date range
            // For now, we'll simulate the filtering with a UI update
            
            // Reset week filter buttons (remove active class)
            document.querySelectorAll(`#${tabPrefix}-content .btn-group [data-week]`).forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Update summary data
            updateSummaryDataByDateRange(tabPrefix, startDate, endDate);
            
            // Show notification
            const formattedStartDate = formatDate(startDate);
            const formattedEndDate = formatDate(endDate);
            showNotification(`Showing logs from ${formattedStartDate} to ${formattedEndDate}.`, 'info');
        }
        
        // Helper function to format date for display
        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString('en-US', options);
        }
        
        // Function to update summary data based on date range
        function updateSummaryDataByDateRange(tabPrefix, startDate, endDate) {
            console.log(`Updating ${tabPrefix} summary data for date range: ${startDate} to ${endDate}`);
            
            // Simulate loading state - same as in updateSummaryData function
            document.querySelectorAll(`#${tabPrefix}-content .card-body .row span`).forEach(span => {
                const originalText = span.textContent;
                span.innerHTML = '<small><i class="fas fa-spinner fa-spin me-1"></i>Loading...</small>';
                
                // Simulate loading time and then restore with "new" data
                setTimeout(() => {
                    // In a real implementation, this would be replaced with actual data from server
                    // For example, you would adjust the counts based on the date range
                    const parts = originalText.split(':');
                    if (parts.length > 1) {
                        // Add a random adjustment to simulate different data for different date ranges
                        const currentNumber = parseInt(parts[1].trim()) || 0;
                        const adjustment = Math.floor(Math.random() * 3) - 1; // -1, 0, or 1
                        const newNumber = Math.max(0, currentNumber + adjustment);
                        span.innerHTML = `${parts[0]}: ${newNumber}`;
                    } else {
                        span.innerHTML = originalText;
                    }
                }, 800);
            });
        }
          // Function to set up search functionality
        function setupSearchFunctionality() {
            // Inventory logs search
            setupSearchForTab('inventory');
            
            // Access logs search
            setupSearchForTab('access');
        }
        
        // Function to set up search for a specific tab
        function setupSearchForTab(tabPrefix) {
            const searchInput = document.getElementById(`${tabPrefix}SearchInput`);
            const searchBtn = document.getElementById(`${tabPrefix}SearchBtn`);
            
            if (searchInput && searchBtn) {
                // Search when button is clicked
                searchBtn.addEventListener('click', function() {
                    searchLogs(tabPrefix, searchInput.value);
                });
                
                // Search when Enter key is pressed
                searchInput.addEventListener('keypress', function(event) {
                    if (event.key === 'Enter') {
                        searchLogs(tabPrefix, searchInput.value);
                    }
                });
            }
        }
        
        // Function to search logs
        function searchLogs(tabPrefix, searchTerm) {
            if (!searchTerm.trim()) {
                showNotification('Please enter a search term.', 'warning');
                return;
            }
            
            console.log(`Searching ${tabPrefix} logs for: ${searchTerm}`);
            
            // Get all rows in the table
            const table = document.querySelector(`#${tabPrefix}-content .${tabPrefix}-table table`);
            const rows = table.querySelectorAll('tbody tr');
            
            let matchCount = 0;
            
            // Loop through all rows and hide/show based on search term
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const match = text.includes(searchTerm.toLowerCase());
                
                if (match) {
                    row.style.display = '';
                    matchCount++;
                    
                    // Highlight the search term
                    highlightSearchTerm(row, searchTerm);
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Show notification with results
            if (matchCount > 0) {
                showNotification(`Found ${matchCount} matching records.`, 'success');
            } else {
                showNotification('No records match your search.', 'info');
            }
        }
        
        // Function to highlight search terms in a row
        function highlightSearchTerm(row, searchTerm) {
            // For each text node in the row
            const walker = document.createTreeWalker(
                row,
                NodeFilter.SHOW_TEXT,
                null,
                false
            );
            
            const regex = new RegExp(searchTerm.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'), 'gi');
            const nodes = [];
            let node;
            
            // Collect all text nodes
            while (node = walker.nextNode()) {
                nodes.push(node);
            }
            
            // Process each text node
            nodes.forEach(textNode => {
                const parent = textNode.parentNode;
                const text = textNode.nodeValue;
                
                // Skip if parent is already a highlight
                if (parent.classList && parent.classList.contains('search-highlight')) {
                    return;
                }
                
                // Replace match with highlighted version
                const replacedText = text.replace(regex, match => `<span class="search-highlight" style="background-color: yellow;">${match}</span>`);
                
                // Only replace if there was a match
                if (replacedText !== text) {
                    const tempElement = document.createElement('div');
                    tempElement.innerHTML = replacedText;
                    
                    // Add all new children before the text node
                    while (tempElement.firstChild) {
                        parent.insertBefore(tempElement.firstChild, textNode);
                    }
                    
                    // Remove the original text node
                    parent.removeChild(textNode);
                }
            });
        }
        
        // Function to clear search highlights
        function clearSearchHighlights() {
            document.querySelectorAll('.search-highlight').forEach(highlight => {
                const parent = highlight.parentNode;
                const text = highlight.textContent;
                const textNode = document.createTextNode(text);
                parent.insertBefore(textNode, highlight);
                parent.removeChild(highlight);
            });
        }
        
        // Function to update summary data based on filters
        function updateSummaryData(tabPrefix, monthValue, weekValue = 'all') {
            // This function would typically update the summary cards with new data
            // For now, we'll just log the action
            console.log(`Updating ${tabPrefix} summary data: Month=${monthValue}, Week=${weekValue}`);
            
            // In a real implementation, you would make an AJAX call here to get updated summary data
            // and then update the DOM with the new values
            
            // Simulate loading state
            document.querySelectorAll(`#${tabPrefix}-content .card-body .row span`).forEach(span => {
                const originalText = span.textContent;
                span.innerHTML = '<small><i class="fas fa-spinner fa-spin me-1"></i>Loading...</small>';
                
                // Simulate loading time and then restore with "new" data
                setTimeout(() => {
                    // This is where you would update with actual data from the server
                    span.innerHTML = originalText;
                }, 500);
            });
            
            // Reset search
            const searchInput = document.getElementById(`${tabPrefix}SearchInput`);
            if (searchInput) {
                searchInput.value = '';
            }
            
            // Clear any search highlights and show all rows
            clearSearchHighlights();
            document.querySelectorAll(`#${tabPrefix}-content .${tabPrefix}-table table tbody tr`).forEach(row => {
                row.style.display = '';
            });
        }
    });
</script>
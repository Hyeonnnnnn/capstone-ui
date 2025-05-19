<?php
// Page title for the sidebar
$pageTitle = "Manage Customers";
?>

<!-- Manage Customers Page -->
<div class="manage-customers-container">
    <!-- Membership Type Tabs -->
    <ul class="nav nav-tabs membership-tabs mb-4" id="membershipTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="day-pass-tab" data-bs-toggle="tab" data-bs-target="#day-pass-content" type="button" role="tab" aria-controls="day-pass-content" aria-selected="true">DAY-PASS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly-content" type="button" role="tab" aria-controls="monthly-content" aria-selected="false">MONTHLY</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="annually-tab" data-bs-toggle="tab" data-bs-target="#annually-content" type="button" role="tab" aria-controls="annually-content" aria-selected="false">ANNUALLY</button>
        </li>
    </ul>

    <!-- Search and Add Customer -->
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control search-input" placeholder="Search customer..." id="customerSearch">
                <button class="btn btn-outline-secondary search-btn" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-primary add-btn" id="addCustomerBtn">
                <i class="fas fa-plus me-2"></i> ADD ACCOUNT
            </button>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="tab-content" id="membershipTabsContent">
        <!-- DAY PASS Tab Content -->
        <div class="tab-pane fade show active" id="day-pass-content" role="tabpanel" aria-labelledby="day-pass-tab">
            <div class="row">
                <!-- Customer List -->
                <div class="col-md-8">
                    <div class="customer-list">
                        <div class="customer-list-header">
                            <div class="row align-items-center">
                                <div class="col-md-6">Name</div>
                                <div class="col-md-6 text-end">Actions</div>
                            </div>
                        </div>
                        <div class="customer-list-body" id="dayPassCustomerList">
                            <!-- Day Pass Customers will be loaded here -->
                            <div class="customer-item" data-customer-id="dp1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Dela Cruz, Catherine Rose G.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="dp2">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Fernandez, Michael Anthony S.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="dp3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Gonzales, Andrew Joseph R.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="dp4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Mendoza, Robert Stephen S.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="dp5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Reyes, Angela Marie M.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Details -->
                <div class="col-md-4">
                    <div class="customer-card" id="customerDetailsDayPass">
                        <div class="customer-card-photo">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Customer Photo" class="customer-photo">
                        </div>                        <div class="customer-card-details">
                            <div class="customer-info-item name-row">
                                <div class="name-field">
                                    <span class="customer-label">Last name:</span>
                                    <span class="customer-value">Dela Cruz</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">First name:</span>
                                    <span class="customer-value">Catherine Rose</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">Middle name:</span>
                                    <span class="customer-value">Gonzales</span>
                                </div>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Email:</span>
                                <span class="customer-value">catherinerg@gmail.com</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Contact number:</span>
                                <span class="customer-value">09239503864</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MONTHLY Tab Content -->
        <div class="tab-pane fade" id="monthly-content" role="tabpanel" aria-labelledby="monthly-tab">
            <div class="row">
                <!-- Customer List -->
                <div class="col-md-8">
                    <div class="customer-list">
                        <div class="customer-list-header">
                            <div class="row align-items-center">
                                <div class="col-md-6">Name</div>
                                <div class="col-md-6 text-end">Actions</div>
                            </div>
                        </div>
                        <div class="customer-list-body" id="monthlyCustomerList">
                            <!-- Monthly Customers will be loaded here -->
                            <div class="customer-item" data-customer-id="m1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Dela Cruz, Juan M.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="m2">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Reyes, Maria C.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="m3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Santos, Pedro L.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="m4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Gonzales, Anna R.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Details with QR Code -->
                <div class="col-md-4">
                    <div class="customer-card" id="customerDetailsMonthly">
                        <div class="customer-card-content">
                            <div class="customer-card-photo">
                                <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Customer Photo" class="customer-photo">
                            </div>
                            <div class="customer-qr-code">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=MonthlyMember1" alt="QR Code" class="qr-code-img">
                            </div>
                        </div>                        <div class="customer-card-details">
                            <div class="customer-info-item name-row">
                                <div class="name-field">
                                    <span class="customer-label">Last name:</span>
                                    <span class="customer-value">Dela Cruz</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">First name:</span>
                                    <span class="customer-value">Juan</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">Middle name:</span>
                                    <span class="customer-value">Mendoza</span>
                                </div>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Email:</span>
                                <span class="customer-value">juandelacruz@gmail.com</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Contact number:</span>
                                <span class="customer-value">09239503864</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Start:</span>
                                <span class="customer-value">April 3, 2025</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">End:</span>
                                <span class="customer-value">May 3, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ANNUALLY Tab Content -->
        <div class="tab-pane fade" id="annually-content" role="tabpanel" aria-labelledby="annually-tab">
            <div class="row">
                <!-- Customer List -->
                <div class="col-md-8">
                    <div class="customer-list">
                        <div class="customer-list-header">
                            <div class="row align-items-center">
                                <div class="col-md-6">Name</div>
                                <div class="col-md-6 text-end">Actions</div>
                            </div>
                        </div>
                        <div class="customer-list-body" id="annuallyCustomerList">
                            <!-- Annual Customers will be loaded here -->
                            <div class="customer-item" data-customer-id="a1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Bautista, Carlo S.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="a2">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Mendoza, Luis T.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="a3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Fernandez, Erika J.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-item" data-customer-id="a4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">Ramirez, Daniel P.</div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-sm btn-light edit-btn" title="Edit Customer">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light delete-btn" title="Delete Customer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Details with QR Code -->
                <div class="col-md-4">
                    <div class="customer-card" id="customerDetailsAnnually">
                        <div class="customer-card-content">
                            <div class="customer-card-photo">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer Photo" class="customer-photo">
                            </div>
                            <div class="customer-qr-code">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=AnnualMember1" alt="QR Code" class="qr-code-img">
                            </div>
                        </div>                        <div class="customer-card-details">
                            <div class="customer-info-item name-row">
                                <div class="name-field">
                                    <span class="customer-label">Last name:</span>
                                    <span class="customer-value">Bautista</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">First name:</span>
                                    <span class="customer-value">Carlo</span>
                                </div>
                                <div class="name-field">
                                    <span class="customer-label">Middle name:</span>
                                    <span class="customer-value">Santos</span>
                                </div>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Email:</span>
                                <span class="customer-value">carlo.bautista@gmail.com</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Contact number:</span>
                                <span class="customer-value">09187654321</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">Start:</span>
                                <span class="customer-value">May 18, 2024</span>
                            </div>
                            <div class="customer-info-item">
                                <span class="customer-label">End:</span>
                                <span class="customer-value">May 18, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Customer Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customerModalLabel">
                    <i class="fas fa-user-plus me-2"></i> Add New Customer
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="customerForm">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="customerFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="customerFirstName" required>
                        </div>
                        <div class="col-md-4">
                            <label for="customerMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="customerMiddleName">
                        </div>
                        <div class="col-md-4">
                            <label for="customerLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="customerLastName" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="customerEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="customerEmail" required>
                        </div>
                        <div class="col-md-6">
                            <label for="customerPhone" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="customerPhone" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="membershipType" class="form-label">Membership Type</label>
                            <select class="form-select" id="membershipType" required>
                                <option value="">Select membership type</option>
                                <option value="day-pass">Day Pass</option>
                                <option value="monthly">Monthly</option>
                                <option value="annually">Annually</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" required>
                        </div>
                        <div class="col-md-4">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="customerPhoto" class="form-label">Customer Photo</label>
                        <input type="file" class="form-control" id="customerPhoto" accept="image/*">
                    </div>
                </form>
            </div>            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn gradient-btn" id="saveCustomerBtn">Save Customer</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Manage Customers Styles */
    .manage-customers-container {
        padding: 0;
    }

    /* Tab styling */
    .membership-tabs {
        background-color: #e9e9e9;
        border-radius: 10px;
        padding: 8px;
        border: none;
    }

    .membership-tabs .nav-link {
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        color: #333;
        margin-right: 5px;
    }    .membership-tabs .nav-link.active {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Search input styling */
    .search-input {
        border-radius: 8px 0 0 8px;
        padding: 12px 20px;
    }

    .search-btn {
        border-radius: 0 8px 8px 0;
        padding: 12px 20px;
    }    /* Add button styling */
    .add-btn {
        padding: 12px 25px;
        border-radius: 8px;
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .add-btn:hover {
        background: linear-gradient(135deg, #8e44ad 0%, var(--primary) 100%);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Customer list styling */
    .customer-list {
        background-color: var(--white);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }    .customer-list-header {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        padding: 15px 20px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .customer-list-body {
        padding: 0;
    }

    .customer-item {
        padding: 15px 20px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .customer-item:last-child {
        border-bottom: none;
    }

    .customer-item:hover {
        background-color: rgba(120, 46, 157, 0.05);
    }    .customer-item.active {
        background: linear-gradient(to right, rgba(120, 46, 157, 0.05), rgba(142, 68, 173, 0.1));
        border-left: 4px solid var(--primary);
    }/* Customer detail card styling */
    .customer-card {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        border-radius: 15px;
        overflow: hidden;
        color: white;
        height: 100%;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .customer-card-photo {
        text-align: center;
        padding: 20px 0;
    }

    .customer-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid white;
    }

    .customer-card-details {
        padding: 20px;
    }

    .customer-info-item {
        margin-bottom: 10px;
    }

    .customer-label {
        font-weight: 500;
        display: block;
        font-size: 0.85rem;
    }    .customer-value {
        font-weight: 600;
        font-size: 1rem;
    }
    
    /* Name row styling */
    .name-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 20px;
    }
    
    .name-field {
        flex: 1;
        min-width: 120px;
    }/* QR code for monthly/annually members */
    .customer-card-content {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        gap: 20px;
    }

    .customer-qr-code {
        text-align: center;
    }

    .qr-code-img {
        width: 110px;
        height: 110px;
        background-color: white;
        padding: 5px;
        border-radius: 5px;
    }

    /* Responsive adjustments */    @media (max-width: 767.98px) {
        .customer-card-content {
            flex-direction: column;
        }
        
        .customer-qr-code {
            margin-left: 0;
            margin-top: 15px;
        }
    }
    
    /* Gradient button styling */
    .gradient-btn {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .gradient-btn:hover {
        background: linear-gradient(135deg, #8e44ad 0%, var(--primary) 100%);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize customer selection
        initCustomerSelection();
        
        // Add customer button click handler
        document.getElementById('addCustomerBtn').addEventListener('click', function() {
            // Reset form
            document.getElementById('customerForm').reset();
            
            // Update modal title
            document.getElementById('customerModalLabel').innerHTML = '<i class="fas fa-user-plus me-2"></i> Add New Customer';
            
            // Show modal
            new bootstrap.Modal(document.getElementById('customerModal')).show();
        });
        
        // Save customer button click handler
        document.getElementById('saveCustomerBtn').addEventListener('click', function() {
            // Here you would normally validate the form and save the customer data
            // For demo purposes, we'll just close the modal
            bootstrap.Modal.getInstance(document.getElementById('customerModal')).hide();
            
            // Show success alert
            alert('Customer saved successfully!');
        });
        
        // Membership type change handler
        document.getElementById('membershipType').addEventListener('change', function() {
            const startDateInput = document.getElementById('startDate');
            const endDateInput = document.getElementById('endDate');
            
            if (this.value === 'day-pass') {
                // Set start and end date to today for day pass
                const today = new Date().toISOString().split('T')[0];
                startDateInput.value = today;
                endDateInput.value = today;
                
                // Disable date inputs for day pass
                startDateInput.disabled = true;
                endDateInput.disabled = true;
            } else {
                // Enable date inputs for monthly and annually memberships
                startDateInput.disabled = false;
                endDateInput.disabled = false;
                
                // Set default dates
                const today = new Date();
                startDateInput.value = today.toISOString().split('T')[0];
                
                if (this.value === 'monthly') {
                    // Set end date to 30 days from today
                    const endDate = new Date();
                    endDate.setDate(today.getDate() + 30);
                    endDateInput.value = endDate.toISOString().split('T')[0];
                } else if (this.value === 'annually') {
                    // Set end date to 365 days from today
                    const endDate = new Date();
                    endDate.setDate(today.getDate() + 365);
                    endDateInput.value = endDate.toISOString().split('T')[0];
                }
            }
        });
    });
      function initCustomerSelection() {
        // Customer data for demo purposes
        const dayPassCustomersData = {
            "dp1": {
                photo: "https://randomuser.me/api/portraits/women/65.jpg",
                lastName: "Dela Cruz",
                firstName: "Catherine Rose",
                middleName: "Gonzales",
                email: "catherinerg@gmail.com",
                phone: "09239503864"
            },
            "dp2": {
                photo: "https://randomuser.me/api/portraits/men/22.jpg",
                lastName: "Fernandez",
                firstName: "Michael Anthony",
                middleName: "Santos",
                email: "michael.fernandez@gmail.com",
                phone: "09182763451"
            },
            "dp3": {
                photo: "https://randomuser.me/api/portraits/men/33.jpg",
                lastName: "Gonzales",
                firstName: "Andrew Joseph",
                middleName: "Reyes",
                email: "andrew.gonzales@gmail.com",
                phone: "09337654231"
            },
            "dp4": {
                photo: "https://randomuser.me/api/portraits/men/45.jpg",
                lastName: "Mendoza",
                firstName: "Robert Stephen",
                middleName: "Santos",
                email: "robert.mendoza@gmail.com",
                phone: "09998887766"
            },
            "dp5": {
                photo: "https://randomuser.me/api/portraits/women/43.jpg",
                lastName: "Reyes",
                firstName: "Angela Marie",
                middleName: "Mendoza",
                email: "angela.reyes@gmail.com",
                phone: "09123456789"
            }
        };
        
        const monthlyCustomersData = {
            "m1": {
                photo: "https://randomuser.me/api/portraits/men/54.jpg",
                lastName: "Dela Cruz",
                firstName: "Juan",
                middleName: "Mendoza",
                email: "juandelacruz@gmail.com",
                phone: "09239503864",
                start: "April 3, 2025",
                end: "May 3, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=MonthlyMember1"
            },
            "m2": {
                photo: "https://randomuser.me/api/portraits/women/28.jpg",
                lastName: "Reyes",
                firstName: "Maria",
                middleName: "Cruz",
                email: "maria.reyes@gmail.com",
                phone: "09187654321",
                start: "April 15, 2025",
                end: "May 15, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=MonthlyMember2"
            },
            "m3": {
                photo: "https://randomuser.me/api/portraits/men/18.jpg",
                lastName: "Santos",
                firstName: "Pedro",
                middleName: "Luna",
                email: "pedro.santos@gmail.com",
                phone: "09234567890",
                start: "April 20, 2025",
                end: "May 20, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=MonthlyMember3"
            },
            "m4": {
                photo: "https://randomuser.me/api/portraits/women/37.jpg",
                lastName: "Gonzales",
                firstName: "Anna",
                middleName: "Reyes",
                email: "anna.gonzales@gmail.com",
                phone: "09876543210",
                start: "April 10, 2025",
                end: "May 10, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=MonthlyMember4"
            }
        };
        
        const annuallyCustomersData = {
            "a1": {
                photo: "https://randomuser.me/api/portraits/men/32.jpg",
                lastName: "Bautista",
                firstName: "Carlo",
                middleName: "Santos",
                email: "carlo.bautista@gmail.com",
                phone: "09187654321",
                start: "May 18, 2024",
                end: "May 18, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=AnnualMember1"
            },
            "a2": {
                photo: "https://randomuser.me/api/portraits/men/47.jpg",
                lastName: "Mendoza",
                firstName: "Luis",
                middleName: "Torres",
                email: "luis.mendoza@gmail.com",
                phone: "09123456789",
                start: "June 5, 2024",
                end: "June 5, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=AnnualMember2"
            },
            "a3": {
                photo: "https://randomuser.me/api/portraits/women/57.jpg",
                lastName: "Fernandez",
                firstName: "Erika",
                middleName: "Jimenez",
                email: "erika.fernandez@gmail.com",
                phone: "09555444333",
                start: "July 12, 2024",
                end: "July 12, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=AnnualMember3"
            },
            "a4": {
                photo: "https://randomuser.me/api/portraits/men/67.jpg",
                lastName: "Ramirez",
                firstName: "Daniel",
                middleName: "Pascual",
                email: "daniel.ramirez@gmail.com",
                phone: "09998887777",
                start: "August 3, 2024",
                end: "August 3, 2025",
                qrCode: "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=AnnualMember4"
            }
        };

        // Day Pass tab customers
        const dayPassCustomers = document.querySelectorAll('#dayPassCustomerList .customer-item');
        dayPassCustomers.forEach(item => {
            const customerId = item.getAttribute('data-customer-id');
            const nameElement = item.querySelector('.col-md-6:first-child');
            
            // Make the name element clickable
            nameElement.style.cursor = 'pointer';
            nameElement.style.color = '#451968';
            nameElement.style.fontWeight = '600';
            
            nameElement.addEventListener('click', function() {
                // Remove active class from all items
                dayPassCustomers.forEach(i => i.classList.remove('active'));
                
                // Add active class to clicked item
                item.classList.add('active');
                
                // Update customer details card with the selected customer data
                if (dayPassCustomersData[customerId]) {
                    const customer = dayPassCustomersData[customerId];
                    const detailsCard = document.getElementById('customerDetailsDayPass');
                    
                    // Update photo
                    detailsCard.querySelector('.customer-photo').src = customer.photo;                    // Update customer details
                    const nameFields = detailsCard.querySelectorAll('.name-field');
                    nameFields[0].querySelector('.customer-value').textContent = customer.lastName;
                    nameFields[1].querySelector('.customer-value').textContent = customer.firstName;
                    nameFields[2].querySelector('.customer-value').textContent = customer.middleName;
                    
                    const detailsItems = detailsCard.querySelectorAll('.customer-info-item:not(.name-row)');
                    detailsItems[0].querySelector('.customer-value').textContent = customer.email;
                    detailsItems[1].querySelector('.customer-value').textContent = customer.phone;
                    
                    detailsCard.style.display = 'block';
                }
            });
        });
        
        // Monthly tab customers
        const monthlyCustomers = document.querySelectorAll('#monthlyCustomerList .customer-item');
        monthlyCustomers.forEach(item => {
            const customerId = item.getAttribute('data-customer-id');
            const nameElement = item.querySelector('.col-md-6:first-child');
            
            // Make the name element clickable
            nameElement.style.cursor = 'pointer';
            nameElement.style.color = '#451968';
            nameElement.style.fontWeight = '600';
            
            nameElement.addEventListener('click', function() {
                // Remove active class from all items
                monthlyCustomers.forEach(i => i.classList.remove('active'));
                
                // Add active class to clicked item
                item.classList.add('active');
                  // Update customer details card with the selected customer data
                if (monthlyCustomersData[customerId]) {
                    const customer = monthlyCustomersData[customerId];
                    const detailsCard = document.getElementById('customerDetailsMonthly');
                    
                    // Update photo and QR code
                    detailsCard.querySelector('.customer-photo').src = customer.photo;
                    detailsCard.querySelector('.qr-code-img').src = customer.qrCode;
                    
                    // Update customer details
                    const nameFields = detailsCard.querySelectorAll('.name-field');
                    nameFields[0].querySelector('.customer-value').textContent = customer.lastName;
                    nameFields[1].querySelector('.customer-value').textContent = customer.firstName;
                    nameFields[2].querySelector('.customer-value').textContent = customer.middleName;
                    
                    const detailsItems = detailsCard.querySelectorAll('.customer-info-item:not(.name-row)');
                    detailsItems[0].querySelector('.customer-value').textContent = customer.email;
                    detailsItems[1].querySelector('.customer-value').textContent = customer.phone;
                    detailsItems[2].querySelector('.customer-value').textContent = customer.start;
                    detailsItems[3].querySelector('.customer-value').textContent = customer.end;
                    
                    detailsCard.style.display = 'block';
                }
            });
        });
        
        // Annually tab customers
        const annuallyCustomers = document.querySelectorAll('#annuallyCustomerList .customer-item');
        annuallyCustomers.forEach(item => {
            const customerId = item.getAttribute('data-customer-id');
            const nameElement = item.querySelector('.col-md-6:first-child');
            
            // Make the name element clickable
            nameElement.style.cursor = 'pointer';
            nameElement.style.color = '#451968';
            nameElement.style.fontWeight = '600';
            
            nameElement.addEventListener('click', function() {
                // Remove active class from all items
                annuallyCustomers.forEach(i => i.classList.remove('active'));
                
                // Add active class to clicked item
                item.classList.add('active');
                  // Update customer details card with the selected customer data
                if (annuallyCustomersData[customerId]) {
                    const customer = annuallyCustomersData[customerId];
                    const detailsCard = document.getElementById('customerDetailsAnnually');
                    
                    // Update photo and QR code
                    detailsCard.querySelector('.customer-photo').src = customer.photo;
                    detailsCard.querySelector('.qr-code-img').src = customer.qrCode;
                    
                    // Update customer details
                    const nameFields = detailsCard.querySelectorAll('.name-field');
                    nameFields[0].querySelector('.customer-value').textContent = customer.lastName;
                    nameFields[1].querySelector('.customer-value').textContent = customer.firstName;
                    nameFields[2].querySelector('.customer-value').textContent = customer.middleName;
                    
                    const detailsItems = detailsCard.querySelectorAll('.customer-info-item:not(.name-row)');
                    detailsItems[0].querySelector('.customer-value').textContent = customer.email;
                    detailsItems[1].querySelector('.customer-value').textContent = customer.phone;
                    detailsItems[2].querySelector('.customer-value').textContent = customer.start;
                    detailsItems[3].querySelector('.customer-value').textContent = customer.end;
                    
                    detailsCard.style.display = 'block';
                }
            });
        });
        
        // Simulate click on first item in each list to show initial data
        if (dayPassCustomers.length > 0) {
            dayPassCustomers[0].querySelector('.col-md-6:first-child').click();
        }
        if (monthlyCustomers.length > 0) {
            monthlyCustomers[0].querySelector('.col-md-6:first-child').click();
        }
        if (annuallyCustomers.length > 0) {
            annuallyCustomers[0].querySelector('.col-md-6:first-child').click();
        }
    }
</script>
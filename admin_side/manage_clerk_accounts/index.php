<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Page title for the sidebar
$pageTitle = "Manage Clerk Accounts";

// Database connection would go here in a production environment
// include("../../config/db_connect.php");

// Sample clerk data - in a real application, this would come from a database
$clerks = [
    [
        'id' => 1,
        'firstName' => 'Christine',
        'middleName' => 'C',
        'lastName' => 'Degamo',
        'email' => 'christine.degamo@example.com',
        'password' => 'password123', // In production, this would be hashed
        'hireDate' => '2025-05-12',
        'image' => '../images/staff/clerk_female_1.jpg',
        'isActive' => true
    ],
    [
        'id' => 2,
        'firstName' => 'John',
        'middleName' => 'S',
        'lastName' => 'Smith',
        'email' => 'john.smith@example.com',
        'password' => 'password456', // In production, this would be hashed
        'hireDate' => '2025-05-15',
        'image' => '../images/staff/clerk_male_1.jpg',
        'isActive' => true
    ]
];

// Format date helper function
function formatDate($dateString) {
    try {
        $date = new DateTime($dateString);
        return $date->format('F j, Y');
    } catch (Exception $e) {
        // Return the original string if it can't be parsed as a date
        return $dateString;
    }
}
?>

<!-- Manage Clerk Accounts Page -->
<div class="manage-clerk-accounts-container">
    <div class="page-header">
        <h2><i class="fas fa-user-tie me-2"></i><?php echo $pageTitle; ?></h2>
        <button class="btn btn-primary add-btn-lg" data-bs-toggle="modal" data-bs-target="#addClerkModal">
            <i class="fas fa-user-plus btn-icon"></i> Add New Clerk
        </button>
    </div>
    
    <!-- Clerk List Section -->
      <div class="row" id="clerk-cards">            <!-- Clerk Cards will be generated dynamically via PHP -->        <?php foreach($clerks as $clerk): ?>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card clerk-card shadow-sm h-100" data-id="<?php echo $clerk['id']; ?>" onclick="showClerkDetails(<?php echo $clerk['id']; ?>)">
                    <div class="card-body text-center">
                        <img src="<?php echo $clerk['image']; ?>" class="profile-image mb-3" 
                             alt="<?php echo $clerk['firstName'] . ' ' . $clerk['lastName']; ?>">
                        <h5 class="card-title clerk-name">
                            <?php echo $clerk['lastName'] . ', ' . $clerk['firstName'] . ' ' . 
                            ($clerk['middleName'] ? $clerk['middleName'][0] . '.' : ''); ?>
                        </h5>
                        <p class="card-text">Hired: <?php echo formatDate($clerk['hireDate']); ?></p>
                        <p class="card-text">
                            <span class="badge <?php echo $clerk['isActive'] ? 'bg-success' : 'bg-danger'; ?>">
                                <?php echo $clerk['isActive'] ? 'Active' : 'Inactive'; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
      <!-- Clerk content area -->
    
    <!-- Floating Add Button for Mobile -->
    <button class="btn btn-primary add-btn d-md-none" data-bs-toggle="modal" data-bs-target="#addClerkModal">
        <i class="fas fa-plus"></i>
    </button>
</div>

<!-- Clerk Details Modal -->
<div class="modal fade" id="clerkDetailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-id-card me-2"></i>
                    <span>Clerk Details</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">                    <div class="col-md-4 text-center">
                        <div class="profile-card p-3 rounded-4 shadow-sm mb-3">
                            <img id="modalClerkImage" src="../images/staff/clerk_male_1.jpg" 
                                 class="img-fluid rounded-circle mb-3 border border-4 border-white shadow" alt="Clerk Photo" 
                                 style="width: 150px; height: 150px; object-fit: cover;">
                            <h4 id="modalClerkName" class="fw-bold">Clerk Name</h4>
                            <div id="modalClerkStatus" class="mb-3"></div>
                            <div id="modalClerkEmail" class="text-muted small mb-2">
                                <i class="fas fa-envelope me-2"></i><span>email@example.com</span>
                            </div>
                            <div id="modalClerkHireDate" class="text-muted small">
                                <i class="fas fa-calendar-alt me-2"></i><span>Hire Date</span>
                            </div>
                        </div>
                    </div>                    <div class="col-md-8">
                        <ul class="nav nav-tabs nav-tabs-modern" id="clerkDetailsTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" 
                                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-selected="true">
                                    <i class="fas fa-user me-2"></i>Profile Information
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="account-tab" data-bs-toggle="tab" 
                                        data-bs-target="#account-tab-pane" type="button" role="tab" aria-selected="false">
                                    <i class="fas fa-shield-alt me-2"></i>Account Details
                                </button>
                            </li>
                        </ul>
                          <div class="tab-content p-4 border border-top-0 rounded-bottom shadow-sm" id="clerkDetailsTabContent">
                            <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <form id="clerkDetailsForm">
                                    <input type="hidden" id="clerkId">
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label for="firstName" class="form-label">
                                                <i class="fas fa-user me-1 text-primary"></i> First Name
                                            </label>
                                            <input type="text" class="form-control bg-light" id="firstName" readonly>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="middleName" class="form-label">
                                                <i class="fas fa-user-plus me-1 text-primary"></i> Middle Name
                                            </label>
                                            <input type="text" class="form-control bg-light" id="middleName" readonly>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="lastName" class="form-label">
                                                <i class="fas fa-user me-1 text-primary"></i> Last Name
                                            </label>
                                            <input type="text" class="form-control bg-light" id="lastName" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="email" class="form-label">
                                            <i class="fas fa-envelope me-1 text-primary"></i> Email Address
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-envelope"></i></span>
                                            <input type="email" class="form-control bg-light" id="email" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="hireDate" class="form-label">
                                            <i class="fas fa-calendar-alt me-1 text-primary"></i> Hire Date
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-calendar-alt"></i></span>
                                            <input type="date" class="form-control bg-light" id="hireDate" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                              <div class="tab-pane fade" id="account-tab-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">
                                <div class="card border-0 shadow-sm mb-4">
                                    <div class="card-header bg-light">
                                        <i class="fas fa-key me-2 text-primary"></i>
                                        <span class="fw-bold">Password Information</span>
                                    </div>
                                    <div class="card-body">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control bg-light" id="password" readonly>
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <small class="form-text text-muted">
                                            <i class="fas fa-info-circle"></i>
                                            For security reasons, passwords should be regularly updated.
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-header bg-light">
                                        <i class="fas fa-user-shield me-2 text-primary"></i>
                                        <span class="fw-bold">Account Status</span>
                                    </div>
                                    <div class="card-body">
                                        <div id="accountStatusBadge" class="p-2"></div>
                                    </div>
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                    <button type="button" class="btn btn-outline-primary" id="editClerkBtn">
                                        <i class="fas fa-edit me-2"></i> Edit Clerk Information
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" id="closeDetailsModalBtn">
                    <i class="fas fa-times me-1"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add Clerk Modal -->
<div class="modal fade" id="addClerkModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-user-plus me-2"></i>
                    <span>Add New Clerk</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addClerkForm" class="needs-validation" novalidate>                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="newFirstName" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="newFirstName" required>
                            <div class="invalid-feedback">
                                Please enter a first name.
                            </div>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="newMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="newMiddleName">
                            <div class="form-text">Optional</div>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="newLastName" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="newLastName" required>
                            <div class="invalid-feedback">
                                Please enter a last name.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="newGender" class="form-label">Gender *</label>
                            <select class="form-select" id="newGender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select gender.
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="newEmail" class="form-label">Email Address *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="newEmail" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="newPassword" class="form-label">Password *</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="newPassword" required 
                                       pattern=".{8,}" title="Password must be at least 8 characters">
                                <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Password must be at least 8 characters.
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password *</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirmPassword" required>
                                <div class="invalid-feedback">
                                    Passwords do not match.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="newHireDate" class="form-label">Hire Date *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" id="newHireDate" required>
                            <div class="invalid-feedback">
                                Please select a hire date.
                            </div>
                        </div>
                    </div>
                      <div class="mb-3">
                        <label class="form-label">Profile Photo Preview</label>
                        <div class="text-center mb-3">
                            <img id="profilePreview" src="../images/staff/clerk_male_1.jpg" class="img-fluid rounded-circle mb-2" 
                                 style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.1);" alt="Profile Preview">
                        </div>
                        <div class="small text-muted text-center">
                            Profile photo will be automatically assigned based on gender selection
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newIsActive" checked>
                            <label class="form-check-label" for="newIsActive">
                                Account Active
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Cancel
                </button>
                <button type="button" class="btn btn-primary" id="saveNewClerkBtn">
                    <i class="fas fa-save me-1"></i> Save Clerk
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Clerk Modal -->
<div class="modal fade" id="editClerkModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-user-edit me-2"></i>
                    <span>Edit Clerk</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editClerkForm" class="needs-validation" novalidate>
                    <input type="hidden" id="editClerkId">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="editFirstName" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="editFirstName" required>
                            <div class="invalid-feedback">
                                Please enter a first name.
                            </div>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="editMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="editMiddleName">
                            <div class="form-text">Optional</div>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="editLastName" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="editLastName" required>
                            <div class="invalid-feedback">
                                Please enter a last name.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="editGender" class="form-label">Gender *</label>
                            <select class="form-select" id="editGender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select gender.
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email Address *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="editEmail" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="editPassword"
                                   pattern=".{8,}" title="Password must be at least 8 characters">
                            <button class="btn btn-outline-secondary" type="button" id="toggleEditPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <small class="form-text text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Leave blank if you don't want to change the password. New password must be at least 8 characters.
                        </small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="editHireDate" class="form-label">Hire Date *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" id="editHireDate" required>
                            <div class="invalid-feedback">
                                Please select a hire date.
                            </div>
                        </div>
                    </div>
                      <div class="mb-3">
                        <label class="form-label">Profile Photo Preview</label>
                        <div class="text-center mb-3">
                            <img id="editProfilePreview" src="" class="img-fluid rounded-circle mb-2" 
                                 style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.1);" alt="Profile Preview">
                        </div>
                        <div class="small text-muted text-center">
                            Profile photo will be automatically updated if gender selection changes
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="isActive" checked>
                            <label class="form-check-label" for="isActive">
                                <span class="badge bg-success">Active</span> / <span class="badge bg-danger">Inactive</span> Status
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Cancel
                </button>
                <button type="button" class="btn btn-primary" id="updateClerkBtn">
                    <i class="fas fa-save me-1"></i> Update Clerk
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteClerkModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <span>Delete Confirmation</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="deleteClerkId">
                <p>Are you sure you want to delete this clerk account? This action cannot be undone.</p>
                <div class="alert alert-warning">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Note:</strong> Alternatively, you can set the clerk's status to inactive instead of deleting.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Cancel
                </button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">
                    <i class="fas fa-trash-alt me-1"></i> Delete Permanently
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styling for the clerk management page to match other admin pages */
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
    
    .manage-clerk-accounts-container {
        padding: 20px;
    }
    
    .page-header {
        border-bottom: 2px solid var(--medium-gray);
        padding-bottom: 15px;
        margin-bottom: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .page-header h2 {
        color: var(--primary-dark);
        margin: 0;
    }
    
    .add-btn-lg {
        background: var(--gradient-primary);
        border: none;
    }
    
    .add-btn-lg:hover {
        background: var(--primary-dark);
    }
    
    .search-input {
        border-right: none;
    }
    
    .search-btn {
        background-color: var(--white);
        border-left: none;
    }
    
    .search-btn:hover {
        background-color: var(--light-gray);
    }      .clerk-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 10px;
        background-color: var(--light-gray);
        cursor: pointer;
    }
    
    .clerk-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .profile-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid var(--white);
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .clerk-name {
        font-weight: 600;
        color: var(--primary-dark);
    }
    
    .modal-header {
        background: var(--gradient-primary);
        color: var(--white);
    }
      .nav-tabs-modern {
        border-bottom: 2px solid var(--medium-gray);
    }
    
    .nav-tabs-modern .nav-link {
        border: none;
        color: var(--dark-gray);
        padding: 12px 18px;
        margin-right: 5px;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }
    
    .nav-tabs-modern .nav-link.active {
        color: var(--primary);
        background-color: transparent;
        border-bottom: 3px solid var(--primary);
        font-weight: 600;
    }
    
    .nav-tabs-modern .nav-link:not(.active):hover {
        background-color: rgba(69, 25, 104, 0.05);
        border-bottom: 3px solid rgba(69, 25, 104, 0.1);
    }
    
    .profile-card {
        background-color: var(--white);
        transition: all 0.3s ease;
        border-left: 4px solid var(--primary);
    }
    
    .profile-card:hover {
        box-shadow: 0 8px 25px rgba(69, 25, 104, 0.1) !important;
    }
    
    .form-label {
        font-weight: 500;
        color: var(--dark-gray);
    }
    
    .btn-primary {
        background: var(--gradient-primary);
        border: none;
    }
    
    .btn-primary:hover {
        background: var(--primary-dark);
    }
    
    .add-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        font-size: 24px;
        background: var(--gradient-primary);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .add-btn:hover {
        transform: scale(1.1);
        background: var(--primary-dark);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    
    .input-group-text {
        cursor: pointer;
    }
</style>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (needed for some Bootstrap functionality) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert2 for better alerts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Debug utilities -->
<script src="../debug-log.js"></script>

<!-- Emergency modal fix script -->
<script src="../modal-fix.js"></script>

<script>
    // Sample clerk data - already defined in PHP at the top
    let clerks = <?php echo json_encode($clerks); ?>;
      // Document ready handler
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize search and filter functionality
        initializeSearch();
        
        // Set today's date as the default for the new hire date
        document.getElementById('newHireDate').valueAsDate = new Date();
        
        // Initialize form validation
        initializeFormValidation();
        
        // Add event listener to ensure modal cleanup when hidden
        const clerkDetailsModal = document.getElementById('clerkDetailsModal');
        clerkDetailsModal.addEventListener('hidden.bs.modal', function () {
            console.log('Modal hidden event triggered - ensuring cleanup');
            
            // Remove any lingering backdrop elements
            document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                backdrop.remove();
            });
            
            // Make sure body is reset
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        });
          // Add event delegation for clerk cards
        document.getElementById('clerk-cards').addEventListener('click', function(e) {
            // Find the closest clerk card that was clicked
            const card = e.target.closest('.clerk-card');
            if (card) {
                const clerkId = parseInt(card.dataset.id);
                showClerkDetails(clerkId);
            }
        });
    });
      // Initialize functionality
    // Using window.initializeSearch to ensure the function is globally available
    window.initializeSearch = function() {
        // Display all clerks by default
        displayFilteredClerks(clerks);
    }
    
    // Display clerks function (simplified without filtering)
    // Using window.filterClerks to ensure the function is globally available
    window.filterClerks = function() {
        // Display all clerks
        displayFilteredClerks(clerks);
    }// JavaScript format date function
    // Using window.formatDate to ensure the function is globally available for JS
    window.formatDate = function(dateString) {
        if (!dateString) return '';
        try {
            const date = new Date(dateString);
            if (isNaN(date.getTime())) return dateString; // Return original if invalid
            
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString('en-US', options);
        } catch (error) {
            console.error('Error formatting date:', error);
            return dateString;
        }
    }
        // Display clerks
    // Using window.displayFilteredClerks to ensure the function is globally available
    window.displayFilteredClerks = function(clerksList) {
        const cardsContainer = document.getElementById('clerk-cards');
        
        cardsContainer.innerHTML = '';
        
        clerksList.forEach(clerk => {
            const card = document.createElement('div');
            card.className = 'col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4';
              card.innerHTML = `
                <div class="card clerk-card shadow-sm h-100" data-id="${clerk.id}" onclick="showClerkDetails(${clerk.id})">
                    <div class="card-body text-center">
                        <img src="${clerk.image || '../images/staff/clerk_male_1.jpg'}" class="profile-image mb-3" alt="${clerk.firstName} ${clerk.lastName}">
                        <h5 class="card-title clerk-name">${clerk.lastName}, ${clerk.firstName} ${clerk.middleName ? clerk.middleName[0] + '.' : ''}</h5>
                        <p class="card-text">Hired: ${formatDate(clerk.hireDate)}</p>
                        <p class="card-text">
                            <span class="badge ${clerk.isActive ? 'bg-success' : 'bg-danger'}">
                                ${clerk.isActive ? 'Active' : 'Inactive'}
                            </span>
                        </p>
                    </div>
                </div>
            `;
            
            cardsContainer.appendChild(card);
        });
    }
      // Initialize form validation
    // Using window.initializeFormValidation to ensure the function is globally available
    window.initializeFormValidation = function() {
        // Add event listener for Add Clerk form
        document.getElementById('saveNewClerkBtn').addEventListener('click', function(event) {
            const form = document.getElementById('addClerkForm');
            
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
                return;
            }
            
            // Password validation
            const password = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                document.getElementById('confirmPassword').setCustomValidity("Passwords don't match");
                form.classList.add('was-validated');
                return;
            }
            
            addNewClerk();
        });
        
        // Add event listener for Edit Clerk form
        document.getElementById('updateClerkBtn').addEventListener('click', function(event) {
            const form = document.getElementById('editClerkForm');
            
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
                return;
            }
            
            updateClerk();
        });
    }    // Function to show clerk details in modal
    // Using window.showClerkDetails to ensure the function is globally available
    window.showClerkDetails = function(clerkId) {
        console.log(`Showing details for clerk ID: ${clerkId}`);
        const clerk = clerks.find(c => c.id === clerkId);
        
        if (!clerk) {
            console.error(`Clerk with ID ${clerkId} not found`);
            alert("Clerk not found. Please refresh the page and try again.");
            return;
        }
        
        console.log("Clerk found:", clerk);
        
        try {
            // First, make sure any existing modal is properly closed to avoid issues
            document.getElementById('closeDetailsModalBtn')?.click();
            
            // Populate form fields
            document.getElementById('clerkId').value = clerk.id;
            document.getElementById('firstName').value = clerk.firstName;
            document.getElementById('middleName').value = clerk.middleName || '';
            document.getElementById('lastName').value = clerk.lastName;
            document.getElementById('email').value = clerk.email;
            document.getElementById('password').value = clerk.password;
            document.getElementById('hireDate').value = clerk.hireDate;
            
            // Set clerk display name and image
            document.getElementById('modalClerkName').textContent = clerk.firstName + ' ' + clerk.lastName;
            document.getElementById('modalClerkImage').src = clerk.image || '../images/staff/clerk_male_1.jpg';
              // Set status badge
            const statusBadge = `
                <span class="badge ${clerk.isActive ? 'bg-success' : 'bg-danger'} fs-6 px-3 py-2">
                    <i class="fas fa-${clerk.isActive ? 'check-circle' : 'times-circle'} me-2"></i>
                    ${clerk.isActive ? 'Active' : 'Inactive'}
                </span>
            `;
            document.getElementById('modalClerkStatus').innerHTML = statusBadge;
            document.getElementById('accountStatusBadge').innerHTML = statusBadge;
            
            // Set email and hire date in the sidebar
            document.getElementById('modalClerkEmail').querySelector('span').textContent = clerk.email;
            document.getElementById('modalClerkHireDate').querySelector('span').textContent = `Hired on ${formatDate(clerk.hireDate)}`;
            
            console.log("All clerk details populated successfully");
            
            // Unified approach to show modal
            const modalElement = document.getElementById('clerkDetailsModal');
            
            // First try the bootstrap way
            try {
                // Try to get existing instance or create new one
                let modal = bootstrap.Modal.getInstance(modalElement);
                
                if (!modal) {
                    modal = new bootstrap.Modal(modalElement);
                }
                
                modal.show();
                console.log("Modal shown using Bootstrap API");
            } catch (error) {
                console.error("Bootstrap modal approach failed, using manual approach:", error);
                
                // Manual method as fallback
                modalElement.classList.add('show');
                modalElement.style.display = 'block';
                document.body.classList.add('modal-open');
                
                // Create backdrop if needed
                if (!document.querySelector('.modal-backdrop')) {
                    const backdrop = document.createElement('div');
                    backdrop.className = 'modal-backdrop fade show';
                    document.body.appendChild(backdrop);
                }
                console.log("Modal shown using manual DOM manipulation");
            }
        } catch (error) {
            console.error("Error processing clerk details:", error);
            alert("There was an error displaying the clerk details. Please check the console for more information.");
        }
    }
      // Add close modal button click handler
    document.getElementById('closeDetailsModalBtn').addEventListener('click', function() {
        // Clean up approach that handles both Bootstrap modal and manual modal approaches
        const modalElement = document.getElementById('clerkDetailsModal');
        
        try {
            // Try Bootstrap's approach first
            const detailsModal = bootstrap.Modal.getInstance(modalElement);
            if (detailsModal) {
                detailsModal.hide();
            } else {
                throw new Error('No Bootstrap modal instance found');
            }
        } catch (error) {
            console.log('Using manual approach to close modal', error);
            // Manual cleanup
            modalElement.classList.remove('show');
            modalElement.style.display = 'none';
            document.body.classList.remove('modal-open');
            
            // Remove backdrop
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
        }
    });
    
    // Add edit button click handler
    document.getElementById('editClerkBtn').addEventListener('click', function() {
        const clerkId = parseInt(document.getElementById('clerkId').value);
        const clerk = clerks.find(c => c.id === clerkId);
        
        if (clerk) {
            // Hide details modal using our custom close function
            document.getElementById('closeDetailsModalBtn').click();
            // Populate edit form
            document.getElementById('editClerkId').value = clerk.id;
            document.getElementById('editFirstName').value = clerk.firstName;
            document.getElementById('editMiddleName').value = clerk.middleName || '';
            document.getElementById('editLastName').value = clerk.lastName;
            document.getElementById('editEmail').value = clerk.email;
            document.getElementById('editHireDate').value = clerk.hireDate;
            document.getElementById('isActive').checked = clerk.isActive;
            
            // Set profile preview image
            const editProfilePreview = document.getElementById('editProfilePreview');
            if (editProfilePreview && clerk.image) {
                editProfilePreview.src = clerk.image;
            }
            
            // Set gender based on image path
            const editGender = document.getElementById('editGender');
            if (editGender) {
                if (clerk.image && clerk.image.includes('female')) {
                    editGender.value = 'female';
                } else {
                    editGender.value = 'male';
                }
            }
            
            // Update the active/inactive label visibility based on current state
            updateStatusSwitchLabel(clerk.isActive);
            
            // Show edit modal
            const editModal = new bootstrap.Modal(document.getElementById('editClerkModal'));
            editModal.show();
        }
    });
    
    // Update the status switch label when it changes
    document.getElementById('isActive').addEventListener('change', function() {
        updateStatusSwitchLabel(this.checked);
    });
      // Function to update the status switch label
    // Using window.updateStatusSwitchLabel to ensure the function is globally available
    window.updateStatusSwitchLabel = function(isActive) {
        const label = document.querySelector('label[for="isActive"]');
        if (isActive) {
            label.innerHTML = '<span class="badge bg-success">Active</span> / <span class="badge bg-secondary">Inactive</span> Status';
        } else {
            label.innerHTML = '<span class="badge bg-secondary">Active</span> / <span class="badge bg-danger">Inactive</span> Status';
        }
    }      // Function to add new clerk
    // Using window.addNewClerk to ensure the function is globally available
    window.addNewClerk = function() {
        const firstName = document.getElementById('newFirstName').value.trim();
        const middleName = document.getElementById('newMiddleName').value.trim();
        const lastName = document.getElementById('newLastName').value.trim();
        const email = document.getElementById('newEmail').value.trim();
        const password = document.getElementById('newPassword').value.trim();
        const hireDate = document.getElementById('newHireDate').value;
        const isActive = document.getElementById('newIsActive').checked;
        
        // Determine which profile image to use based on gender selection
        let profileImage = '../images/staff/clerk_male_1.jpg'; // Default image
        const genderSelect = document.getElementById('newGender');
        if (genderSelect && genderSelect.value === 'female') {
            // Use a random female profile image
            const femaleImages = ['clerk_female_1.jpg', 'clerk_female_2.jpg', 'clerk_female_3.jpg'];
            const randomIndex = Math.floor(Math.random() * femaleImages.length);
            profileImage = '../images/staff/' + femaleImages[randomIndex];
        } else {
            // Use a random male profile image
            const maleImages = ['clerk_male_1.jpg', 'clerk_male_2.jpg', 'clerk_male_3.jpg'];
            const randomIndex = Math.floor(Math.random() * maleImages.length);
            profileImage = '../images/staff/' + maleImages[randomIndex];
        }
        
        // Create new clerk object
        const newClerk = {
            id: clerks.length > 0 ? Math.max(...clerks.map(c => c.id)) + 1 : 1,
            firstName,
            middleName,
            lastName,
            email,
            password,
            hireDate,
            image: profileImage,
            isActive
        };
        
        // Add to clerks array
        clerks.push(newClerk);
        
        // Update UI
        filterClerks();
        
        // Reset form
        document.getElementById('addClerkForm').reset();
        document.getElementById('addClerkForm').classList.remove('was-validated');
        
        // Set today's date as the default hire date
        document.getElementById('newHireDate').valueAsDate = new Date();
        
        // Hide modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('addClerkModal'));
        modal.hide();
        
        // Show success message using SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'New clerk added successfully!',
            confirmButtonColor: '#451968'
        });
    }      // Function to update clerk info
    // Using window.updateClerk to ensure the function is globally available
    window.updateClerk = function() {
        const clerkId = parseInt(document.getElementById('editClerkId').value);
        const clerkIndex = clerks.findIndex(c => c.id === clerkId);
        
        if (clerkIndex !== -1) {
            const updatedClerk = {
                ...clerks[clerkIndex],
                firstName: document.getElementById('editFirstName').value.trim(),
                middleName: document.getElementById('editMiddleName').value.trim(),
                lastName: document.getElementById('editLastName').value.trim(),
                email: document.getElementById('editEmail').value.trim(),
                hireDate: document.getElementById('editHireDate').value,
                isActive: document.getElementById('isActive').checked
            };
            
            // Check if gender selection has changed and update profile image if needed
            const genderSelect = document.getElementById('editGender');
            if (genderSelect) {
                const currentImage = clerks[clerkIndex].image;
                const isMaleImage = currentImage.includes('clerk_male');
                const isFemaleImage = currentImage.includes('clerk_female');
                
                // If gender changed, update the profile image
                if ((genderSelect.value === 'female' && isMaleImage) || (genderSelect.value === 'male' && isFemaleImage)) {
                    if (genderSelect.value === 'female') {
                        // Use a random female profile image
                        const femaleImages = ['clerk_female_1.jpg', 'clerk_female_2.jpg', 'clerk_female_3.jpg'];
                        const randomIndex = Math.floor(Math.random() * femaleImages.length);
                        updatedClerk.image = '../images/staff/' + femaleImages[randomIndex];
                    } else {
                        // Use a random male profile image
                        const maleImages = ['clerk_male_1.jpg', 'clerk_male_2.jpg', 'clerk_male_3.jpg'];
                        const randomIndex = Math.floor(Math.random() * maleImages.length);
                        updatedClerk.image = '../images/staff/' + maleImages[randomIndex];
                    }
                }
            }
            
            const newPassword = document.getElementById('editPassword').value.trim();
            if (newPassword) {
                updatedClerk.password = newPassword;
            }
            
            // Update clerk data
            clerks[clerkIndex] = updatedClerk;
            
            // Update UI
            filterClerks();
            
            // Reset form validation state
            document.getElementById('editClerkForm').classList.remove('was-validated');
            
            // Hide modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('editClerkModal'));
            modal.hide();
            
            // Show success message using SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Updated!',
                text: 'Clerk information updated successfully!',
                confirmButtonColor: '#451968'
            });
        }
    }
      // Delete clerk functionality
    // Using window.showDeleteModal to ensure the function is globally available
    window.showDeleteModal = function(clerkId) {
        document.getElementById('deleteClerkId').value = clerkId;
        const modal = new bootstrap.Modal(document.getElementById('deleteClerkModal'));
        modal.show();
    }
    
    // Confirm delete button click handler
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        const clerkId = parseInt(document.getElementById('deleteClerkId').value);
        const clerkIndex = clerks.findIndex(c => c.id === clerkId);
        
        if (clerkIndex !== -1) {
            // Remove clerk from array
            clerks.splice(clerkIndex, 1);
            
            // Update UI
            filterClerks();
            
            // Hide modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteClerkModal'));
            modal.hide();
            
            // Show success message using SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Deleted!',
                text: 'Clerk has been removed successfully!',
                confirmButtonColor: '#451968'
            });
        }
    });
    
    // Toggle password visibility
    const togglePasswordButtons = [
        { buttonId: 'togglePassword', inputId: 'password' },
        { buttonId: 'toggleNewPassword', inputId: 'newPassword' },
        { buttonId: 'toggleEditPassword', inputId: 'editPassword' }
    ];
    
    togglePasswordButtons.forEach(({ buttonId, inputId }) => {
        document.getElementById(buttonId).addEventListener('click', function() {
            const input = document.getElementById(inputId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            // Toggle eye icon
            const icon = this.querySelector('i');
            if (type === 'text') {
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
    
    // Context menu for clerk cards (right-click menu)
    document.addEventListener('contextmenu', function(event) {
        const clerkCard = event.target.closest('.clerk-card');
        
        if (clerkCard) {
            event.preventDefault();
            
            const clerkId = parseInt(clerkCard.dataset.id);
            const clerk = clerks.find(c => c.id === clerkId);
            
            if (clerk) {
                Swal.fire({
                    title: 'Actions',
                    html: `
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" onclick="showClerkDetails(${clerkId})">
                                <i class="fas fa-eye me-2"></i> View Details
                            </button>
                            <button class="btn btn-secondary" onclick="showEditModal(${clerkId})">
                                <i class="fas fa-edit me-2"></i> Edit Clerk
                            </button>
                            <button class="btn btn-danger" onclick="showDeleteModal(${clerkId})">
                                <i class="fas fa-trash-alt me-2"></i> Delete Clerk
                            </button>
                        </div>
                    `,
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonText: 'Close',
                    cancelButtonColor: '#6c757d'
                });
            }
        }
    });      // Function to show edit modal directly
    // Using window.showEditModal to ensure the function is globally available
    window.showEditModal = function(clerkId) {
        const clerk = clerks.find(c => c.id === clerkId);
        
        if (clerk) {
            // Populate edit form
            document.getElementById('editClerkId').value = clerk.id;
            document.getElementById('editFirstName').value = clerk.firstName;
            document.getElementById('editMiddleName').value = clerk.middleName || '';
            document.getElementById('editLastName').value = clerk.lastName;
            document.getElementById('editEmail').value = clerk.email;
            document.getElementById('editHireDate').value = clerk.hireDate;
            document.getElementById('isActive').checked = clerk.isActive;
            
            // Set profile preview image
            const editProfilePreview = document.getElementById('editProfilePreview');
            if (editProfilePreview && clerk.image) {
                editProfilePreview.src = clerk.image;
            }
            
            // Set gender based on image path
            const editGender = document.getElementById('editGender');
            if (editGender) {
                if (clerk.image && clerk.image.includes('female')) {
                    editGender.value = 'female';
                } else {
                    editGender.value = 'male';
                }
            }
            
            // Update the active/inactive label visibility
            updateStatusSwitchLabel(clerk.isActive);
            
            // Show edit modal
            const editModal = new bootstrap.Modal(document.getElementById('editClerkModal'));
            editModal.show();
            
            // Close any open SweetAlert
            Swal.close();
        }
    }      // Helper function to format date (already defined globally above)
    // This is just a reference to the global function
    // The actual function is defined using window.formatDate earlier in the code
      // Helper function to get random profile image based on gender
    // Using window.getRandomProfileImage to ensure the function is globally available
    window.getRandomProfileImage = function(gender) {
        if (gender === 'female') {
            const femaleImages = ['clerk_female_1.jpg', 'clerk_female_2.jpg', 'clerk_female_3.jpg'];
            const randomIndex = Math.floor(Math.random() * femaleImages.length);
            return '../images/staff/' + femaleImages[randomIndex];
        } else {
            const maleImages = ['clerk_male_1.jpg', 'clerk_male_2.jpg', 'clerk_male_3.jpg'];
            const randomIndex = Math.floor(Math.random() * maleImages.length);
            return '../images/staff/' + maleImages[randomIndex];
        }
    }
      // Add event listeners for gender selection to update profile previews
    document.addEventListener('DOMContentLoaded', function() {
        // For Add Clerk form
        const newGenderSelect = document.getElementById('newGender');
        if (newGenderSelect) {
            newGenderSelect.addEventListener('change', function() {
                const profilePreview = document.getElementById('profilePreview');
                if (profilePreview) {
                    profilePreview.src = getRandomProfileImage(this.value);
                }
            });
        }
        
        // For Edit Clerk form
        const editGenderSelect = document.getElementById('editGender');
        if (editGenderSelect) {
            editGenderSelect.addEventListener('change', function() {
                const editProfilePreview = document.getElementById('editProfilePreview');
                if (editProfilePreview) {
                    editProfilePreview.src = getRandomProfileImage(this.value);
                }
            });
        }
        
        // Make sure clerk cards are clickable
        document.querySelectorAll('.clerk-card').forEach(card => {
            card.style.cursor = 'pointer';
            card.addEventListener('click', function() {
                const clerkId = parseInt(this.dataset.id);
                showClerkDetails(clerkId);
            });
        });
    });    // Emergency modal cleanup function
    // Using window.cleanupModal to ensure the function is globally available
    window.cleanupModal = function() {
        console.log("Running emergency modal cleanup...");
        
        // Remove all modal elements and backdrops
        document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
        
        // Reset all modals
        document.querySelectorAll('.modal').forEach(modal => {
            modal.classList.remove('show');
            modal.style.display = 'none';
        });
        
        // Remove modal-open class from body
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
        
        console.log("Modal cleanup complete");
    };
    
    // Add keyboard shortcut for emergency cleanup (Shift+Esc)
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && event.shiftKey) {
            console.log('Emergency modal cleanup triggered by keyboard shortcut');
            cleanupModal();
        }
    });
    
    // Emergency fix function available to users
    // Using window.fixModal to ensure the function is globally available
    window.fixModal = function() {
        console.log("Running the emergency modal fix...");
        
        // First clean up any existing modal elements
        cleanupModal();
        
        if (typeof fixClerkDetailsModal === 'function') {
            fixClerkDetailsModal();
        } else {
            // Fallback if the modal-fix.js script is not available
            const modal = document.getElementById('clerkDetailsModal');
            if (modal) {
                modal.style.display = 'block';
                modal.classList.add('show');
                document.body.classList.add('modal-open');
            }
        }
    }
</script>

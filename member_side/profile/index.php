<!-- Member Profile Page -->
<div class="profile-edit-container">
    <div class="row">
        <!-- Left Card: Form Fields -->
        <div class="col-md-8 mb-4">
            <div class="profile-container h-100">
                <div class="profile-header">
                    <h5 class="profile-title">
                        <i class="fas fa-user-edit me-2"></i> Personal Information
                    </h5>
                </div>
                <div class="profile-body">
                    <form id="profileForm">
                        <!-- Name Fields -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" value="John" required>
                            </div>
                            <div class="col-md-4">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" value="D.">
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" value="Doe" required>
                            </div>
                        </div>
                        
                        <!-- Contact Information -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" value="john.doe@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" value="09239503863">
                            </div>
                        </div>
                        
                        <!-- Weight Tracking Section -->
                        <h5 class="mt-4 mb-3 pb-2 border-bottom weight-tracking" style="color: var(--primary-dark);">
                            <i class="fas fa-weight me-2"></i> Weight Tracking & BMI
                        </h5>
                        <p class="text-muted small weight-tracking">Track your weight and BMI over time to monitor your fitness progress.</p>
                        
                        <!-- Height input (constant, only needed once) -->
                        <div class="row mb-3 weight-tracking">
                            <div class="col-md-4">
                                <label for="userHeight" class="form-label">Your Height</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="userHeight" placeholder="0" min="50" max="250" step="0.1">
                                    <span class="input-group-text">cm</span>
                                </div>
                                <div class="form-text">Height is used to calculate your BMI. Enter once.</div>
                            </div>
                            <div class="col-md-8">
                                <div class="card shadow-sm border-0">
                                    <div class="card-body p-3 weight-tracking">
                                        <h6 class="mb-2"><i class="fas fa-calculator me-2"></i>BMI Calculation</h6>
                                        <div class="bmi-formula bg-light p-2 rounded mb-2 text-center">
                                            <span class="fw-bold">BMI = weight (kg)/(height (m))²</span>
                                        </div>
                                        <div class="row g-2 mt-2">
                                            <div class="col-3">
                                                <div class="p-2 rounded text-center bg-info bg-opacity-25 border-start border-info border-4">
                                                    <small class="d-block fw-bold text-info">Underweight</small>
                                                    <span class="small">&lt;18.5</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="p-2 rounded text-center bg-success bg-opacity-25 border-start border-success border-4">
                                                    <small class="d-block fw-bold text-success">Normal</small>
                                                    <span class="small">18.5–24.9</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="p-2 rounded text-center bg-warning bg-opacity-25 border-start border-warning border-4">
                                                    <small class="d-block fw-bold text-warning">Overweight</small>
                                                    <span class="small">25–29.9</span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="p-2 rounded text-center bg-danger bg-opacity-25 border-start border-danger border-4">
                                                    <small class="d-block fw-bold text-danger">Obesity</small>
                                                    <span class="small">≥30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row align-items-end mb-3 weight-tracking">
                            <div class="col-md-3">
                                <label for="currentWeight" class="form-label">Current Weight</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="currentWeight" placeholder="0.0" step="0.1" min="20">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="weightDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="weightDate">
                            </div>
                            <div class="col-md-3">
                                <label for="bmiCategory" class="form-label">BMI Category</label>
                                <input type="text" class="form-control" id="bmiCategory" placeholder="Auto-calculated" readonly>
                            </div>
                            <div class="col-md-3">
                                <label class="invisible form-label">Add</label>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary" id="addWeightBtn">
                                        <i class="fas fa-plus me-1"></i> Add Entry
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="weight-history mb-4 weight-tracking">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0">Weight History</h6>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Weight</th>
                                                    <th>BMI Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="weightHistoryTable">
                                                <tr class="text-muted text-center">
                                                    <td colspan="4">No weight entries yet.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class="mt-4 mb-3 pb-2 border-bottom" style="color: var(--primary-dark);">Change Password</h5>
                        <p class="text-muted small">Leave password fields empty if you don't want to change your password.</p>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword">
                            </div>
                            <div class="col-md-4">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword">
                            </div>
                            <div class="col-md-4">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="profile-footer">
                    <button type="button" class="btn btn-secondary" id="cancelBtn">
                        <i class="fas fa-times me-2"></i> Cancel
                    </button>
                    <button type="button" class="btn btn-primary" id="saveChangesBtn">
                        <i class="fas fa-save me-2"></i> Save Changes
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Right Card: Profile Picture & QR Code -->
        <div class="col-md-4 mb-4">
            <div class="profile-container h-100">
                <div class="profile-header">
                    <h5 class="profile-title">
                        <i class="fas fa-id-card me-2"></i> Profile Media
                    </h5>
                </div>
                <div class="profile-body d-flex flex-column justify-content-between">
                    <!-- Profile Picture Section -->
                    <div class="profile-picture-container">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture" id="profileImagePreview">
                        <div class="upload-btn-wrapper mt-2">
                            <button type="button" class="btn btn-sm btn-primary">
                                <i class="fas fa-camera me-2"></i> Change Picture
                            </button>
                            <input type="file" id="profileImageUpload" accept="image/*">
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <!-- QR Code Section -->
                    <div class="qr-code-container">
                        <h6 class="text-center mb-3" style="color: var(--primary-dark);">Your QR Code</h6>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=UserID12345" alt="User QR Code" class="qr-code" style="width: 150px; height: 150px;">
                        <p class="text-muted small text-center mt-2">For quick identification</p>
                        <button type="button" class="btn btn-sm btn-secondary mt-2" id="downloadQrBtn">
                            <i class="fas fa-download me-1"></i> Download QR
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile page specific styles -->
<style>
    /* Additional styles for profile section */
    .profile-container {
        background-color: var(--white);
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 40px;
    }
    
    .profile-header {
        background: var(--gradient-primary);
        padding: 20px 30px;
        color: var(--white);
    }
    
    .profile-title {
        font-weight: 600;
        margin-bottom: 0;
        color: var(--white);
    }
    
    .profile-body {
        padding: 30px;
    }
    
    .profile-footer {
        background-color: var(--light-gray);
        padding: 20px 30px;
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
    
    .section-title {
        color: var(--primary-dark);
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .profile-picture-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid var(--white);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    
    .qr-code-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 30px;
    }
    
    .qr-code {
        width: 200px;
        height: 200px;
        margin-bottom: 15px;
    }
    
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }
    
    .upload-btn-wrapper input[type=file] {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    
    /* Fix for input group alignment */
    .input-group .form-control {
        margin-bottom: 0;
    }
    
    .input-group {
        margin-bottom: 20px;
    }
    
    /* Specific fix for weight input group */
    #currentWeight {
        height: auto;
    }
    
    /* Adjustments for Weight Tracking & BMI section */
    .bmi-formula {
        font-size: 0.85rem;
    }
    
    .weight-tracking h5 {
        font-size: 1.1rem;
    }
    
    .weight-tracking .form-label {
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
    }
    
    .weight-tracking .form-text {
        font-size: 0.75rem;
    }
    
    .weight-tracking .small {
        font-size: 0.7rem;
    }
    
    .weight-tracking .fw-bold {
        font-size: 0.75rem;
    }
    
    .weight-tracking .card-body {
        padding: 0.6rem;
    }
    
    .weight-tracking .table th,
    .weight-tracking .table td {
        padding: 0.5rem;
        font-size: 0.85rem;
    }
    
    .weight-tracking .badge {
        font-size: 0.75rem;
    }
    
    /* More specific adjustments for BMI categories */
    .weight-tracking .row.g-2 .col-3 .p-2 {
        padding: 0.25rem 0.1rem !important;
    }
    
    .weight-tracking h6 {
        font-size: 0.9rem;
    }
    
    .bmi-formula.bg-light {
        padding: 0.25rem 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    
    /* Smaller font for BMI Category input and Add Entry button */
    #bmiCategory {
        font-size: 0.8rem;
    }
    
    #bmiCategory::placeholder {
        font-size: 0.75rem;
    }
    
    #addWeightBtn {
        font-size: 0.85rem;
        padding: 0.4rem 0.75rem;
    }
</style>

<!-- Profile page JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Profile image preview
        const profileImageUpload = document.getElementById('profileImageUpload');
        const profileImagePreview = document.getElementById('profileImagePreview');
        
        profileImageUpload.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Password validation
        const newPassword = document.getElementById('newPassword');
        const confirmPassword = document.getElementById('confirmPassword');
        const currentPassword = document.getElementById('currentPassword');
        
        // Save button handling
        const saveChangesBtn = document.getElementById('saveChangesBtn');
        saveChangesBtn.addEventListener('click', function() {
            // Check if passwords match if new password is provided
            if (newPassword.value !== '' && newPassword.value !== confirmPassword.value) {
                alert('New passwords do not match!');
                return;
            }
            
            if (newPassword.value !== '' && currentPassword.value === '') {
                alert('Please enter your current password to change to a new password.');
                return;
            }
            
            // Here you would normally send the data to your server
            const formData = {
                firstName: document.getElementById('firstName').value,
                middleName: document.getElementById('middleName').value,
                lastName: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                passwordChanged: newPassword.value !== ''
            };
            
            console.log('Profile data to update:', formData);
            alert('Profile updated successfully!');
        });
        
        // Cancel button handling
        const cancelBtn = document.getElementById('cancelBtn');
        cancelBtn.addEventListener('click', function() {
            if (confirm('Are you sure you want to cancel? Any unsaved changes will be lost.')) {
                window.location.href = 'sidebar.php?page=overview';
            }
        });
        
        // Download QR code
        const downloadQrBtn = document.getElementById('downloadQrBtn');
        downloadQrBtn.addEventListener('click', function() {
            alert('QR Code download started!');
        });

        // Weight Tracking Functionality
        // Use in-memory array instead of localStorage for session-only storage
        let weightEntries = [];
        const currentWeightInput = document.getElementById('currentWeight');
        const weightDateInput = document.getElementById('weightDate');
        const userHeightInput = document.getElementById('userHeight');
        const bmiCategoryInput = document.getElementById('bmiCategory');
        const addWeightBtn = document.getElementById('addWeightBtn');
        const weightHistoryTable = document.getElementById('weightHistoryTable');
        
        // Set default date to today
        weightDateInput.valueAsDate = new Date();
        
        // Set default height to 165cm
        userHeightInput.value = '165';
        
        // Calculate BMI when weight changes
        currentWeightInput.addEventListener('input', calculateBMI);
        userHeightInput.addEventListener('input', calculateBMI);
        
        function calculateBMI() {
            const weight = parseFloat(currentWeightInput.value);
            const height = parseFloat(userHeightInput.value);
            
            if (weight && height) {
                const heightInMeters = height / 100;
                const bmi = weight / (heightInMeters * heightInMeters);
                const bmiRounded = bmi.toFixed(1);
                
                let category = '';
                if (bmi < 18.5) {
                    category = 'Underweight';
                    bmiCategoryInput.className = 'form-control bg-info text-white';
                } else if (bmi >= 18.5 && bmi <= 24.9) {
                    category = 'Normal weight';
                    bmiCategoryInput.className = 'form-control bg-success text-white';
                } else if (bmi >= 25 && bmi <= 29.9) {
                    category = 'Overweight';
                    bmiCategoryInput.className = 'form-control bg-warning text-dark';
                } else {
                    category = 'Obesity';
                    bmiCategoryInput.className = 'form-control bg-danger text-white';
                }
                
                bmiCategoryInput.value = `${bmiRounded} - ${category}`;
            } else {
                bmiCategoryInput.value = '';
                bmiCategoryInput.className = 'form-control';
            }
        }
        
        // Render weight history table
        function renderWeightHistory() {
            if (weightEntries.length === 0) {
                weightHistoryTable.innerHTML = `
                    <tr class="text-muted text-center">
                        <td colspan="4">No weight entries yet.</td>
                    </tr>
                `;
                return;
            }
            
            // Sort entries by date, newest first
            const sortedEntries = [...weightEntries].sort((a, b) => new Date(b.date) - new Date(a.date));
            
            weightHistoryTable.innerHTML = sortedEntries.map(entry => {
                let categoryClass = '';
                if (entry.bmiCategory.includes('Underweight')) {
                    categoryClass = 'bg-info text-white';
                } else if (entry.bmiCategory.includes('Normal')) {
                    categoryClass = 'bg-success text-white';
                } else if (entry.bmiCategory.includes('Overweight')) {
                    categoryClass = 'bg-warning text-dark';
                } else if (entry.bmiCategory.includes('Obesity')) {
                    categoryClass = 'bg-danger text-white';
                }
                
                return `
                <tr data-entry-id="${entry.id}">
                    <td>${new Date(entry.date).toLocaleDateString()}</td>
                    <td>${entry.weight} kg</td>
                    <td><span class="badge ${categoryClass}">${entry.bmiCategory}</span></td>
                    <td>
                        <button class="btn btn-sm btn-danger delete-weight-entry" data-entry-id="${entry.id}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `}).join('');
            
            // Add event listeners to delete buttons
            document.querySelectorAll('.delete-weight-entry').forEach(button => {
                button.addEventListener('click', function() {
                    const entryId = this.getAttribute('data-entry-id');
                    deleteWeightEntry(entryId);
                });
            });
        }
        
        // Add new weight entry
        addWeightBtn.addEventListener('click', function() {
            const weight = parseFloat(currentWeightInput.value);
            const date = weightDateInput.value;
            const height = parseFloat(userHeightInput.value);
            
            if (!weight || isNaN(weight) || !date) {
                alert('Please enter both weight and date.');
                return;
            }
            
            if (!height || isNaN(height)) {
                alert('Please enter your height to calculate BMI.');
                userHeightInput.focus();
                return;
            }
            
            const heightInMeters = height / 100;
            const bmi = weight / (heightInMeters * heightInMeters);
            const bmiRounded = bmi.toFixed(1);
            
            let category = '';
            if (bmi < 18.5) {
                category = 'Underweight';
            } else if (bmi >= 18.5 && bmi <= 24.9) {
                category = 'Normal weight';
            } else if (bmi >= 25 && bmi <= 29.9) {
                category = 'Overweight';
            } else {
                category = 'Obesity';
            }
            
            // Create a new entry
            const newEntry = {
                id: Date.now().toString(),
                weight: weight,
                date: date,
                bmiCategory: `${bmiRounded} - ${category}`
            };
            
            // Add to array
            weightEntries.push(newEntry);
            
            // Reset form fields but keep the height
            currentWeightInput.value = '';
            bmiCategoryInput.value = '';
            bmiCategoryInput.className = 'form-control';
            
            // Update the table display
            renderWeightHistory();
            
            // Confirmation message
            alert('Weight entry added successfully!');
        });
        
        // Delete weight entry
        function deleteWeightEntry(id) {
            if (confirm('Are you sure you want to delete this weight entry?')) {
                const index = weightEntries.findIndex(entry => entry.id === id);
                if (index !== -1) {
                    weightEntries.splice(index, 1);
                    renderWeightHistory();
                }
            }
        }
        
        // Initialize the weight history table
        renderWeightHistory();
    });
</script>
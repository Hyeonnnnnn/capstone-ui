<?php
// Page title for the sidebar
$pageTitle = "Clerk Profile";
?>

<div class="profile-edit-container">
    <style>
        :root {
            --primary: #451968;
            --primary-light: #782e9d;
            --primary-dark: #441170;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --gradient-primary: linear-gradient(135deg, #451968 0%, #782e9d 100%);
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            background-color: var(--light-gray);
        }
          .profile-edit-container {
            padding: 20px;
            width: 100%;
        }
        
        h1 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 30px;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(69, 25, 104, 0.3);
        }
        
        .btn-secondary {
            background-color: var(--dark-gray);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
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
        
        .profile-label {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }
        
        .profile-value {
            background-color: var(--light-gray);
            border-radius: 8px;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            padding: 12px 20px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(120, 46, 157, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        
        .profile-section {
            margin-bottom: 30px;
        }
        
        .profile-section-title {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .user-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .avatar-container {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .status-badge {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 25px;
            height: 25px;
            background-color: #28a745;
            border-radius: 50%;
            border: 3px solid white;
        }
        
        .account-status-active {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.2);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }

        .account-status-active i {
            margin-right: 5px;
        }
        
        .modal-header {
            background: var(--gradient-primary);
            color: white;
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .btn-close {
            filter: brightness(0) invert(1);
        }
        
        .security-setup-status {
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .security-setup-incomplete {
            background-color: rgba(255, 193, 7, 0.15);
            border: 1px solid rgba(255, 193, 7, 0.4);
            color: #856404;
        }
        
        .security-setup-complete {
            background-color: rgba(40, 167, 69, 0.15);
            border: 1px solid rgba(40, 167, 69, 0.4);
            color: #155724;
        }
        
        .question-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .custom-question-input {
            display: none;
        }
        
        .custom-question-input.active {
            display: block;
        }
        
        .modal-backdrop {
            opacity: 0.7 !important;
        }    </style>

    <div class="row">
            <!-- Main Profile Information -->
            <div class="col-lg-8 mb-4">
                <div class="profile-container">
                    <div class="profile-header d-flex justify-content-between align-items-center">
                        <h5 class="profile-title">
                            <i class="fas fa-shield-alt me-2"></i> Security Settings
                        </h5>
                    </div>
                    
                    <div class="profile-body">
                        <!-- Security Setup Status -->
                        <div id="securitySetupIncomplete" class="security-setup-status security-setup-incomplete">
                            <i class="fas fa-exclamation-triangle me-2"></i> 
                            Security setup incomplete. Please set up your security questions to enable password changes.
                        </div>
                        
                        <div id="securitySetupComplete" class="security-setup-status security-setup-complete" style="display: none;">
                            <i class="fas fa-shield-alt me-2"></i> 
                            Security setup complete. You can now change your password.
                        </div>
                        
                        <!-- Clerk Information Section -->
                        <div class="profile-section">
                            <h5 class="profile-section-title">
                                <i class="fas fa-user me-2"></i> Personal Information
                            </h5>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="profile-label">First Name</div>
                                    <div class="profile-value">Christine Mae</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="profile-label">Middle Name</div>
                                    <div class="profile-value">Cabije</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="profile-label">Last Name</div>
                                    <div class="profile-value">Degamo</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email Information Section -->
                        <div class="profile-section">
                            <h5 class="profile-section-title">
                                <i class="fas fa-at me-2"></i> Email Information
                            </h5>
                            
                            <div class="mb-3">
                                <div class="profile-label">Email Address</div>
                                <div class="profile-value">cmdegamo34@gmail.com</div>
                            </div>
                        </div>
                        
                        <!-- Account Information Section -->
                        <div class="profile-section">
                            <h5 class="profile-section-title">
                                <i class="fas fa-user-lock me-2"></i> Account Information
                            </h5>
                            
                            <div class="row mb-3 align-items-end">
                                <div class="col-md-6">
                                    <div class="profile-label">Username</div>
                                    <div class="profile-value">clerk123</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <button id="setupSecurityBtn" class="btn btn-primary">
                                        <i class="fas fa-user-shield me-2"></i> Setup Security Questions
                                    </button>
                                    <button id="changeSecurityBtn" class="btn btn-outline-primary" style="display: none;">
                                        <i class="fas fa-edit me-2"></i> Change Security Questions
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password Management Section -->
                        <div class="profile-section">
                            <h5 class="profile-section-title">
                                <i class="fas fa-key me-2"></i> Password Management
                            </h5>
                            
                            <form id="passwordChangeForm">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="currentPassword" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password" disabled>
                                        <div class="form-text text-danger" id="currentPasswordError"></div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="newPassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" disabled>
                                        <div class="form-text text-danger" id="newPasswordError"></div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password" disabled>
                                        <div class="form-text text-danger" id="confirmPasswordError"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="profile-footer">
                        <a href="clerkprofile.html" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </a>
                        <button type="button" class="btn btn-primary" id="saveChangesBtn" disabled>
                            <i class="fas fa-save me-2"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar Information -->
            <div class="col-lg-4 mb-4">
                <!-- Profile Photo Card -->
                <div class="profile-container text-center">
                    <div class="profile-header">
                        <h5 class="profile-title">
                            <i class="fas fa-portrait me-2"></i> Profile Photo
                        </h5>
                    </div>
                    <div class="profile-body py-4">
                        <div class="avatar-container">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Christine Mae Degamo" class="user-avatar">
                            <span class="status-badge"></span>
                        </div>
                        <h5 class="mb-1">Christine Mae C. Degamo</h5>
                        <p class="text-muted mb-0">Clerk</p>
                    </div>
                </div>
                
                <!-- Security Tips Card -->
                <div class="profile-container">
                    <div class="profile-header">
                        <h5 class="profile-title">
                            <i class="fas fa-lock me-2"></i> Security Tips
                        </h5>
                    </div>
                    <div class="profile-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Use a strong password with at least 12 characters
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Include uppercase, lowercase, numbers, and symbols
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Don't reuse passwords across different accounts
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Change your password every 90 days
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Choose security questions that only you know the answer to
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Setup Security Questions Modal -->
    <div class="modal fade" id="setupSecurityModal" tabindex="-1" aria-labelledby="setupSecurityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="setupSecurityModalLabel">
                        <i class="fas fa-user-shield me-2"></i> Setup Security Questions
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Important:</strong> Please remember your security questions and answers. You will need them to change your password in the future, and they cannot be recovered or viewed once set.
                    </div>
                    <div class="form-text">Your answer is case-sensitive and must be exact when verifying.</div>
                    <br>
                    <form id="securityQuestionsForm">
                        <!-- Question 1 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center">
                                <span class="question-number">1</span> Security Question 1
                            </label>
                            <input type="text" class="form-control mb-3" id="question1" placeholder="Enter your security question">
                            <input type="password" class="form-control" id="answer1" placeholder="Your answer">
                            
                        </div>
                        
                        <!-- Question 2 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center">
                                <span class="question-number">2</span> Security Question 2
                            </label>
                            <input type="text" class="form-control mb-3" id="question2" placeholder="Enter your security question">
                            <input type="password" class="form-control" id="answer2" placeholder="Your answer">
                        </div>
                        
                        <!-- Question 3 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center">
                                <span class="question-number">3</span> Security Question 3
                            </label>
                            <input type="text" class="form-control mb-3" id="question3" placeholder="Enter your security question">
                            <input type="password" class="form-control" id="answer3" placeholder="Your answer">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveSecurityQuestionsBtn">Save Security Questions</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Verify Security Questions Modal -->
    <div class="modal fade" id="verifySecurityModal" tabindex="-1" aria-labelledby="verifySecurityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verifySecurityModalLabel">
                        <i class="fas fa-shield-alt me-2"></i> Verify Your Identity
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Please answer your security questions to confirm your identity before changing your password.
                    </div>
                    
                    <form id="verifySecurityForm">
                        <!-- Question 1 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center fw-bold">
                                <span class="question-number">1</span> 
                                <span id="securityQuestion1">What was the name of your first pet?</span>
                            </label>
                            <input type="password" class="form-control" id="securityAnswer1" placeholder="Your answer">
                            <div class="form-text text-danger" id="securityAnswer1Error"></div>
                        </div>
                        
                        <!-- Question 2 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center fw-bold">
                                <span class="question-number">2</span>
                                <span id="securityQuestion2">What was the make of your first car?</span>
                            </label>
                            <input type="password" class="form-control" id="securityAnswer2" placeholder="Your answer">
                            <div class="form-text text-danger" id="securityAnswer2Error"></div>
                        </div>
                        
                        <!-- Question 3 -->
                        <div class="mb-4">
                            <label class="form-label d-flex align-items-center fw-bold">
                                <span class="question-number">3</span>
                                <span id="securityQuestion3">What is your favorite book?</span>
                            </label>
                            <input type="password" class="form-control" id="securityAnswer3" placeholder="Your answer">
                            <div class="form-text text-danger" id="securityAnswer3Error"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmSecurityAnswersBtn">Confirm & Change Password</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="successModalLabel">
                        <i class="fas fa-check-circle me-2"></i> Success
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="mb-3" id="successMessage">Password Changed Successfully!</h4>
                    <p class="text-muted">Your security settings have been updated.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Store security questions and answers (in a real app, these would be stored securely on the server)
            let securityQuestions = {
                isSetup: false,
                questions: [],
                answers: []
            };
            
            // DOM elements
            const setupSecurityBtn = document.getElementById('setupSecurityBtn');
            const changeSecurityBtn = document.getElementById('changeSecurityBtn');
            const saveSecurityQuestionsBtn = document.getElementById('saveSecurityQuestionsBtn');
            const securitySetupIncomplete = document.getElementById('securitySetupIncomplete');
            const securitySetupComplete = document.getElementById('securitySetupComplete');
            const saveChangesBtn = document.getElementById('saveChangesBtn');
            const confirmSecurityAnswersBtn = document.getElementById('confirmSecurityAnswersBtn');
            
            // Password form elements
            const currentPassword = document.getElementById('currentPassword');
            const newPassword = document.getElementById('newPassword');
            const confirmPassword = document.getElementById('confirmPassword');
            const currentPasswordError = document.getElementById('currentPasswordError');
            const newPasswordError = document.getElementById('newPasswordError');
            const confirmPasswordError = document.getElementById('confirmPasswordError');
            
            // Modals
            const setupSecurityModal = new bootstrap.Modal(document.getElementById('setupSecurityModal'));
            const verifySecurityModal = new bootstrap.Modal(document.getElementById('verifySecurityModal'));
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            
            // Setup security questions button click handler
            setupSecurityBtn.addEventListener('click', function() {
                setupSecurityModal.show();
            });
            
            // Change security questions button click handler
            changeSecurityBtn.addEventListener('click', function() {
                setupSecurityModal.show();
            });
            
            // Save security questions button click handler
            saveSecurityQuestionsBtn.addEventListener('click', function() {
                // Get form values
                const q1 = document.getElementById('question1').value;
                const q2 = document.getElementById('question2').value;
                const q3 = document.getElementById('question3').value;
                const a1 = document.getElementById('answer1').value;
                const a2 = document.getElementById('answer2').value;
                const a3 = document.getElementById('answer3').value;
                
                // Validate form
                if (!q1 || !q2 || !q3 || !a1 || !a2 || !a3) {
                    alert('Please complete all security questions and answers.');
                    return;
                }
                
                // Store questions and answers
                securityQuestions.isSetup = true;
                securityQuestions.questions = [q1, q2, q3];
                securityQuestions.answers = [a1, a2, a3];
                
                // Update UI
                securitySetupIncomplete.style.display = 'none';
                securitySetupComplete.style.display = 'block';
                setupSecurityBtn.style.display = 'none';
                changeSecurityBtn.style.display = 'inline-block';
                
                // Enable password fields
                currentPassword.disabled = false;
                newPassword.disabled = false;
                confirmPassword.disabled = false;
                saveChangesBtn.disabled = false;
                
                // Close modal and show success message
                setupSecurityModal.hide();
                document.getElementById('successMessage').textContent = 'Security Questions Set Successfully!';
                successModal.show();
            });
            
            // New password validation
            newPassword.addEventListener('input', function() {
                // Check if passwords match
                if (confirmPassword.value && confirmPassword.value !== this.value) {
                    confirmPasswordError.textContent = 'Passwords do not match';
                } else if (confirmPassword.value) {
                    confirmPasswordError.textContent = '';
                }
            });
            
            // Confirm password validation
            confirmPassword.addEventListener('input', function() {
                if (this.value !== newPassword.value) {
                    confirmPasswordError.textContent = 'Passwords do not match';
                } else {
                    confirmPasswordError.textContent = '';
                }
            });
            
            // Save changes button click handler
            saveChangesBtn.addEventListener('click', function() {
                let hasError = false;
                
                // Validate current password (in a real app, this would check against the stored password)
                if (!currentPassword.value) {
                    currentPasswordError.textContent = 'Current password is required';
                    hasError = true;
                } else {
                    currentPasswordError.textContent = '';
                }
                
                // Check if passwords match if new password is provided
                if (!newPassword.value) {
                    newPasswordError.textContent = 'New password is required';
                    hasError = true;
                } else {
                    newPasswordError.textContent = '';
                }
                
                if (!confirmPassword.value) {
                    confirmPasswordError.textContent = 'Confirm password is required';
                    hasError = true;
                }
                
                if (newPassword.value && confirmPassword.value && newPassword.value !== confirmPassword.value) {
                    confirmPasswordError.textContent = 'Passwords do not match';
                    hasError = true;
                }
                
                if (hasError) {
                    return;
                }
                
                // If no errors, show security verification modal
                // Set the security questions in the verification modal
                document.getElementById('securityQuestion1').textContent = securityQuestions.questions[0];
                document.getElementById('securityQuestion2').textContent = securityQuestions.questions[1];
                document.getElementById('securityQuestion3').textContent = securityQuestions.questions[2];
                
                // Clear any previous answers and errors
                document.getElementById('securityAnswer1').value = '';
                document.getElementById('securityAnswer2').value = '';
                document.getElementById('securityAnswer3').value = '';
                document.getElementById('securityAnswer1Error').textContent = '';
                document.getElementById('securityAnswer2Error').textContent = '';
                document.getElementById('securityAnswer3Error').textContent = '';
                
                // Show the verification modal
                verifySecurityModal.show();
            });
            
            // Confirm security answers button click handler
            confirmSecurityAnswersBtn.addEventListener('click', function() {
                const answer1 = document.getElementById('securityAnswer1').value;
                const answer2 = document.getElementById('securityAnswer2').value;
                const answer3 = document.getElementById('securityAnswer3').value;
                
                // Check answers (in a real app, this would be done securely on the server)
                let hasError = false;
                
                if (answer1 !== securityQuestions.answers[0]) {
                    document.getElementById('securityAnswer1Error').textContent = 'Incorrect answer';
                    hasError = true;
                } else {
                    document.getElementById('securityAnswer1Error').textContent = '';
                }
                
                if (answer2 !== securityQuestions.answers[1]) {
                    document.getElementById('securityAnswer2Error').textContent = 'Incorrect answer';
                    hasError = true;
                } else {
                    document.getElementById('securityAnswer2Error').textContent = '';
                }
                
                if (answer3 !== securityQuestions.answers[2]) {
                    document.getElementById('securityAnswer3Error').textContent = 'Incorrect answer';
                    hasError = true;
                } else {
                    document.getElementById('securityAnswer3Error').textContent = '';
                }
                
                if (hasError) {
                    return;
                }
                
                // If all answers are correct, close the verification modal and show success
                verifySecurityModal.hide();
                
                // Reset password form
                currentPassword.value = '';
                newPassword.value = '';
                confirmPassword.value = '';
                
                // Show success message
                document.getElementById('successMessage').textContent = 'Password Changed Successfully!';
                successModal.show();
            });
        });    </script>
</div>
<?php
// Page title for the sidebar
$pageTitle = "Manage Plans";
?>

<!-- Manage Plans Page -->
<div class="manage-plans-container">
    <div class="plans-banner">
        <div class="overlay"></div>        <div class="logo-section">            <div class="logo-container shine-effect">
                <!-- Try multiple paths with final fallback to ensure logo displays -->
                <img src="/Boiler Plate/images/jbc_logo.jpg" 
                     onerror="this.onerror=null; this.src='../../images/jbc_logo.jpg'; if(!this.complete) this.src='/images/jbc_logo.jpg'; if(!this.complete) this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSIjNzgyRTlEIi8+PHRleHQgeD0iNTAiIHk9IjUwIiBmb250LXNpemU9IjI0IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBhbGlnbm1lbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0id2hpdGUiPkpCQzwvdGV4dD48L3N2Zz4=';" 
                     alt="JBC Fitness Gym Logo" class="gym-logo">
            </div>
            <h1 class="text-center membership-title">Membership Plans</h1>
            <p class="text-center plan-subtitle">Choose the perfect plan for your fitness journey</p>
        </div>
    </div>
    
    <div class="plans-header">
        <div class="plans-counter">
            <span class="plan-count">3</span> active plans
        </div>
        <button class="btn gradient-btn add-plan-btn" id="addPlanBtn">
            <i class="fas fa-plus me-2"></i> ADD PLAN
        </button>
    </div>

    <!-- Plans Grid -->
    <div class="plans-grid">
        <!-- Day Pass Plan -->
        <div class="plan-card">
            <div class="plan-header">
                <div class="plan-actions">
                    <button class="edit-plan-btn" data-plan-id="daypass">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="delete-plan-btn" data-plan-id="daypass">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="plan-price">100.00</div>
            <div class="plan-features">
                <ul>
                    <li>Single Session Flexibility</li>
                    <li>Personal Training Discount</li>
                    <li>Guest Passes</li>
                    <li>Free Gym Equipment Rental</li>
                    <li>Exclusive Session Classes</li>
                </ul>
            </div>
            <div class="plan-type">
                <span>SESSION</span>
            </div>
        </div>

        <!-- Monthly Plan -->
        <div class="plan-card">
            <div class="plan-header">
                <div class="plan-actions">
                    <button class="edit-plan-btn" data-plan-id="monthly">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="delete-plan-btn" data-plan-id="monthly">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="plan-price">800.00</div>
            <div class="plan-features">
                <ul>
                    <li>Single Session Flexibility</li>
                    <li>Personal Training Discount</li>
                    <li>Guest Passes</li>
                    <li>Free Gym Equipment Rental</li>
                    <li>Exclusive Session Classes</li>
                </ul>
            </div>
            <div class="plan-type">
                <span>MONTHLY</span>
            </div>
        </div>

        <!-- Annual Plan -->
        <div class="plan-card">
            <div class="plan-header">
                <div class="plan-actions">
                    <button class="edit-plan-btn" data-plan-id="annual">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="delete-plan-btn" data-plan-id="annual">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="plan-price">8500.00</div>
            <div class="plan-features">
                <ul>
                    <li>Single Session Flexibility</li>
                    <li>Personal Training Discount</li>
                    <li>Guest Passes</li>
                    <li>Free Gym Equipment Rental</li>
                    <li>Exclusive Session Classes</li>
                </ul>
            </div>
            <div class="plan-type">
                <span>ANNUALLY</span>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Plan Modal -->
<div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="planModalLabel">
                    <i class="fas fa-plus me-2"></i> Add New Plan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="planForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="planType" class="form-label">Plan Type</label>
                            <select class="form-select" id="planType" required>
                                <option value="">Select plan type</option>
                                <option value="session">Session (Day Pass)</option>
                                <option value="monthly">Monthly</option>
                                <option value="annually">Annually</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="planPrice" class="form-label">Price (₱)</label>
                            <input type="number" step="0.01" class="form-control" id="planPrice" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Features</label>
                        <div class="features-container">
                            <div class="feature-item d-flex align-items-center mb-2">
                                <input type="text" class="form-control me-2" placeholder="Enter feature">
                                <button type="button" class="btn btn-danger btn-sm remove-feature"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-2">
                                <input type="text" class="form-control me-2" placeholder="Enter feature">
                                <button type="button" class="btn btn-danger btn-sm remove-feature"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary btn-sm mt-2" id="addFeatureBtn">
                            <i class="fas fa-plus"></i> Add Feature
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn gradient-btn" id="savePlanBtn">Save Plan</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Manage Plans Styles */
    .manage-plans-container {
        padding: 0;
    }    /* Banner and Logo section */    .plans-banner {
        position: relative;
        padding: 10px 0; /* Further reduced padding from 20px to 10px */
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23782e9d" fill-opacity="0.1" d="M0,96L48,101.3C96,107,192,117,288,144C384,171,480,213,576,208C672,203,768,149,864,138.7C960,128,1056,160,1152,170.7C1248,181,1344,171,1392,165.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center bottom;
        margin-bottom: 25px; /* Further reduced margin from 30px to 25px */
        border-radius: 15px;
        overflow: hidden;
    }
    
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(120, 46, 157, 0.05) 0%, rgba(142, 68, 173, 0.1) 100%);
    }
    
    .logo-section {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 2;
    }      .logo-container {
        width: 80px; /* Further reduced from 100px to 80px */
        height: 80px; /* Further reduced from 100px to 80px */
        margin-bottom: 10px; /* Further reduced from 15px to 10px */
        position: relative;
        border-radius: 50%;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); /* Reduced shadow */
        overflow: hidden;
    }
    
    .shine-effect {
        position: relative;
    }
    
    .shine-effect:before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0) 100%);
        transform: rotate(-45deg);
        animation: shine 3s infinite;
        z-index: 2;
        pointer-events: none;
    }
    
    @keyframes shine {
        0% {
            transform: translateX(-100%) rotate(-45deg);
        }
        100% {
            transform: translateX(100%) rotate(-45deg);
        }
    }
    
    .gym-logo {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }      .membership-title {
        color: var(--primary);
        font-weight: 800;
        font-size: 2.2rem; /* Further reduced from 2.6rem to 2.2rem */
        margin: 2px 0 6px; /* Further reduced from 5px 0 10px to 2px 0 6px */
        text-align: center;
        background: linear-gradient(135deg, var(--primary) 20%, #8e44ad 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        filter: drop-shadow(0 1px 1px rgba(0, 0, 0, 0.1)); /* Reduced shadow */
    }      .plan-subtitle {
        font-size: 0.9rem; /* Further reduced from 1rem to 0.9rem */
        color: #666;
        margin-bottom: 5px; /* Further reduced from 10px to 5px */
        font-weight: 400;
    }.plans-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px; /* Reduced from 40px */
        background: white;
        border-radius: 15px;
        padding: 15px 25px; /* Reduced top/bottom padding from 20px to 15px */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
      .plans-counter {
        font-size: 1rem; /* Reduced from 1.2rem */
        color: #666;
        display: flex;
        align-items: center;
    }
      .plan-count {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        border-radius: 50%;
        width: 30px; /* Reduced from 36px */
        height: 30px; /* Reduced from 36px */
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        font-weight: 700;
        box-shadow: 0 3px 10px rgba(120, 46, 157, 0.3);
    }
      .add-plan-btn {
        padding: 10px 24px; /* Reduced from 12px 28px */
        border-radius: 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.85rem; /* Reduced from 0.9rem */
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    /* Plans grid */
    .plans-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }    /* Plan card styling */
    .plan-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        transition: all 0.4s ease;
        position: relative;
        border: none;
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    .plan-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 8px;
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        z-index: 1;
    }
    
    .plan-card:after {
        content: "";
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
    }
      .plan-card:hover {
        transform: translateY(-10px) rotateX(3deg);
        box-shadow: 0 15px 35px rgba(138, 43, 226, 0.2);
    }
    
    .plan-card:hover::after {
        opacity: 1;
    }
    
    .plan-header {
        padding: 15px;
        display: flex;
        justify-content: flex-end;
    }
    
    .plan-actions {
        display: flex;
        gap: 10px;
    }
      .edit-plan-btn, .delete-plan-btn {
        background: none;
        border: none;
        padding: 5px;
        cursor: pointer;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    }
    
    .edit-plan-btn {
        background: rgba(74, 111, 220, 0.1);
        color: #4a6fdc;
    }
    
    .delete-plan-btn {
        background: rgba(220, 74, 95, 0.1);
        color: #dc4a5f;
    }
    
    .edit-plan-btn:hover {
        background-color: #4a6fdc;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(74, 111, 220, 0.3);
    }
    
    .delete-plan-btn:hover {
        background-color: #dc4a5f;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(220, 74, 95, 0.3);
    }.plan-price {
        font-size: 3rem;
        font-weight: 800;
        text-align: center;
        padding: 30px 0;
        color: #333;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        background: linear-gradient(145deg, #f8f9fd, #ffffff);
        text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
    }
    
    .plan-price::before {
        content: "₱";
        font-size: 1.8rem;
        vertical-align: super;
        position: relative;
        top: -5px;
        margin-right: 3px;
        font-weight: 600;
        opacity: 0.8;
    }
    
    .plan-price::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 5%;
        width: 90%;
        height: 2px;
        background: linear-gradient(to right, 
            transparent 0%, 
            rgba(120, 46, 157, 0.6) 50%, 
            transparent 100%
        );
    }
      .plan-features {
        padding: 10px 25px 25px;
        flex-grow: 1;
    }
    
    .plan-features ul {
        list-style-type: none;
        padding: 0;
        margin: 10px 0 0;
    }
    
    .plan-features li {
        padding: 12px 0;
        position: relative;
        padding-left: 30px;
        border-bottom: 1px dashed rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    
    .plan-features li:last-child {
        border-bottom: none;
    }
    
    .plan-card:hover .plan-features li {
        transform: translateX(5px);
    }
    
    .plan-features li::before {
        content: "✓";
        position: absolute;
        left: 5px;
        color: var(--primary);
        font-weight: bold;
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, rgba(120, 46, 157, 0.1) 0%, rgba(142, 68, 173, 0.2) 100%);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }
      .plan-type {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        font-weight: 700;
        text-align: center;
        padding: 18px;
        letter-spacing: 2px;
        position: relative;
        overflow: hidden;
        z-index: 1;
        text-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }
    
    .plan-type:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        z-index: -1;
    }
    
    .plan-type span {
        position: relative;
        font-size: 1.1rem;
    }
    
    .plan-type span:after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background-color: rgba(255, 255, 255, 0.7);
        transition: width 0.3s ease;
    }
    
    .plan-card:hover .plan-type span:after {
        width: 50%;
    }
    
    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .plans-grid {
            grid-template-columns: 1fr;
        }
    }
      /* Gradient Button Styling */
    .gradient-btn {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.4s ease;
        position: relative;
        z-index: 1;
    }
    
    .gradient-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #8e44ad 0%, var(--primary) 100%);
        opacity: 0;
        z-index: -1;
        transition: opacity 0.4s ease;
    }
    
    .gradient-btn:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 10px 20px rgba(120, 46, 157, 0.3);
    }
    
    .gradient-btn:hover::before {
        opacity: 1;
    }
    
    .gradient-btn:active {
        transform: translateY(0) scale(0.98);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add Plan button click handler
        document.getElementById('addPlanBtn').addEventListener('click', function() {
            // Reset form
            document.getElementById('planForm').reset();
            
            // Update modal title
            document.getElementById('planModalLabel').innerHTML = '<i class="fas fa-plus me-2"></i> Add New Plan';
            
            // Show modal
            new bootstrap.Modal(document.getElementById('planModal')).show();
        });
        
        // Edit plan button click handler
        document.querySelectorAll('.edit-plan-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const planId = this.getAttribute('data-plan-id');
                
                // Update modal title
                document.getElementById('planModalLabel').innerHTML = '<i class="fas fa-edit me-2"></i> Edit Plan';
                
                // Fill form with plan data (this would normally come from a database)
                switch (planId) {
                    case 'daypass':
                        document.getElementById('planType').value = 'session';
                        document.getElementById('planPrice').value = '100.00';
                        break;
                    case 'monthly':
                        document.getElementById('planType').value = 'monthly';
                        document.getElementById('planPrice').value = '800.00';
                        break;
                    case 'annual':
                        document.getElementById('planType').value = 'annually';
                        document.getElementById('planPrice').value = '8500.00';
                        break;
                }
                
                // Show modal
                new bootstrap.Modal(document.getElementById('planModal')).show();
            });
        });
        
        // Delete plan button click handler
        document.querySelectorAll('.delete-plan-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const planId = this.getAttribute('data-plan-id');
                if (confirm('Are you sure you want to delete this plan?')) {
                    // Here you would normally send an AJAX request to delete the plan
                    alert('Plan deleted successfully!');
                }
            });
        });
        
        // Add feature button click handler
        document.getElementById('addFeatureBtn').addEventListener('click', function() {
            const featureItem = document.createElement('div');
            featureItem.className = 'feature-item d-flex align-items-center mb-2';
            featureItem.innerHTML = `
                <input type="text" class="form-control me-2" placeholder="Enter feature">
                <button type="button" class="btn btn-danger btn-sm remove-feature"><i class="fas fa-times"></i></button>
            `;
            
            document.querySelector('.features-container').appendChild(featureItem);
            
            // Add event listener for the new remove feature button
            featureItem.querySelector('.remove-feature').addEventListener('click', function() {
                this.parentElement.remove();
            });
        });
        
        // Remove feature button click handler (for initial buttons)
        document.querySelectorAll('.remove-feature').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });
        
        // Save plan button click handler
        document.getElementById('savePlanBtn').addEventListener('click', function() {
            // Here you would normally validate the form and save the plan data
            // For demo purposes, we'll just close the modal
            bootstrap.Modal.getInstance(document.getElementById('planModal')).hide();
            
            // Show success alert
            alert('Plan saved successfully!');
        });
    });
</script>
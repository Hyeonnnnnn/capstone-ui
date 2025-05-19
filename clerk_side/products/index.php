<div class="main-content">
    <div class="container-fluid pt-4 px-4">        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-purple fw-bold mb-0">Products</h1>
        </div>
        
        <!-- Search Bar -->
        <div class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control search-input" placeholder="Search products...">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="mb-4">
            <button class="btn category-btn active me-2" data-category="all">All</button>
            <button class="btn category-btn me-2" data-category="Beverages">Beverages</button>
            <button class="btn category-btn" data-category="Supplements">Supplements</button>
        </div>
        
        <!-- Products Display -->
        <div class="row" id="productsContainer">
            <!-- Nature's Spring Product Card -->
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 product-item" data-category="Beverages">
                <div class="card product-card">                    <div class="action-icons">
                        <button class="btn btn-sm btn-icon stock-icon" data-bs-toggle="modal" data-bs-target="#manageStockModal"
                            data-id="1" 
                            data-name="Nature's Spring" 
                            data-stock="45">
                            <i class="fas fa-boxes"></i>
                        </button>
                    </div>
                    <div class="product-image">                        <img src="../images/products/2.png" alt="Nature's Spring Water">
                    </div>
                    <div class="card-body p-3">
                        <span class="badge beverage-badge">Beverage</span>
                        <h5 class="product-name mt-2">Nature's Spring (500mL)</h5>
                        <p class="product-price">₱15.00</p>
                        <p class="product-stock">In stock (45 pcs. available)</p>
                    </div>
                </div>
            </div>
            
            <!-- Gatorade Product Card -->
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 product-item" data-category="Beverages">
                <div class="card product-card">                    <div class="action-icons">
                        <button class="btn btn-sm btn-icon stock-icon" data-bs-toggle="modal" data-bs-target="#manageStockModal"
                            data-id="2" 
                            data-name="Gatorade" 
                            data-stock="30">
                            <i class="fas fa-boxes"></i>
                        </button>
                    </div>
                    <div class="product-image">                        <img src="../images/products/1.webp" alt="Gatorade">
                    </div>
                    <div class="card-body p-3">
                        <span class="badge beverage-badge">Beverage</span>
                        <h5 class="product-name mt-2">Gatorade</h5>
                        <p class="product-price">₱45.00</p>
                        <p class="product-stock">In stock (30 pcs. available)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Manage Stock Modal -->
<div class="modal fade" id="manageStockModal" tabindex="-1" aria-labelledby="manageStockModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content stock-modal">
            <div class="modal-header stock-modal-header">
                <h5 class="modal-title" id="manageStockModalLabel">
                    <i class="fas fa-boxes me-2"></i> Manage Product Stock
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="manageStockForm">
                <div class="modal-body">
                    <input type="hidden" id="stockProductId" name="productId">
                    
                    <div class="product-info-card mb-4">
                        <div class="current-stock-badge" id="stockBadge">
                            <span id="currentStock"></span>
                            <small class="d-block">in stock</small>
                        </div>
                        <h4 id="stockProductName" class="mb-1"></h4>
                        <p class="text-muted">Please update the inventory carefully</p>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Stock Action</label>
                        <div class="stock-action-container">
                            <div class="stock-action-option">
                                <input class="form-check-input visually-hidden" type="radio" name="stockAction" id="addStock" value="add" checked>
                                <label class="stock-action-label add-action" for="addStock">
                                    <i class="fas fa-plus-circle me-2"></i> Add Stock
                                </label>
                            </div>
                            <div class="stock-action-option">
                                <input class="form-check-input visually-hidden" type="radio" name="stockAction" id="subtractStock" value="subtract">
                                <label class="stock-action-label subtract-action" for="subtractStock">
                                    <i class="fas fa-minus-circle me-2"></i> Subtract Stock
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="stockQuantity" class="form-label fw-bold">Quantity</label>
                        <div class="quantity-control">
                            <button type="button" class="btn btn-outline-secondary" id="decreaseQuantity">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" class="form-control quantity-input" id="stockQuantity" name="stockQuantity" min="1" value="1" required>
                            <button type="button" class="btn btn-outline-secondary" id="increaseQuantity">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="stockReason" class="form-label fw-bold">Reason for Change</label>
                        <select class="form-select reason-select" id="stockReason" name="reason" required>
                            <option value="" selected disabled>Select a reason</option>
                            <option value="delivery">New Delivery</option>
                            <option value="correction">Stock Correction</option>
                            <option value="damaged">Damaged Items</option>
                            <option value="expired">Expired Items</option>
                            <option value="other">Other (Please specify)</option>
                        </select>
                    </div>
                    
                    <div class="mb-3 d-none" id="otherReasonContainer">
                        <label for="otherReason" class="form-label">Specify Other Reason</label>
                        <textarea class="form-control" id="otherReason" name="otherReason" rows="2" placeholder="Please explain the reason for stock adjustment..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary update-stock-btn">
                        <i class="fas fa-save me-2"></i> Update Stock
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Custom Colors */
    :root {
        --primary-purple: #451968;
        --primary-purple-light: #782e9d;
    }
    
    /* Text Colors */
    .text-purple {
        color: var(--primary-purple);
    }
    
    /* Search Input */
    .search-input {
        border-radius: 5px 0 0 5px;
        border: 1px solid #ced4da;
    }
    
    /* Add Product Button */
    .add-product-btn {
        background-color: var(--primary-purple);
        border-color: var(--primary-purple);
        border-radius: 20px;
        padding: 8px 20px;
        font-weight: 500;
    }
    
    .add-product-btn:hover {
        background-color: var(--primary-purple-light);
        border-color: var(--primary-purple-light);
    }
    
    /* Category Buttons */
    .category-btn {
        background-color: #e9ecef;
        border-color: #e9ecef;
        color: #495057;
        border-radius: 20px;
        padding: 8px 20px;
        transition: all 0.2s ease;
    }
    
    .category-btn.active {
        background-color: var(--primary-purple);
        border-color: var(--primary-purple);
        color: white;
    }
    
    .category-btn:hover:not(.active) {
        background-color: #dee2e6;
    }
    
    /* Product Card Styling */
    .product-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid #eee;
        position: relative;
    }
    
    .product-card:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }
    
    .product-image {
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background-color: #f8f9fa;
    }    .product-image img {
        max-height: 140px;
        max-width: 100%;
        object-fit: contain;
    }
    
    .action-icons {
        position: absolute;
        top: 10px;
        right: 10px;
        display: flex;
        gap: 5px;
    }
    
    .btn-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        background-color: white;
    }
      .stock-icon {
        color: #28a745;
        border-color: #28a745;
    }
    
    .product-name {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .product-price {
        font-weight: bold;
        color: var(--primary-purple);
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }
    
    .product-stock {
        font-size: 0.85rem;
        color: #6c757d;
        margin-bottom: 0;
    }
      .beverage-badge {
        background-color: #e3f2fd;
        color: #0d6efd;
        font-weight: 500;
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        border-radius: 10px;
    }
    
    /* Stock Modal Styling */
    .stock-modal {
        border-radius: 15px;
        overflow: hidden;
    }
    
    .stock-modal-header {
        background: linear-gradient(135deg, var(--primary-purple) 0%, var(--primary-purple-light) 100%);
        color: white;
    }
    
    .product-info-card {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        position: relative;
        border-left: 5px solid var(--primary-purple);
    }
    
    .current-stock-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, var(--primary-purple) 0%, var(--primary-purple-light) 100%);
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 50px;
        text-align: center;
        min-width: 70px;
    }
    
    .current-stock-badge small {
        font-size: 0.7rem;
        opacity: 0.8;
    }
    
    .stock-action-container {
        display: flex;
        gap: 15px;
    }
    
    .stock-action-option {
        flex: 1;
    }
    
    .stock-action-label {
        display: block;
        padding: 12px;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
        font-weight: 500;
        border: 2px solid #e9ecef;
    }
    
    .add-action:hover, input:checked + .add-action {
        background-color: #d4edda;
        border-color: #28a745;
        color: #28a745;
    }
    
    .subtract-action:hover, input:checked + .subtract-action {
        background-color: #f8d7da;
        border-color: #dc3545;
        color: #dc3545;
    }
    
    .quantity-control {
        display: flex;
        align-items: center;
    }
    
    .quantity-input {
        text-align: center;
        font-size: 1.1rem;
        font-weight: 500;
        border-radius: 0;
        flex: 1;
    }
    
    .quantity-control .btn {
        border-radius: 4px;
        width: 40px;
        height: 38px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .reason-select {
        border-radius: 8px;
        padding: 10px 15px;
        border-color: #ced4da;
    }
    
    .update-stock-btn {
        background: linear-gradient(135deg, var(--primary-purple) 0%, var(--primary-purple-light) 100%);
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
    }
</style>

<script>    // Script to handle product stock management
    document.addEventListener('DOMContentLoaded', function() {
        // Category Filter functionality
        const categoryBtns = document.querySelectorAll('.category-btn');
        const productItems = document.querySelectorAll('.product-item');
        
        // Filter products by category
        function filterProducts(category) {
            productItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
        
        // Add click event to category buttons
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                categoryBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterProducts(this.dataset.category);
            });
        });
        
        // Search functionality
        const searchInput = document.querySelector('.search-input');
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            productItems.forEach(item => {
                const productName = item.querySelector('.product-name').textContent.toLowerCase();
                const productCategory = item.dataset.category.toLowerCase();
                
                if (productName.includes(searchTerm) || productCategory.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
          // Manage Stock Modal
        const manageStockModal = document.getElementById('manageStockModal');
        
        if (manageStockModal) {
            manageStockModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                
                // Extract product data from button data attributes
                const productId = button.getAttribute('data-id');
                const productName = button.getAttribute('data-name');
                const productStock = button.getAttribute('data-stock');
                
                // Populate the modal with product data
                document.getElementById('stockProductId').value = productId;
                document.getElementById('stockProductName').textContent = productName;
                document.getElementById('currentStock').textContent = productStock;
                
                // Reset form
                document.getElementById('stockQuantity').value = 1;
                document.getElementById('stockReason').value = '';
                document.getElementById('addStock').checked = true;
                document.getElementById('otherReasonContainer').classList.add('d-none');
                document.getElementById('otherReason').value = '';
                
                // Update stock badge style based on stock level
                const stockBadge = document.getElementById('stockBadge');
                const stockLevel = parseInt(productStock);
                
                if (stockLevel <= 5) {
                    stockBadge.style.background = 'linear-gradient(135deg, #dc3545 0%, #ff6b6b 100%)';
                } else if (stockLevel <= 20) {
                    stockBadge.style.background = 'linear-gradient(135deg, #ffc107 0%, #ffdf7e 100%)';
                    stockBadge.style.color = '#000';
                } else {
                    stockBadge.style.background = 'linear-gradient(135deg, #28a745 0%, #5dd879 100%)';
                }
            });
            
            // Quantity control buttons functionality
            document.getElementById('decreaseQuantity').addEventListener('click', function() {
                const quantityInput = document.getElementById('stockQuantity');
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });
            
            document.getElementById('increaseQuantity').addEventListener('click', function() {
                const quantityInput = document.getElementById('stockQuantity');
                const currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        }
        
        // Show/hide "other reason" field when reason is selected
        const stockReason = document.getElementById('stockReason');
        if (stockReason) {
            stockReason.addEventListener('change', function() {
                const otherReasonContainer = document.getElementById('otherReasonContainer');
                
                if (this.value === 'other') {
                    otherReasonContainer.classList.remove('d-none');
                    document.getElementById('otherReason').setAttribute('required', 'required');
                } else {
                    otherReasonContainer.classList.add('d-none');
                    document.getElementById('otherReason').removeAttribute('required');
                }
            });
        }
        
        // Form submission handling for stock management
        const manageStockForm = document.getElementById('manageStockForm');
        if (manageStockForm) {
            manageStockForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const productId = document.getElementById('stockProductId').value;
                const stockAction = document.querySelector('input[name="stockAction"]:checked').value;
                const quantity = parseInt(document.getElementById('stockQuantity').value);
                const reason = document.getElementById('stockReason').value;
                let otherReason = '';
                
                if (reason === 'other') {
                    otherReason = document.getElementById('otherReason').value;
                }
                
                // Validate form
                if (quantity <= 0) {
                    alert('Please enter a valid quantity');
                    return;
                }
                
                // Get current stock
                const currentStockElement = document.getElementById('currentStock');
                let currentStock = parseInt(currentStockElement.textContent);
                
                // Calculate new stock
                let newStock;
                if (stockAction === 'add') {
                    newStock = currentStock + quantity;
                } else {
                    newStock = currentStock - quantity;
                    if (newStock < 0) {
                        alert('Error: Cannot subtract more than the current stock.');
                        return;
                    }
                }
                
                // Here you would normally save this data via AJAX
                console.log({
                    productId,
                    stockAction,
                    quantity,
                    reason,
                    otherReason,
                    newStock
                });
                
                // Update the stock display in both modal and product card
                currentStockElement.textContent = newStock;
                
                const stockDisplay = document.querySelector(`.stock-icon[data-id="${productId}"]`)
                    .closest('.product-card')
                    .querySelector('.product-stock');
                    
                stockDisplay.textContent = `In stock (${newStock} pcs. available)`;
                
                // Update the data-stock attribute
                document.querySelector(`.stock-icon[data-id="${productId}"]`).setAttribute('data-stock', newStock);
                
                // Show success message
                alert(`Stock ${stockAction === 'add' ? 'added' : 'subtracted'} successfully. New stock: ${newStock}`);
                
                // Close modal
                let modal = bootstrap.Modal.getInstance(manageStockModal);
                modal.hide();
            });
        }
    });
</script>
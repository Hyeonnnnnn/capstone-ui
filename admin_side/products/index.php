<div class="main-content">
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-purple fw-bold mb-0">Products</h1>
            <button type="button" class="btn btn-primary add-product-btn" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="fas fa-plus me-2"></i> Add Product
            </button>
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
                <div class="card product-card">
                    <div class="action-icons">
                        <button class="btn btn-sm btn-icon edit-icon" data-bs-toggle="modal" data-bs-target="#editProductModal"
                            data-id="1" 
                            data-name="Nature's Spring" 
                            data-description="Purified Drinking Water" 
                            data-price="15.00"
                            data-stock="45"
                            data-category="Beverages">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-icon delete-icon">
                            <i class="fas fa-trash"></i>                        </button>                    </div>
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
                <div class="card product-card">
                    <div class="action-icons">
                        <button class="btn btn-sm btn-icon edit-icon" data-bs-toggle="modal" data-bs-target="#editProductModal"
                            data-id="2" 
                            data-name="Gatorade" 
                            data-description="Sports Drink" 
                            data-price="45.00"
                            data-stock="30"
                            data-category="Beverages">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-icon delete-icon">
                            <i class="fas fa-trash"></i>                        </button>                    </div>
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

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addProductForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Category</label>
                        <select class="form-select" id="productCategory" name="productCategory" required>
                            <option value="" selected disabled>Select Category</option>
                            <option value="Beverages">Beverages</option>
                            <option value="Supplements">Supplements</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="productPrice" class="form-label">Price (₱)</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" min="0" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="productStock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="productStock" name="productStock" min="0" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="productImage" name="productImage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editProductForm">
                <div class="modal-body">
                    <input type="hidden" id="editProductId" name="productId">
                    <div class="mb-3">
                        <label for="editProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="editProductName" name="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProductDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editProductDescription" name="productDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editProductCategory" class="form-label">Category</label>
                        <select class="form-select" id="editProductCategory" name="productCategory" required>
                            <option value="Beverages">Beverages</option>
                            <option value="Supplements">Supplements</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editProductPrice" class="form-label">Price (₱)</label>
                            <input type="number" class="form-control" id="editProductPrice" name="productPrice" min="0" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editProductStock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="editProductStock" name="productStock" min="0" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editProductImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="editProductImage" name="productImage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this product?
                <input type="hidden" id="deleteProductId">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
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
    
    .edit-icon {
        color: #6c757d;
        border-color: #6c757d;
    }
    
    .delete-icon {
        color: #dc3545;
        border-color: #dc3545;
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
</style>

<script>
    // Script to populate the edit product modal with data
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
        
        // Edit Product Modal
        const editProductModal = document.getElementById('editProductModal');
        
        if (editProductModal) {
            editProductModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                
                // Extract product data from button data attributes
                const productId = button.getAttribute('data-id');
                const productName = button.getAttribute('data-name');
                const productDescription = button.getAttribute('data-description');
                const productPrice = button.getAttribute('data-price');
                const productStock = button.getAttribute('data-stock');
                const productCategory = button.getAttribute('data-category');
                
                // Populate the modal form fields with product data
                document.getElementById('editProductId').value = productId;
                document.getElementById('editProductName').value = productName;
                document.getElementById('editProductDescription').value = productDescription;
                document.getElementById('editProductPrice').value = productPrice;
                document.getElementById('editProductStock').value = productStock;
                document.getElementById('editProductCategory').value = productCategory;
            });
        }
        
        // Delete Product Modal
        const deleteButtons = document.querySelectorAll('.delete-icon');
        const deleteProductModal = document.getElementById('deleteProductModal');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productCard = this.closest('.product-card');
                const productId = productCard.querySelector('.edit-icon').getAttribute('data-id');
                
                document.getElementById('deleteProductId').value = productId;
                
                // Show the delete confirmation modal
                const deleteModal = new bootstrap.Modal(deleteProductModal);
                deleteModal.show();
            });
        });
        
        // Handle delete confirmation
        if (confirmDeleteBtn) {
            confirmDeleteBtn.addEventListener('click', function() {
                const productId = document.getElementById('deleteProductId').value;
                
                // Here you would typically send an AJAX request to delete the product
                console.log('Deleting product ID:', productId);
                
                // For demo purposes, let's remove the product card from the DOM
                const productCard = document.querySelector(`.edit-icon[data-id="${productId}"]`).closest('.product-item');
                productCard.remove();
                
                // Close the modal
                const deleteModal = bootstrap.Modal.getInstance(deleteProductModal);
                deleteModal.hide();
                
                // Show a success toast or alert
                alert('Product deleted successfully');
            });
        }
        
        // Form submission handling
        const addProductForm = document.getElementById('addProductForm');
        if (addProductForm) {
            addProductForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Process form data and send to server
                alert('Add product functionality will be implemented');
                // Close modal after submission
                let modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                modal.hide();
            });
        }
        
        const editProductForm = document.getElementById('editProductForm');
        if (editProductForm) {
            editProductForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Process form data and send to server
                alert('Edit product functionality will be implemented');
                // Close modal after submission
                let modal = bootstrap.Modal.getInstance(document.getElementById('editProductModal'));
                modal.hide();
            });
        }
    });
</script>
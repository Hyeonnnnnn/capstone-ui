

<div class="main-content">    <!-- Add Roboto Mono font for table numbers -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <div class="container-fluid pt-4 px-4">
        <!-- Sales Header with Summary Card -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <h1 class="text-purple fw-bold mb-4">Sales</h1>
            
            <!-- Sales Summary Card -->
            <div class="summary-card text-end">
                <div class="d-flex justify-content-between">
                    <span class="text-muted">Sales Amount</span>
                    <span class="fw-bold">₱1,278</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-muted">Sales Tax</span>
                    <span class="fw-bold">₱153.36</span>
                </div>
                <div class="d-flex justify-content-between border-top mt-2 pt-2">
                    <span class="fw-bold">Sales Total</span>
                    <span class="fw-bold">₱1,124.64</span>
                </div>
            </div>
        </div>
        
        <!-- Filter and Date Selection -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <!-- Product Filter -->
                <div class="dropdown me-3">
                    <div class="input-group">
                        <select class="form-select rounded-pill px-3 py-2 border" id="productFilter" style="min-width: 200px;">
                            <option value="All" selected>All</option>
                            <option value="Nature's Spring">Nature's Spring</option>
                            <option value="Gatorade">Gatorade</option>
                        </select>
                    </div>
                </div>
                
                <!-- Date Picker -->
                <div>
                    <div class="input-group">
                        <input type="date" class="form-control rounded-pill px-3 py-2 border" id="salesDate" value="<?php echo date('Y-m-d'); ?>">
                        <button class="btn btn-outline-secondary position-absolute end-0 top-0 bottom-0 rounded-pill" type="button" id="calendarBtn">
                            <i class="fas fa-calendar"></i>
                        </button>
                    </div>
                </div>
            </div>            <!-- Action Button -->
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-primary add-transaction-btn" data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                    <i class="fas fa-plus me-2"></i> Add Transaction
                </button>
            </div>
            </div>
        </div>
          <!-- Sales Table -->
        <div class="card sales-table-card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-purple">
                            <tr>
                                <th>Item no.</th>
                                <th>Item name</th>
                                <th>Description</th>
                                <th>Cost price</th>
                                <th>SRP</th>
                                <th>Tax rate</th>
                                <th>Tax</th>
                                <th>Qty</th>
                                <th>Total Amount</th>
                                <th>Income per item</th>
                                <th>Total Income</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nature's Spring</td>
                                <td>Bottled water</td>
                                <td>₱10</td>
                                <td>₱15</td>
                                <td>12%</td>
                                <td>₱1.80</td>
                                <td>30</td>
                                <td>₱450</td>
                                <td>₱3.20</td>
                                <td>₱96</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Gatorade</td>
                                <td>Energy drink</td>
                                <td>₱34</td>
                                <td>₱46</td>
                                <td>12%</td>
                                <td>₱5.52</td>
                                <td>18</td>
                                <td>₱828</td>
                                <td>₱6.48</td>
                                <td>₱116.64</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10" class="text-end fw-bold">Total:</td>
                                <td class="fw-bold">₱212.64</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white" style="background: var(--gradient-primary) !important;">
                <h5 class="modal-title" id="addTransactionModalLabel">
                    <i class="fas fa-exchange-alt me-2"></i> Add New Transaction
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="transactionDate" class="form-label">Transaction Date</label>
                        <input type="date" class="form-control" id="transactionDate" name="transactionDate" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                </div>
                
                <!-- Product Selection Form -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label for="productSelect" class="form-label">Product</label>
                        <select class="form-select" id="productSelect">
                            <option value="" disabled selected>Select Product</option>
                            <option value="nature" data-price="15">Nature's Spring</option>
                            <option value="gatorade" data-price="46">Gatorade</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="quantityInput" class="form-label">Quantity</label>
                        <div class="quantity-control">
                            <button class="btn btn-outline-secondary" type="button" id="decreaseBtn">-</button>
                            <input type="number" class="form-control" id="quantityInput" value="1" min="1" style="width: 80px; min-width: 80px;">
                            <button class="btn btn-outline-secondary" type="button" id="increaseBtn">+</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="costDisplay" class="form-label">Cost</label>
                        <div class="cost-display p-2 border rounded" id="costDisplay">₱0.00</div>
                    </div>
                </div>
                
                <button type="button" class="btn btn-success mb-4" id="addToCartBtn">
                    <i class="fas fa-plus me-2"></i> Add Item
                </button>
                
                <!-- Cart Table -->
                <div class="cart-table">
                    <h5 class="mb-3" style="color: var(--primary-dark); font-weight: 600;">Transaction Items</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price Per Item</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="cartTableBody">
                            <!-- Cart items will be added here -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Grand Total:</strong></td>
                                <td id="grandTotal">₱0.00</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Payment Section -->
                <div class="payment-section">
                    <div class="row payment-row">
                        <div class="col-md-6">
                            <label for="tenderAmount" class="payment-label">Tender Amount</label>
                            <input type="number" class="form-control" id="tenderAmount" placeholder="Enter tender amount">
                        </div>
                        <div class="col-md-6">
                            <label for="changeAmount" class="payment-label">Change</label>
                            <div class="change-amount" id="changeAmount">₱0.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelBtn">
                    <i class="fas fa-times me-2"></i> Cancel
                </button>
                <button type="button" class="btn btn-primary" id="saveTransactionBtn">
                    <i class="fas fa-save me-2"></i> Record Transaction
                </button>
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
      /* Table Styling */    .table-purple {
        background: var(--gradient-primary);
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    
    .table th {
        font-weight: 600;
        white-space: nowrap;
        padding: 15px 10px;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }
    
    .table th::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: rgba(255, 255, 255, 0.3);
    }
    
    .table td {
        vertical-align: middle;
        padding: 12px 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .table tr:hover {
        background-color: rgba(69, 25, 104, 0.03);
    }
    
    .table tfoot {
        background-color: #f8f9fa;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    
    .table tfoot td {
        font-weight: 600;
        padding: 15px 10px;
    }
    
    /* Add Transaction Button */
    .add-transaction-btn {
        background-color: var(--primary-purple);
        border-color: var(--primary-purple);
        border-radius: 20px;
        padding: 8px 20px;
        font-weight: 500;
    }
    
    .add-transaction-btn:hover {
        background-color: var(--primary-purple-light);
        border-color: var(--primary-purple-light);
    }
    
    /* Summary Card */
    .summary-card {
        min-width: 250px;
    }
      /* Date Picker */
    .input-group {
        position: relative;
    }
    
    #calendarBtn {
        z-index: 5;
        background: transparent;
        border: none;
        margin-right: 5px;
    }
    
    /* Transaction Modal Styles */
    /* Quantity control */
    .quantity-control {
        display: flex;
        align-items: center;
    }
    
    .quantity-control button {
        width: 30px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--light-gray);
        border: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .quantity-control button:hover {
        background-color: var(--primary-purple-light);
        color: white;
    }
    
    .quantity-control input {
        width: 80px;
        text-align: center;
        border-left: none;
        border-right: none;
        border-radius: 0;
        margin-bottom: 0;
        padding-left: 5px;
        padding-right: 5px;
        height: 35px;
    }
    
    /* Cost display */
    .cost-display {
        font-size: 16px;
        font-weight: 600;
        color: var(--primary-purple);
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 12px 20px !important;
        display: flex;
        align-items: center;
        height: 38px;
    }
    
    /* Payment section */
    .payment-section {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px dashed #ccc;
    }
    
    .payment-row {
        margin-bottom: 15px;
    }
    
    .payment-label {
        font-weight: 600;
        color: var(--primary-dark);
    }
    
    .change-amount {
        font-size: 16px;
        font-weight: 700;
        color: var(--primary-purple);
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        height: 38px;
        margin-bottom: 0;
    }
      /* Success Button (Add Item) */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border: none;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    }
    
    /* Enhanced Sales Table Card */
    .sales-table-card {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .sales-table-card:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
    }
    
    /* Table Row Styling */
    .table tbody tr:nth-child(odd) {
        background-color: rgba(248, 249, 250, 0.5);
    }
    
    .table tbody td {
        transition: all 0.2s ease;
    }
      /* Highlight key financial columns */
    .table td:nth-child(9), 
    .table td:nth-child(11),
    .table th:nth-child(9),
    .table th:nth-child(11) {
        color: var(--primary-purple);
        font-weight: 600;
    }
    
    /* Currency and percentage formatting */
    .table td:nth-child(4),
    .table td:nth-child(5),
    .table td:nth-child(7),
    .table td:nth-child(9),
    .table td:nth-child(10),
    .table td:nth-child(11) {
        font-family: 'Roboto Mono', monospace;
    }
    
    /* Add hover effect to rows */
    .table tbody tr {
        transition: transform 0.2s ease;
    }
    
    .table tbody tr:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        z-index: 1;
        position: relative;
    }
    
    /* Total row styling */
    .table tfoot tr {
        border-top: 2px solid rgba(69, 25, 104, 0.1);
    }
    
    /* Make selected monetary values more visible */
    .table td:nth-child(9),
    .table td:nth-child(11) {
        position: relative;
        overflow: hidden;
    }
    
    .table td:nth-child(9)::before,
    .table td:nth-child(11)::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(69, 25, 104, 0.05);
        z-index: -1;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }
    
    .table tbody tr:hover td:nth-child(9)::before,
    .table tbody tr:hover td:nth-child(11)::before {
        transform: scaleX(1);
    }
</style>

<script>document.addEventListener('DOMContentLoaded', function() {
        // Product prices and cost data
        const productPrices = {
            "nature": 15, // Nature's Spring
            "gatorade": 46  // Gatorade
        };
        
        const costPrices = {
            "nature": 10, // Nature's Spring
            "gatorade": 34  // Gatorade
        };
        
        // Elements
        const productSelect = document.getElementById('productSelect');
        const quantityInput = document.getElementById('quantityInput');
        const decreaseBtn = document.getElementById('decreaseBtn');
        const increaseBtn = document.getElementById('increaseBtn');
        const costDisplay = document.getElementById('costDisplay');
        const addToCartBtn = document.getElementById('addToCartBtn');
        const cartTableBody = document.getElementById('cartTableBody');
        const grandTotalEl = document.getElementById('grandTotal');
        const saveTransactionBtn = document.getElementById('saveTransactionBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const tenderAmountInput = document.getElementById('tenderAmount');
        const changeAmountDisplay = document.getElementById('changeAmount');
        
        // Cart items array
        let cartItems = [];
        
        // Reset modal when it's opened
        document.getElementById('addTransactionModal').addEventListener('show.bs.modal', function() {
            // Reset form and table
            productSelect.value = '';
            quantityInput.value = 1;
            costDisplay.textContent = '₱0.00';
            cartItems = [];
            updateCartDisplay();
            tenderAmountInput.value = '';
            changeAmountDisplay.textContent = '₱0.00';
        });
        
        // Calculate cost based on product and quantity
        function calculateCost() {
            const productValue = productSelect.value;
            const quantity = parseInt(quantityInput.value) || 0;
            
            if (productValue && productPrices[productValue]) {
                const price = productPrices[productValue];
                const cost = price * quantity;
                costDisplay.textContent = `₱${cost.toFixed(2)}`;
            } else {
                costDisplay.textContent = '₱0.00';
            }
        }
        
        // Update quantity and recalculate cost
        decreaseBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value) || 1;
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                calculateCost();
            }
        });
        
        increaseBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value) || 0;
            quantityInput.value = currentValue + 1;
            calculateCost();
        });
        
        // Update cost when product or quantity changes
        productSelect.addEventListener('change', calculateCost);
        quantityInput.addEventListener('input', calculateCost);
        
        // Add item to cart
        addToCartBtn.addEventListener('click', function() {
            const productValue = productSelect.value;
            const quantity = parseInt(quantityInput.value) || 0;
            
            if (!productValue || quantity <= 0) {
                alert('Please select a product and enter a valid quantity.');
                return;
            }
            
            const productName = productSelect.options[productSelect.selectedIndex].text;
            const price = productPrices[productValue];
            const cost = price * quantity;
            
            // Check if product already exists in cart
            const existingItemIndex = cartItems.findIndex(item => item.productValue === productValue);
            
            if (existingItemIndex !== -1) {
                // Update existing item
                cartItems[existingItemIndex].quantity += quantity;
                cartItems[existingItemIndex].cost += cost;
            } else {
                // Add new item
                cartItems.push({
                    productValue,
                    productName,
                    quantity,
                    price,
                    cost
                });
            }
            
            // Update cart display
            updateCartDisplay();
            
            // Reset form
            productSelect.value = '';
            quantityInput.value = 1;
            costDisplay.textContent = '₱0.00';
        });
        
        // Update cart display
        function updateCartDisplay() {
            // Clear table
            cartTableBody.innerHTML = '';
            
            // Add items to table
            cartItems.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.productName}</td>
                    <td>${item.quantity}</td>
                    <td>₱${item.price.toFixed(2)}</td>
                    <td>₱${item.cost.toFixed(2)}</td>
                    <td>
                        <button class="btn btn-sm btn-danger" data-index="${index}">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                `;
                cartTableBody.appendChild(row);
            });
            
            // Calculate and display grand total
            const grandTotal = cartItems.reduce((total, item) => total + item.cost, 0);
            grandTotalEl.textContent = `₱${grandTotal.toFixed(2)}`;
            
            // Add event listeners to remove buttons
            document.querySelectorAll('button[data-index]').forEach(button => {
                button.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    cartItems.splice(index, 1);
                    updateCartDisplay();
                });
            });
            
            // Update change amount
            updateChangeAmount();
        }
        
        // Update change amount
        function updateChangeAmount() {
            const grandTotal = cartItems.reduce((total, item) => total + item.cost, 0);
            const tenderAmount = parseFloat(tenderAmountInput.value) || 0;
            const changeAmount = tenderAmount - grandTotal;
            
            if (changeAmount >= 0) {
                changeAmountDisplay.textContent = `₱${changeAmount.toFixed(2)}`;
            } else {
                changeAmountDisplay.textContent = '₱0.00';
            }
        }
        
        // Update change amount when tender amount changes
        tenderAmountInput.addEventListener('input', updateChangeAmount);
        
        // Save transaction
        saveTransactionBtn.addEventListener('click', function() {
            if (cartItems.length === 0) {
                alert('Please add at least one item to the transaction.');
                return;
            }
            
            const grandTotal = cartItems.reduce((total, item) => total + item.cost, 0);
            const tenderAmount = parseFloat(tenderAmountInput.value) || 0;
            
            if (tenderAmount < grandTotal) {
                alert('Tender amount must be greater than or equal to the grand total.');
                return;
            }
            
            const transactionDate = document.getElementById('transactionDate').value;
            
            // Here you would typically send this data to the server
            const transactionData = {
                items: cartItems,
                total: grandTotal,
                tenderAmount: tenderAmount,
                changeAmount: tenderAmount - grandTotal,
                date: transactionDate
            };
            
            console.log('Transaction data:', transactionData);
            alert('Transaction recorded successfully!');
            
            // Close the modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('addTransactionModal'));
            modal.hide();
            
            // Reset the cart
            cartItems = [];
            updateCartDisplay();
            tenderAmountInput.value = '';
            changeAmountDisplay.textContent = '₱0.00';
        });
        
        // Add product filter functionality
        const productFilter = document.getElementById('productFilter');
        if (productFilter) {
            productFilter.addEventListener('change', function() {
                const filterValue = this.value;
                
                // Code to filter the sales table would go here
                console.log('Filtering by:', filterValue);
                
                // This is a placeholder - in a real implementation, you would filter
                // the table rows based on the selected product
            });
        }
    });
</script>

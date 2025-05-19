<!-- Membership Page -->

<div class="membership-container">
    <!-- Membership Status Section -->
    <div class="membership-status">
        <h2>Membership Status</h2>
        <div class="status-cards">
            <div class="status-card">
                <div class="status-value">1 Month</div>
                <div class="status-label">Duration</div>
            </div>
            <div class="status-card">
                <div class="status-value">20</div>
                <div class="status-label">Days Remaining</div>
            </div>
            <div class="status-card">
                <div class="status-value">04/27/2025</div>
                <div class="status-label">Expiry Date</div>
            </div>
        </div>
    </div>

    <div class="membership-details">
        <!-- Benefits Section -->
        <div class="benefits-section">
            <h2>Benefits</h2>
            <ul>
                <li>Access to all gym equipment (cardio, weights, strength machines)</li>
                <li>Unlimited visits during open hours</li>
                <li>Free fitness classes (yoga, Zumba, HIIT, etc.)</li>
                <li>Free personal training sessions</li>
                <li>Access to locker rooms, showers, and changing areas</li>
            </ul>
        </div>

        <!-- Payment History Section -->
        <div class="payment-history-section">
            <h2>Payment History</h2>
            <div class="payment-records">
                <div class="payment-record">
                    <div class="payment-plan">1 Month</div>
                    <div class="payment-date">February 27, 2025</div>
                    <div class="payment-divider"></div>
                </div>
                <div class="payment-record">
                    <div class="payment-plan">1 Month</div>
                    <div class="payment-date">March 27, 2025</div>
                    <div class="payment-divider"></div>
                </div>
                <div class="payment-record">
                    <div class="payment-plan">1 Month</div>
                    <div class="payment-date">April 27, 2025</div>
                    <div class="payment-divider"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Membership Options Section -->
    <div class="membership-options">
        <h2>Membership Options</h2>
        <div class="options-buttons">
            <button class="extend-btn">Extend Membership</button>
            <button class="upgrade-btn">Upgrade Plan</button>
        </div>
    </div>
</div>

<style>
    .membership-container {
        width: 100%;
        max-width: 100%;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Membership Status Styles */
    .membership-status {
        background: linear-gradient(135deg, #4a1e8a, #7e57c2);
        color: white;
        border-radius: 15px;
        padding: 25px 30px;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .membership-status h2 {
        margin: 0 0 20px 0;
        font-size: 28px;
        font-weight: 600;
    }

    .status-cards {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    .status-card {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        padding: 20px;
        width: 100%;
        text-align: center;
    }

    .status-value {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .status-label {
        font-size: 14px;
        opacity: 0.9;
    }

    /* Membership Details Layout */
    .membership-details {
        display: flex;
        gap: 25px;
        margin-bottom: 25px;
    }

    .benefits-section, 
    .payment-history-section {
        flex: 1;
        background-color: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    /* Benefits Styles */
    .benefits-section h2, 
    .payment-history-section h2 {
        margin: 0 0 20px 0;
        font-size: 24px;
        color: #333;
    }

    .benefits-section ul {
        margin: 0;
        padding-left: 20px;
    }

    .benefits-section li {
        margin-bottom: 15px;
        line-height: 1.5;
        color: #444;
    }

    /* Payment History Styles */
    .payment-records {
        display: flex;
        flex-direction: column;
    }

    .payment-record {
        margin-bottom: 10px;
    }

    .payment-plan {
        font-weight: 600;
        font-size: 16px;
        color: #333;
    }

    .payment-date {
        font-size: 14px;
        color: #666;
        margin-top: 5px;
    }

    .payment-divider {
        height: 1px;
        background-color: #e0e0e0;
        margin: 15px 0;
    }

    /* Membership Options Styles */
    .membership-options {
        background-color: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .membership-options h2 {
        margin: 0 0 20px 0;
        font-size: 24px;
        color: #333;
    }

    .options-buttons {
        display: flex;
        gap: 20px;
    }

    .extend-btn, .upgrade-btn {
        flex: 1;
        padding: 15px;
        border-radius: 10px;
        border: none;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .extend-btn {
        background-color: #4a1e8a;
        color: white;
    }

    .extend-btn:hover {
        background-color: #3d1872;
        transform: translateY(-2px);
    }

    .upgrade-btn {
        background-color: white;
        border: 1px solid #4a1e8a;
        color: #4a1e8a;
    }

    .upgrade-btn:hover {
        background-color: #f5f5f5;
        transform: translateY(-2px);
    }

    /* Responsive Layout */
    @media (max-width: 768px) {
        .membership-status {
            padding: 20px;
        }
        
        .status-cards {
            flex-direction: column;
        }

        .membership-details {
            flex-direction: column;
        }

        .options-buttons {
            flex-direction: column;
        }
    }
</style>
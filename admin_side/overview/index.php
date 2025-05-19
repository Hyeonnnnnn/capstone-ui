<?php
// Page title for the sidebar
$pageTitle = "Admin Dashboard";
?>

<!-- Admin Dashboard Overview -->
<div class="overview-container">
    <!-- Top Stats Row -->
    <div class="row">
        <!-- Sales Summary Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-chart-line me-2"></i> Sales Summary
                    </h5>
                </div>
                <div class="dashboard-card-body">
                    <div class="summary-item">
                        <span class="summary-label">Today's Sales:</span>
                        <span class="summary-value">₱1,137.84</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Transactions Count:</span>
                        <span class="summary-value">24</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Average Transaction Value:</span>
                        <span class="summary-value">₱47.41</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visitor Count Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-users me-2"></i> Gym Visitors
                    </h5>
                    <div class="date-indicator">
                        <span class="day">Tue</span>
                        <span class="date">6</span>
                    </div>
                </div>
                <div class="dashboard-card-body text-center">
                    <div class="visitor-count">85</div>
                    <div class="visitor-trend text-success">
                        <i class="fas fa-arrow-up me-1"></i> 12% from yesterday
                    </div>
                </div>
            </div>
        </div>

        <!-- Members Status Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-id-card me-2"></i> Membership Status
                    </h5>
                </div>
                <div class="dashboard-card-body">
                    <div class="membership-chart">
                        <canvas id="membershipChart" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <!-- Product Sales Today -->
        <div class="col-lg-8 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-shopping-basket me-2"></i> Product Sales Today
                    </h5>
                    <button class="btn btn-sm btn-outline-primary">View All</button>
                </div>
                <div class="dashboard-card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-sales-chart">
                                <canvas id="productSalesChart" height="200"></canvas>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="hourly-traffic-chart">
                                <canvas id="hourlyTrafficChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions & Notifications -->
        <div class="col-lg-4 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-bolt me-2"></i> Quick Actions
                    </h5>
                </div>
                <div class="dashboard-card-body p-0">
                    <div class="quick-actions-list">
                        <a href="../manage_plans/" class="quick-action-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Manage Plans</span>
                        </a>
                        <a href="../manage_customers/" class="quick-action-item">
                            <i class="fas fa-user-plus"></i>
                            <span>Add Member</span>
                        </a>
                        <a href="../products/" class="quick-action-item">
                            <i class="fas fa-box-open"></i>
                            <span>Product Inventory</span>
                        </a>
                        <a href="../sales/" class="quick-action-item">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Generate Report</span>
                        </a>
                        <a href="../monitor_attendance/" class="quick-action-item">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Check Attendance</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Row -->
    <div class="row">
        <!-- Recent Members -->
        <div class="col-lg-6 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-user-clock me-2"></i> Recent Members
                    </h5>
                    <button class="btn btn-sm btn-outline-primary">View All</button>
                </div>
                <div class="dashboard-card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Join Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Member" class="rounded-circle">
                                            </div>
                                            <span>John Doe</span>
                                        </div>
                                    </td>
                                    <td>Monthly</td>
                                    <td>May 15, 2023</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Member" class="rounded-circle">
                                            </div>
                                            <span>Jane Smith</span>
                                        </div>
                                    </td>
                                    <td>Annual</td>
                                    <td>May 14, 2023</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Member" class="rounded-circle">
                                            </div>
                                            <span>Mike Johnson</span>
                                        </div>
                                    </td>
                                    <td>Monthly</td>
                                    <td>May 12, 2023</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="col-lg-6 mb-4">
            <div class="dashboard-card">
                <div class="dashboard-card-header">
                    <h5 class="dashboard-card-title">
                        <i class="fas fa-receipt me-2"></i> Recent Transactions
                    </h5>
                    <button class="btn btn-sm btn-outline-primary">View All</button>
                </div>
                <div class="dashboard-card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Item</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#TX12345</td>
                                    <td>Nature's Spring</td>
                                    <td>John Doe</td>
                                    <td>₱25.00</td>
                                    <td>Today, 2:30 PM</td>
                                </tr>
                                <tr>
                                    <td>#TX12344</td>
                                    <td>Monthly Plan</td>
                                    <td>Maria Santos</td>
                                    <td>₱750.00</td>
                                    <td>Today, 1:15 PM</td>
                                </tr>
                                <tr>
                                    <td>#TX12343</td>
                                    <td>Gatorade</td>
                                    <td>Mike Johnson</td>
                                    <td>₱45.00</td>
                                    <td>Today, 11:42 AM</td>
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
    /* Dashboard Styles */
    .overview-container {
        padding: 0;
    }

    :root {
        --primary: #451968;
        --primary-light: #782e9d;
        --primary-dark: #441170;
        --white: #ffffff;
        --light-gray: #f8f9fa;
        --dark-gray: #343a40;
        --gradient-primary: linear-gradient(135deg, #451968 0%, #782e9d 100%);
    }

    .dashboard-card {
        background-color: var(--white);
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
        height: 100%;
    }

    .dashboard-card-header {
        background: var(--gradient-primary);
        padding: 15px 20px;
        color: var(--white);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dashboard-card-title {
        font-weight: 600;
        margin-bottom: 0;
        color: var(--white);
        font-size: 1.1rem;
    }

    .dashboard-card-body {
        padding: 20px;
    }

    .summary-item {
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        padding-bottom: 10px;
    }

    .summary-item:last-child {
        margin-bottom: 0;
        border-bottom: none;
        padding-bottom: 0;
    }

    .summary-label {
        font-weight: 500;
        color: var(--dark-gray);
    }

    .summary-value {
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--primary-dark);
    }

    .visitor-count {
        font-size: 5rem;
        font-weight: 700;
        color: var(--primary-dark);
        line-height: 1;
        margin: 10px 0;
    }

    .visitor-trend {
        font-weight: 500;
        font-size: 0.9rem;
    }

    .date-indicator {
        background-color: rgba(255,255,255,0.2);
        border-radius: 8px;
        padding: 5px 10px;
        color: white;
        text-align: center;
        font-weight: 500;
    }

    .date-indicator .day {
        font-size: 0.8rem;
        display: block;
    }

    .date-indicator .date {
        font-size: 1.2rem;
        font-weight: 700;
    }

    .quick-actions-list {
        padding: 0;
    }

    .quick-action-item {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        color: var(--primary-dark);
        text-decoration: none;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        transition: background-color 0.3s ease;
    }

    .quick-action-item:last-child {
        border-bottom: none;
    }

    .quick-action-item:hover {
        background-color: rgba(120, 46, 157, 0.05);
        color: var(--primary);
    }

    .quick-action-item i {
        width: 20px;
        text-align: center;
        margin-right: 15px;
        color: var(--primary);
    }

    .avatar-sm {
        width: 32px;
        height: 32px;
        overflow: hidden;
    }

    .avatar-sm img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .table {
        margin-bottom: 0;
    }

    .table th {
        border-top: none;
        font-weight: 600;
        color: var(--primary-dark);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .table td {
        vertical-align: middle;
        font-size: 0.9rem;
    }

    .btn-outline-primary {
        color: white;
        border-color: rgba(255,255,255,0.5);
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
    }

    .btn-outline-primary:hover {
        background-color: white;
        color: var(--primary);
        border-color: white;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize charts
        initMembershipChart();
        initProductSalesChart();
        initHourlyTrafficChart();
    });

    function initMembershipChart() {
        const membershipChart = new Chart(
            document.getElementById('membershipChart'),
            {
                type: 'doughnut',
                data: {
                    labels: ['Active', 'Expired', 'Pending'],
                    datasets: [{
                        data: [70, 15, 15],
                        backgroundColor: [
                            '#4CAF50',  // Green for active
                            '#F44336',  // Red for expired
                            '#FFC107'   // Yellow for pending
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                boxWidth: 12
                            }
                        }
                    },
                    cutout: '70%'
                }
            }
        );
    }

    function initProductSalesChart() {
        const productSalesChart = new Chart(
            document.getElementById('productSalesChart'),
            {
                type: 'bar',
                data: {
                    labels: ["Nature's Spring", "Gatorade"],
                    datasets: [{
                        label: 'Units Sold',
                        data: [28, 17],
                        backgroundColor: [
                            'rgba(120, 46, 157, 0.7)',
                            'rgba(120, 46, 157, 0.4)'
                        ],
                        borderColor: [
                            'rgba(120, 46, 157, 1)',
                            'rgba(120, 46, 157, 0.6)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            }
        );
    }

    function initHourlyTrafficChart() {
        const hourlyTrafficChart = new Chart(
            document.getElementById('hourlyTrafficChart'),
            {
                type: 'bar',
                data: {
                    labels: ['7am', '8am', '9am', '10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm'],
                    datasets: [{
                        label: 'Hourly Traffic',
                        data: [5, 9, 4, 10, 3, 2, 1, 5, 7, 16, 10, 6, 8, 4, 1, 1],
                        backgroundColor: 'rgba(120, 46, 157, 0.4)',
                        borderColor: 'rgba(120, 46, 157, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        },
                        x: {
                            ticks: {
                                autoSkip: true,
                                maxRotation: 0,
                                minRotation: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            }
        );
    }
</script>
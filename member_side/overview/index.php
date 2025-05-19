<!-- Member Dashboard Overview Page -->
<div class="dashboard-overview">
    <!-- Attendance Statistics Cards -->    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm stat-card">
                <div class="card-body text-center">
                    <h6 class="text-muted mb-2">Total Visits</h6>
                    <h1 class="display-4 fw-bold mb-0 text-primary">74</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm stat-card">
                <div class="card-body text-center">
                    <h6 class="text-muted mb-2">Total Visits</h6>
                    <h1 class="display-4 fw-bold mb-0 text-primary">4</h1>
                    <p class="text-muted mb-0">Month of <?php echo date('F'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm stat-card">
                <div class="card-body text-center">
                    <h6 class="text-muted mb-2"><?php echo date('D'); ?></h6>
                    <h1 class="display-4 fw-bold mb-0 text-primary">5:38<span class="fs-6 fw-normal">PM</span></h1>
                    <p class="text-muted mb-0">Last Check-In</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance Chart -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Yearly Attendance</h5>
                    <div class="chart-container" style="position: relative; height:350px;">
                        <canvas id="yearlyAttendanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Membership Status</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h6 class="mb-0">Premium Plan</h6>
                            <p class="text-muted mb-0">Until: December 15, 2025</p>
                        </div>                        <span class="badge status-badge active">Active</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">65% of subscription period remaining</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">                <div class="card-body">
                    <h5 class="card-title">Check-In Status</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h6 class="mb-0">This Month</h6>
                            <p class="text-muted mb-0">12 of 30 days</p>
                        </div>
                        <span class="badge status-badge">40%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Last check-in: Today, 7:30 AM</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Recent Attendance</h5>                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Check-in Time</th>
                                    <th>Check-out Time</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-medium">Today</span></td>
                                    <td><span class="text-primary">7:30 AM</span></td>
                                    <td><span class="text-primary">9:15 AM</span></td>
                                    <td><span class="badge bg-light text-dark">1h 45m</span></td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">Yesterday</span></td>
                                    <td><span class="text-primary">6:45 AM</span></td>
                                    <td><span class="text-primary">8:30 AM</span></td>
                                    <td><span class="badge bg-light text-dark">1h 45m</span></td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">May 16, 2025</span></td>
                                    <td><span class="text-primary">5:30 PM</span></td>
                                    <td><span class="text-primary">7:00 PM</span></td>
                                    <td><span class="badge bg-light text-dark">1h 30m</span></td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">May 14, 2025</span></td>
                                    <td><span class="text-primary">6:15 AM</span></td>
                                    <td><span class="text-primary">8:00 AM</span></td>
                                    <td><span class="badge bg-light text-dark">1h 45m</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="event-title">Group Workout Session</span>
                            <span class="badge event-badge">May 21</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="event-title">Yoga Class</span>
                            <span class="badge event-badge">May 23</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="event-title">Nutrition Seminar</span>
                            <span class="badge event-badge">May 27</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="event-title">Fitness Challenge</span>
                            <span class="badge event-badge future-event">June 3</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Common styles to match the calendar pages */
    :root {
        --primary: #782e9d;
        --primary-rgb: 120, 46, 157;
        --primary-light: #9d4eda;
        --primary-dark: #561f70;
    }    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(var(--primary-rgb), 0.15) !important;
    }
    
    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        color: var(--primary-dark);
        font-weight: 600;
        margin-bottom: 1rem;
    }

    /* Badge styling to match our new color scheme */
    .badge.bg-primary {
        background-color: var(--primary) !important;
    }

    .badge.bg-warning {
        background-color: #ffc107 !important;
    }

    .badge.bg-success {
        background: #28a745 !important;
    }

    /* Progress bar styling */
    .progress {
        border-radius: 10px;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.05);
    }

    .progress-bar.bg-primary {
        background: linear-gradient(135deg, var(--primary), var(--primary-light)) !important;
    }

    .progress-bar.bg-success {
        background: linear-gradient(135deg, #28a745, #20c997) !important;
    }

    /* Table styling */
    .table th {
        border-top: none;
        border-bottom: 2px solid #eee;
        color: var(--primary-dark);
        font-weight: 600;
    }

    .table td {
        vertical-align: middle;
    }

    /* List group styling */
    .list-group-item {
        border-left: none;
        border-right: none;
        padding-left: 0;
        padding-right: 0;
    }

    .list-group-item:first-child {
        border-top: none;
    }
    
    /* Stat cards styling */
    .stat-card {
        border-radius: 12px;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
    }
    
    .stat-card .card-body {
        padding-top: 1.8rem;
    }
    
    .text-primary {
        color: var(--primary) !important;
    }
    
    .dashboard-overview h5.card-title {
        position: relative;
        padding-bottom: 0.7rem;
        margin-bottom: 1.2rem;
    }
    
    .dashboard-overview h5.card-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }
    
    .chart-container {
        margin-top: 1rem;
    }
    
    /* Event styling */
    .event-title {
        font-weight: 500;
    }
    
    .event-badge {
        background-color: rgba(var(--primary-rgb), 0.15) !important;
        color: var(--primary) !important;
        font-weight: 500;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        border: 1px solid rgba(var(--primary-rgb), 0.3);
    }
    
    .future-event {
        background-color: rgba(255, 193, 7, 0.15) !important;
        color: #b38105 !important;
        border: 1px solid rgba(255, 193, 7, 0.3);
    }
    
    /* Table styles */
    .table {
        margin-bottom: 0;
    }
    
    .table thead th {
        background-color: rgba(var(--primary-rgb), 0.05);
        color: var(--primary-dark);
        font-weight: 600;
        border-bottom: none;
        padding: 12px 15px;
    }
    
    .table tbody tr:hover {
        background-color: rgba(var(--primary-rgb), 0.03);
    }
    
    .table td {
        padding: 12px 15px;
    }
    
    .badge.bg-light {
        background-color: rgba(0, 0, 0, 0.05) !important;
        color: #555 !important;
        font-weight: 500;
    }
    
    /* Status badges */
    .status-badge {
        background-color: rgba(var(--primary-rgb), 0.15) !important;
        color: var(--primary) !important;
        font-weight: 500;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        border: 1px solid rgba(var(--primary-rgb), 0.3);
    }
    
    .status-badge.active {
        background-color: rgba(40, 167, 69, 0.15) !important;
        color: #1a752d !important;
        border: 1px solid rgba(40, 167, 69, 0.3);
    }
</style>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart initialization -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the canvas element
    const ctx = document.getElementById('yearlyAttendanceChart').getContext('2d');
    
    // Chart data based on the image
    const monthlyData = [24, 11, 8, 26, 3, 0, 0, 0, 0, 0, 0, 0];
    const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEPT', 'OCT', 'NOV', 'DEC'];
    
    // Create the chart
    const yearlyAttendanceChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{                label: 'Number of Days Visited',
                data: monthlyData,
                fill: false,
                borderColor: 'rgba(120, 46, 157, 0.8)', // var(--primary) with alpha
                tension: 0.1,
                pointBackgroundColor: 'rgba(120, 46, 157, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(120, 46, 157, 1)',
                borderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'NUMBER OF DAYS VISITED',
                        font: {
                            weight: 'bold'
                        }
                    },
                    ticks: {
                        stepSize: 5
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'MONTH OF 2025',
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>
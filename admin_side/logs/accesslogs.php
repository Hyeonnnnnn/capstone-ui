<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Logs - JBC Fitness Gym</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
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
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            color: var(--dark-gray);
        }
        
        .access-container {
            padding: 20px;
            max-width: 1110px;
            margin: 0 auto;
        }
        
        .access-header {
            margin-bottom: 20px;
        }
        
        .date-display {
            background: var(--gradient-primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .month-selector {
            background: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 1rem;
        }
        
        .month-selector option {
            background-color: var(--primary-dark);
            color: white;
        }
        
        .access-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }
        
        /* Set column widths */
        .table th:nth-child(1) { /* Date/Time */
            width: 25%;
        }
        
        .table th:nth-child(2) { /* User */
            width: 25%;
        }
        
        .table th:nth-child(3) { /* Role */
            width: 25%;
        }
        
        .table th:nth-child(4) { /* IP Address */
            width: 25%;
        }
        
        .table tbody tr:nth-child(even) {
            background-color: rgba(69, 25, 104, 0.05);
        }
        
        .table tbody td {
            padding: 12px 15px;
            vertical-align: middle;
            border-color: #eee;
        }
        
        .user-role {
            font-weight: 500;
            display: inline-block;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.85rem;
        }
        
        .role-admin {
            background-color: #6610f2;
            color: white;
        }
        
        .role-clerk {
            background-color: #20c997;
            color: white;
        }
        
        .user-name {
            font-weight: 500;
        }
        
        .timestamp {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .dashboard-icon {
            margin-right: 5px;
        }
        
        /* Responsive table */
        @media (max-width: 768px) {
            .table-responsive {
                border: none;
            }
            
            .table thead {
                display: none;
            }
            
            .table tbody tr {
                display: block;
                border-bottom: 1px solid #eee;
                margin-bottom: 10px;
            }
            
            .table tbody td {
                display: block;
                text-align: right;
                position: relative;
                padding-left: 50%;
                border-bottom: none;
            }
            
            .table tbody td:before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                font-weight: 600;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="access-container">
        
        <!-- Tab content -->
        <div class="tab-content" id="logsTabsContent">
            <!-- Access Logs Tab Content -->
            <div class="tab-pane fade show active" id="access-content" role="tabpanel" aria-labelledby="access-tab">
                <div class="date-display">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <select class="month-selector me-2" id="monthSelector">
                                    <option value="4">May 2025</option>
                                    <option value="3">April 2025</option>
                                    <option value="2">March 2025</option>
                                    <option value="1">February 2025</option>
                                    <option value="0">January 2025</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="btn-group w-100" role="group" aria-label="Week filter">
                                <button type="button" class="btn btn-outline-light active" data-week="all">All</button>
                                <button type="button" class="btn btn-outline-light" data-week="0">Partial Week</button>
                                <button type="button" class="btn btn-outline-light" data-week="1">Week 1</button>
                                <button type="button" class="btn btn-outline-light" data-week="2">Week 2</button>
                                <button type="button" class="btn btn-outline-light" data-week="3">Week 3</button>
                                <button type="button" class="btn btn-outline-light" data-week="4">Week 4</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Access Summary</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #20c997; margin-right: 10px;"></div>
                                        <span>Clerk Logins: <span id="clerk-count">31</span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 15px; height: 15px; background-color: #6610f2; margin-right: 10px;"></div>
                                        <span>Admin Logins: <span id="admin-count">4</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="access-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date/Time</th>
                                    <th>User</th>
                                    <th>Role</th>
                                    <th>IP Address</th>
                                </tr>
                            </thead>
                            <tbody id="accessTableBody">
                                <!-- Data will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Summary Tab Content -->
            <div class="tab-pane fade" id="summary-content" role="tabpanel" aria-labelledby="summary-tab">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">May 2025 Access Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold">Daily Login Activity</h6>
                                <div class="chart-container mt-3" style="height: 300px;">
                                    <canvas id="accessChart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold">Access by Role</h6>
                                <div class="chart-container mt-3" style="height: 300px;">
                                    <canvas id="roleChart"></canvas>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="fw-bold mt-3">User Access Overview</h6>
                        <table class="table table-bordered mt-2">
                            <thead class="bg-light">
                                <tr>
                                    <th>User</th>
                                    <th>Role</th>
                                    <th>Login Days</th>
                                    <th>Average Time</th>
                                    <th>Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Degamo C.</td>
                                    <td><span class="badge bg-success">Clerk</span></td>
                                    <td>31 days</td>
                                    <td>08:45 AM</td>
                                    <td>May 04, 2025 - 08:42 AM</td>
                                </tr>
                                <tr>
                                    <td>Admin</td>
                                    <td><span class="badge bg-primary">Admin</span></td>
                                    <td>4 days</td>
                                    <td>10:30 AM</td>
                                    <td>May 04, 2025 - 10:33 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Failed Login Attempts</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <strong>Security Notice:</strong> Multiple failed login attempts may indicate unauthorized access attempts.
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date/Time</th>
                                    <th>Username Attempted</th>
                                    <th>IP Address</th>
                                    <th>Attempts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>May 02, 2025 - 03:42 PM</td>
                                    <td>admin</td>
                                    <td>192.168.1.45</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>May 01, 2025 - 08:15 AM</td>
                                    <td>degamo</td>
                                    <td>192.168.1.35</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Access log data - May 2025
            const accessLogs = [
                // Week 1
                { date: "May 1, 2025 - 08:30 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Thursday
                { date: "May 2, 2025 - 08:35 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Friday
                { date: "May 3, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Saturday
                { date: "May 4, 2025 - 10:30 AM", user: "Admin", role: "admin", ip: "192.168.1.10" },     // Sunday
                { date: "May 5, 2025 - 08:38 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Monday (Today)
                { date: "May 6, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Tuesday
                { date: "May 7, 2025 - 08:50 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Wednesday
                
                // Week 2
                { date: "May 8, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" },  // Thursday
                { date: "May 9, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" },  // Friday
                { date: "May 10, 2025 - 08:50 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Saturday
                { date: "May 11, 2025 - 10:25 AM", user: "Admin", role: "admin", ip: "192.168.1.10" },     // Sunday
                { date: "May 12, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Monday
                { date: "May 13, 2025 - 08:42 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Tuesday
                { date: "May 14, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Wednesday
                
                // Week 3
                { date: "May 15, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Thursday
                { date: "May 16, 2025 - 08:38 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Friday
                { date: "May 17, 2025 - 08:42 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Saturday
                { date: "May 18, 2025 - 10:35 AM", user: "Admin", role: "admin", ip: "192.168.1.10" },     // Sunday
                { date: "May 19, 2025 - 08:50 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Monday
                { date: "May 20, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Tuesday
                { date: "May 21, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Wednesday
                
                // Week 4
                { date: "May 22, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Thursday
                { date: "May 23, 2025 - 08:42 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Friday
                { date: "May 24, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Saturday
                { date: "May 25, 2025 - 10:28 AM", user: "Admin", role: "admin", ip: "192.168.1.10" },     // Sunday
                { date: "May 26, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Monday
                { date: "May 27, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Tuesday
                { date: "May 28, 2025 - 08:40 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Wednesday
                { date: "May 29, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Thursday
                { date: "May 30, 2025 - 08:42 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }, // Friday
                { date: "May 31, 2025 - 08:45 AM", user: "Degamo C.", role: "clerk", ip: "192.168.1.35" }  // Saturday
            ];
            
            // Helper function to get week number from date
            function getWeekOfMonth(date) {
                // For May 2025, organize dates according to specified structure
                if (date.getMonth() === 4 && date.getFullYear() === 2025) {
                    const dayOfMonth = date.getDate();
                    
                    if (dayOfMonth >= 1 && dayOfMonth <= 3) {
                        return 0; // Partial Week: May 1-3 (Thu-Sat)
                    } else if (dayOfMonth >= 4 && dayOfMonth <= 10) {
                        return 1; // Week 1: May 4-10 (Sun-Sat)
                    } else if (dayOfMonth >= 11 && dayOfMonth <= 17) {
                        return 2; // Week 2: May 11-17 (Sun-Sat)
                    } else if (dayOfMonth >= 18 && dayOfMonth <= 24) {
                        return 3; // Week 3: May 18-24 (Sun-Sat)
                    } else {
                        return 4; // Week 4: May 25-31 (Sun-Sat)
                    }
                }
                
                // Default calculation for other months
                const firstDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();
                return Math.ceil((date.getDate() + firstDay) / 7);
            }
            
            // Function to populate table with access logs
            function populateAccessTable(logs) {
                const tableBody = document.getElementById('accessTableBody');
                tableBody.innerHTML = '';
                
                logs.forEach(log => {
                    const row = document.createElement('tr');
                    
                    // Parse date to assign week attribute
                    const dateParts = log.date.split(' - ')[0].split(', ')[0].split(' ');
                    const month = dateParts[0];
                    const day = parseInt(dateParts[1]);
                    const rowDate = new Date(2025, month === 'May' ? 4 : 3, day);
                    const weekNum = getWeekOfMonth(rowDate);
                    
                    // Add week number as data attribute
                    row.setAttribute('data-week', weekNum);
                    
                    // Create role badge
                    let roleBadge = '';
                    if (log.role === 'admin') {
                        roleBadge = '<span class="user-role role-admin">Admin</span>';
                    } else if (log.role === 'clerk') {
                        roleBadge = '<span class="user-role role-clerk">Clerk</span>';
                    }
                    
                    row.innerHTML = `
                        <td data-label="Date/Time" class="timestamp">${log.date}</td>
                        <td data-label="User" class="user-name">${log.user}</td>
                        <td data-label="Role">${roleBadge}</td>
                        <td data-label="IP Address">${log.ip}</td>
                    `;
                    
                    tableBody.appendChild(row);
                });
                
                updateAccessCounts();
            }
            
            // Function to update access counts
            function updateAccessCounts() {
                const visibleRows = Array.from(document.querySelectorAll('#accessTableBody tr')).filter(row => row.style.display !== 'none');
                
                const clerkCount = visibleRows.filter(row => 
                    row.querySelector('td:nth-child(3)').textContent.trim() === 'Clerk'
                ).length;
                
                const adminCount = visibleRows.filter(row => 
                    row.querySelector('td:nth-child(3)').textContent.trim() === 'Admin'
                ).length;
                
                document.getElementById('clerk-count').textContent = clerkCount;
                document.getElementById('admin-count').textContent = adminCount;
            }
            
            // Week filter functionality
            const weekButtons = document.querySelectorAll('[data-week]');
            
            weekButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    weekButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const selectedWeek = this.getAttribute('data-week');
                    const tableRows = document.querySelectorAll('#accessTableBody tr');
                    
                    // Show/hide rows based on filter
                    tableRows.forEach(row => {
                        if (selectedWeek === 'all' || row.getAttribute('data-week') === selectedWeek) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                    
                    updateAccessCounts();
                });
            });
            
            // Month selector functionality
            const monthSelector = document.getElementById('monthSelector');
            monthSelector.addEventListener('change', function() {
                // In a real application, this would load data for the selected month
                // For this demo, we'll just update the heading and keep using May data
                const monthNames = [
                    'January', 'February', 'March', 'April', 'May', 
                    'June', 'July', 'August', 'September', 'October', 
                    'November', 'December'
                ];
                const selectedMonthIndex = parseInt(this.value);
                const monthName = monthNames[selectedMonthIndex];
                
                document.querySelector('#summary-content .card-header h5').textContent = 
                    `${monthName} 2025 Access Activity`;
                
                // Reset week filter to "All"
                document.querySelector('[data-week="all"]').click();
            });
            
            // Initialize charts for summary tab
            const initCharts = () => {
                // Daily login chart
                const dailyCtx = document.getElementById('accessChart').getContext('2d');
                const dailyChart = new Chart(dailyCtx, {
                    type: 'line',
                    data: {
                        labels: ['Partial Week', 'Week 1', 'Week 2', 'Week 3', 'Week 4'],
                        datasets: [
                            {
                                label: 'Clerk Logins',
                                data: [3, 14, 14, 14, 15],
                                backgroundColor: 'rgba(32, 201, 151, 0.2)',
                                borderColor: '#20c997',
                                borderWidth: 2,
                                tension: 0.3
                            },
                            {
                                label: 'Admin Logins',
                                data: [0, 1, 1, 1, 1],
                                backgroundColor: 'rgba(102, 16, 242, 0.2)',
                                borderColor: '#6610f2',
                                borderWidth: 2,
                                tension: 0.3
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                
                // Role distribution chart
                const roleCtx = document.getElementById('roleChart').getContext('2d');
                const roleChart = new Chart(roleCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Clerk Logins', 'Admin Logins'],
                        datasets: [{
                            data: [60, 4],
                            backgroundColor: [
                                '#20c997',
                                '#6610f2'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            };
            
            // Initialize page
            populateAccessTable(accessLogs);
            
            // Initialize charts when summary tab is shown
            document.getElementById('summary-tab').addEventListener('shown.bs.tab', function() {
                if (!window.chartsInitialized) {
                    initCharts();
                    window.chartsInitialized = true;
                }
            });
        });
    </script>
</body>
</html>
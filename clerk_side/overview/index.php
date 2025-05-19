<?php
// Use static data instead of database connections

// Get today's date in Y-m-d format
$today = date('Y-m-d');

// Static sales data
$totalSales = 1137.84;
$transactionCount = 24;
$averageTransaction = 47.41;

// Static gym visitors data
$totalVisitors = 85;

// Static product sales data
$productSalesData = [
    ['product_name' => "Nature's Spring", 'total_quantity' => 28],
    ['product_name' => 'Gatorade Blue Bolt', 'total_quantity' => 16]
];

// Static membership data
$membershipData = [
    ['membership_type' => 'Day Pass', 'count' => 10],
    ['membership_type' => 'Monthly', 'count' => 2],
    ['membership_type' => 'Annually', 'count' => 1]
];

// Initialize member counts
$dayPassCount = 0;
$monthlyCount = 0;
$annuallyCount = 0;

// Process the membership data from static array
foreach ($membershipData as $row) {
    if ($row['membership_type'] == 'Day Pass') {
        $dayPassCount = $row['count'];
    } else if ($row['membership_type'] == 'Monthly') {
        $monthlyCount = $row['count'];
    } else if ($row['membership_type'] == 'Annually') {
        $annuallyCount = $row['count'];
    }
}

// Get current day for the display
$currentDay = date('D');
$currentDate = date('j'); // Day of the month without leading zeros
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clerk Overview - JBC Fitness</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Chart.js Plugin for animations -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script><style>
        :root {
            --primary: #451968;
            --primary-light: #782e9d;
            --primary-dark: #441170;
            --accent: #b288c6;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --medium-gray: #e9ecef;
        }
        
        body {
            background-color: #f5f5f5;
        }
          .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .sales-card, .visitors-card {
            background: white;
        }
        
        .sales-value {
            font-size: 32px;
            font-weight: bold;
            color: #333;
        }
        
        .sales-label {
            font-size: 16px;
            color: #666;
        }
        
        .visitors-count {
            font-size: 72px;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-top: 10px;
            background: linear-gradient(145deg, #451968 0%, #782e9d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .date-box {
            background: var(--accent);
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            width: 60px;
            height: 60px;
        }
        
        .date-day {
            font-size: 14px;
            margin-bottom: 0;
        }
        
        .date-number {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 0;
            line-height: 1;
        }
        
        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: var(--primary-dark);
        }
        
        .members-count {
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: var(--primary);
        }
        
        .members-label {
            font-size: 14px;
            text-align: center;
            margin-bottom: 0;
            color: #666;
            font-weight: 500;
        }
        
        .members-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            transition: all 0.3s;
        }
        
        .members-box:hover {
            border-color: var(--accent);
            background-color: rgba(178, 136, 198, 0.05);
        }
        
        .peso-sign {
            font-family: Arial, sans-serif;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-title {
                font-size: 20px;
            }
            
            .sales-value {
                font-size: 26px;
            }
            
            .visitors-count {
                font-size: 56px;
            }
            
            .members-count {
                font-size: 48px;
            }
        }
        
        @media (max-width: 576px) {
            .date-box {
                width: 50px;
                height: 50px;
            }
            
            .date-number {
                font-size: 20px;
            }
            
            .members-count {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>    <div class="container-fluid py-4">
        <h1 class="mb-4">Overview</h1>
        
        <div class="row">
            <!-- Sales Summary Card -->
            <div class="col-lg-6 mb-4">
                <div class="card sales-card">
                    <h2 class="card-title">
                        <i class="fas fa-chart-line me-2"></i>Sales Summary Card
                    </h2>
                    <div class="row mb-3">
                        <div class="col-6 sales-label">Today's Sales:</div>
                        <div class="col-6 sales-value"><span class="peso-sign">₱</span><?php echo number_format($totalSales, 2); ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 sales-label">Transactions Count:</div>
                        <div class="col-6 sales-value"><?php echo $transactionCount; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-6 sales-label">Average Transaction Value:</div>
                        <div class="col-6 sales-value"><span class="peso-sign">₱</span><?php echo number_format($averageTransaction, 2); ?></div>
                    </div>
                </div>
            </div>
              <!-- Gym Visitors Card -->
            <div class="col-lg-6 mb-4">
                <div class="card visitors-card">
                    <h2 class="card-title">
                        <i class="fas fa-users me-2"></i>GYM Visitors
                    </h2>
                    <div class="row align-items-center h-100">
                        <div class="col-sm-2 col-3 mb-3 mb-sm-0">
                            <div class="date-box">
                                <p class="date-day"><?php echo $currentDay; ?></p>
                                <p class="date-number"><?php echo $currentDate; ?></p>
                            </div>
                        </div>
                        <div class="col-sm-10 col-9">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <div class="visitors-count"><?php echo $totalVisitors; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto"></div> <!-- This pushes content above it to the top, creating more space -->
                </div>
            </div>
        </div>
          <div class="row">
            <!-- Product Sales Today -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <h2 class="card-title">
                        <i class="fas fa-shopping-cart me-2"></i>Product Sales Today
                    </h2>
                    <div class="chart-container" style="position: relative; height: 280px;">
                        <canvas id="productSalesChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Newly Added Members -->
            <div class="col-lg-6 mb-4">                <div class="card">
                    <h2 class="card-title">
                        <i class="fas fa-user-plus me-2"></i>Newly Added Members
                    </h2>
                    <div class="row g-3 justify-content-center mt-2 flex-grow-1 d-flex align-items-center">
                        <div class="col-md-4 col-sm-4">
                            <div class="members-box h-100">
                                <div class="members-count"><?php echo $dayPassCount; ?></div>
                                <p class="members-label">Day Pass</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="members-box h-100">
                                <div class="members-count"><?php echo $monthlyCount; ?></div>
                                <p class="members-label">Monthly</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="members-box h-100">
                                <div class="members-count"><?php echo $annuallyCount; ?></div>
                                <p class="members-label">Annually</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto"></div> <!-- This pushes content above it to the top, creating more space -->
                </div>
            </div>
        </div></div>

    <script>
        // Process the product sales data for the chart
        const productLabels = [];
        const productQuantities = [];
        
        <?php
        // Output the product data as JavaScript variables from static array
        foreach ($productSalesData as $row) {
            echo "productLabels.push('" . addslashes($row['product_name']) . "');";
            echo "productQuantities.push(" . $row['total_quantity'] . ");";
        }
        ?>
          // Create the product sales bar chart
        const productSalesChart = new Chart(
            document.getElementById('productSalesChart'),
            {
                type: 'bar',
                data: {
                    labels: productLabels,
                    datasets: [{
                        label: 'Quantity Sold',
                        data: productQuantities,
                        backgroundColor: ['#b288c6', '#9370db'],
                        borderWidth: 0,
                        borderRadius: 8,
                        hoverBackgroundColor: ['#451968', '#782e9d']
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 5,
                                font: {
                                    weight: 'bold'
                                }
                            },
                            grid: {
                                display: true,
                                drawBorder: false,
                                color: '#f0f0f0'
                            }
                        },
                        x: {
                            ticks: {
                                font: {
                                    weight: 'bold'
                                }
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(69, 25, 104, 0.9)',
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 14
                            },
                            padding: 12,
                            cornerRadius: 8,
                            displayColors: false
                        }
                    },
                    maintainAspectRatio: false,
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    }
                }
            }
        );
    </script>
      <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Add animations to the cards
        document.addEventListener('DOMContentLoaded', function() {
            // Animate numbers
            const counters = document.querySelectorAll('.visitors-count, .members-count');
            
            counters.forEach(counter => {
                const target = +counter.innerText;
                const duration = 1500;
                const increment = target / (duration / 20);
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if(current < target) {
                        counter.innerText = Math.ceil(current);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                // Only animate if it's a number
                if(!isNaN(target)) {
                    counter.innerText = '0';
                    updateCounter();
                }
            });
        });
    </script>
</body>
</html>
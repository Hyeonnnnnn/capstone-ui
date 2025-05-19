<!-- Track Attendance Page -->
<div class="attendance-container">
    <div class="calendar-header mb-4">
        <div class="calendar-navigation">
            <button class="btn btn-outline-primary" id="prevMonth"><i class="fas fa-chevron-left"></i></button>
            <h2 class="calendar-title" id="currentMonthYear"></h2>
            <button class="btn btn-outline-primary" id="nextMonth"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="calendar-controls">
            <button class="btn gradient-btn" id="todayBtn">Today</button>
            <button class="btn btn-outline-secondary dropdown-toggle" id="monthYearSelector" data-bs-toggle="dropdown">
                Month/Year
            </button>
            <div class="dropdown-menu month-year-dropdown p-3" aria-labelledby="monthYearSelector">
                <div class="month-selector mb-3">
                    <div class="row row-cols-3 g-2">
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="0">Jan</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="1">Feb</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="2">Mar</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="3">Apr</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="4">May</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="5">Jun</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="6">Jul</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="7">Aug</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="8">Sep</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="9">Oct</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="10">Nov</button></div>
                        <div class="col"><button class="btn btn-sm btn-outline-purple month-btn w-100" data-month="11">Dec</button></div>
                    </div>
                </div>
                <div class="year-selector">
                    <div class="input-group">
                        <input type="number" class="form-control" id="yearInput" min="2020" max="2050">
                        <button class="btn btn-purple" id="setYearBtn">Set</button>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="calendar-container mb-5">
        <div class="calendar-days-header">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="calendar-grid" id="calendarGrid">
            <!-- Calendar days will be generated here by JavaScript -->
        </div>
    </div>
      <div class="calendar-legend">
        <div class="legend-item">
            <span class="legend-color present-color"></span>
            <span class="legend-text">Present</span>
        </div>
        <div class="legend-item">
            <span class="legend-color absent-color"></span>
            <span class="legend-text">Absent</span>
        </div>
        <div class="legend-item">
            <span class="legend-color today-color"></span>
            <span class="legend-text">Today</span>
        </div>
    </div>
</div>

<style>
    /* Calendar Styles */
    :root {
        --primary-rgb: 120, 46, 157; /* RGB values of the primary purple color */
    }
    
    .attendance-container {
        padding: 20px;
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .calendar-navigation {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .calendar-navigation button {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        transition: all 0.2s;
        border-color: var(--primary);
        color: var(--primary);
    }
    
    .calendar-navigation button:hover {
        background-color: var(--primary);
        color: white;
    }

    .calendar-title {
        margin: 0;
        font-size: 1.8rem;
        color: var(--primary);
        font-weight: 700;
        min-width: 200px;
        text-align: center;
        letter-spacing: 0.5px;
    }

    .calendar-controls {
        display: flex;
        gap: 10px;
    }

    .month-year-dropdown {
        width: 300px;
    }

    .calendar-container {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        position: relative;
    }    .calendar-days-header {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        padding: 12px 0;
        font-weight: 600;
        font-size: 1.05rem;
        text-align: center;
    }
      .month-navigation h3 {
        font-size: 1.4rem;
        font-weight: 600;
        color: var(--primary-dark);
        margin: 0;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        position: relative;
        text-align: center;
        flex-grow: 1;
        padding: 0 10px;
    }
    
    .nav-btn {
        background: var(--primary);
        color: white;
        border: none;
        width: 40px; /* Reduced width */
        height: 40px; /* Reduced height */
        border-radius: 4px; /* Smaller border radius */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: none; /* Removed shadow */
        position: relative;
        overflow: hidden;
    }
    
    .nav-btn:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .nav-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 8px 25px rgba(69, 25, 104, 0.5);
    }
    
    .nav-btn:hover:before {
        opacity: 1;
    }
    
    .nav-btn i {
        font-size: 1.3rem;
        position: relative;
        z-index: 2;
    }    .calendar-container {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        position: relative;
        margin-bottom: 15px;
        width: 100%; /* Take full width */
    }.calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 1px;
        background-color: #f0f0f0;
        width: 100%;
        padding: 15px 0 20px; /* Increased padding top and bottom, no horizontal padding */
    }
      .calendar-grid .header {
        font-weight: 600;
        text-align: center;
        padding: 12px 0; /* Increased padding */
        margin-bottom: 12px; /* Increased margin */
        font-size: clamp(1rem, 1.1vw, 1.2rem); /* Increased font size */
        color: var(--primary-dark);
        letter-spacing: 1px;
        position: relative;
        border-radius: 0; /* Removed border radius */
    }
      .calendar-grid .header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 25px; /* Increased width */
        height: 4px; /* Increased height */
        background: var(--primary-light);
        border-radius: 3px;
    }.calendar-day {
        background-color: #fff;
        height: 100px;
        padding: 8px;
        cursor: default;
        transition: all 0.2s;
        position: relative;
        display: flex;
        flex-direction: column;
    }.day-number {
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: auto;
        padding: 2px 0;
    }
      .calendar-day:hover {
        background-color: #f8f4fd;
    }
    
    .calendar-day span {
        position: relative;
        z-index: 2;
        font-size: 1.2rem;
        font-weight: 600;
    }
      .calendar-day.other-month {
        color: #ccc;
        background-color: #f9f9f9;
    }
      .calendar-day.empty {
        background-color: transparent;
        color: transparent;
        cursor: default;
    }
    
    /* Calendar day states with transparent background and strong outlines */
    .calendar-day.present {
        background: rgba(40, 167, 69, 0.15);
        color: #1a752d;
        font-weight: 600;
        border: 3px solid #28a745;
        box-shadow: inset 0 0 0 1px rgba(40, 167, 69, 0.5);
    }
    
    .calendar-day.absent {
        background: rgba(220, 53, 69, 0.15);
        color: #a71d2a;
        font-weight: 600;
        border: 3px solid #dc3545;
        box-shadow: inset 0 0 0 1px rgba(220, 53, 69, 0.5);
    }
      .calendar-day.today {
        background: rgba(var(--primary-rgb), 0.15);
        color: var(--primary-dark);
        font-weight: 600;
        border: 3px solid var(--primary);
        box-shadow: inset 0 0 0 1px rgba(var(--primary-rgb), 0.5);
        position: relative;
        z-index: 5;
    }
      /* Removed the pulse animation to match admin style */.calendar-day.default {
        background: #ffffff;
        color: #343a40;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .calendar-day.default:hover {
        background: #f8f9fa;
        color: #212529;
        box-shadow: 0 3px 8px rgba(0,0,0,0.08); /* Smaller shadow */
        border-color: #dee2e6;
    }
      .calendar-legend {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
        padding: 10px 15px;
        background: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        border: 1px solid #e9ecef;
    }
    
    .legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 5px 10px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .legend-item:hover {
        background-color: rgba(0,0,0,0.04);
        transform: translateY(-2px);
    }
    
    .legend-color {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 4px;
        position: relative;
        overflow: hidden;
    }
    
    .legend-color::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 70%);
    }
      .present-color {
        background: rgba(40, 167, 69, 0.15);
        border: 3px solid #28a745;
        box-shadow: inset 0 0 0 1px rgba(40, 167, 69, 0.5);
    }
    
    .absent-color {
        background: rgba(220, 53, 69, 0.15);
        border: 3px solid #dc3545;
        box-shadow: inset 0 0 0 1px rgba(220, 53, 69, 0.5);
    }
      
    .today-color {
        background: rgba(var(--primary-rgb), 0.15);
        border: 3px solid var(--primary);
        box-shadow: inset 0 0 0 1px rgba(var(--primary-rgb), 0.5);
        position: relative;
    }
    
    .legend-text {
        font-size: 0.9rem;
        color: #444;
        font-weight: 500;
    }
    
    /* Added animations and effects */
    .calendar-loaded {
        animation: fadeIn 0.8s ease-out;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .calendar-day[title] {
        position: relative;
    }
    
    .calendar-day[title]::before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.7);
    }
    
    /* Calendar transitions */
    @keyframes fadeOutLeft {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(-30px);
        }
    }
    
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes fadeOutRight {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(30px);
        }
    }
    
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .fade-out-left {
        animation: fadeOutLeft 0.3s forwards;
    }
    
    .fade-in-right {
        animation: fadeInRight 0.3s forwards;
    }
    
    .fade-out-right {
        animation: fadeOutRight 0.3s forwards;
    }
    
    .fade-in-left {
        animation: fadeInLeft 0.3s forwards;
    }
    
    /* Better responsiveness */
    @media (max-width: 1200px) {
        .calendar-container {
            padding: 15px 10px;
        }
        
        .calendar-grid {
            gap: 1px;
        }
    }
    
    @media (max-width: 991px) {
        .attendance-container {
            max-width: 100%;
            padding: 10px;
        }
        
        .calendar-header {
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }
        
        .calendar-navigation {
            justify-content: space-between;
        }
        
        .calendar-day {
            height: 80px;
        }
        
        .calendar-title {
            font-size: 1.6rem;
        }
    }
    
    @media (max-width: 767px) {
        .calendar-day {
            height: 70px;
        }
        
        .calendar-legend {
            flex-wrap: wrap;
            gap: 10px;
            padding: 12px 15px;
        }
        
        .day-number {
            font-size: 1rem;
        }
    }
    
    @media (max-width: 480px) {
        .calendar-day {
            height: 60px;
        }
        
        .calendar-grid .header {
            font-size: 0.85rem;
            padding: 8px 0;
        }
        
        .calendar-legend {
            padding: 10px;
        }
        
        .legend-item {
            padding: 5px 8px;
        }
        
        .legend-text {
            font-size: 0.85rem;
        }
        
        .day-number {
            font-size: 0.9rem;
        }
    }    /* Responsive styles */

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the necessary DOM elements
        const calendarGrid = document.getElementById('calendarGrid');
        const currentMonthYear = document.getElementById('currentMonthYear');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');
        const todayBtn = document.getElementById('todayBtn');
        const monthButtons = document.querySelectorAll('.month-btn');
        const yearInput = document.getElementById('yearInput');
        const setYearBtn = document.getElementById('setYearBtn');
        
        // Set up the current date - use May 2025 for demo
        let currentDate = new Date(2025, 4, 19); // May 19, 2025
        const today = new Date(2025, 4, 19); // May 19, 2025
        
        // Initialize year input with current year
        yearInput.value = currentDate.getFullYear();
        
        // Sample attendance data (in a real app, this would come from the database)
        // Format: "YYYY-MM-DD": "present"|"absent"
        const attendanceData = {
            "2025-05-01": "present",
            "2025-05-02": "present",
            "2025-05-03": "present",
            "2025-05-04": "absent",
            "2025-05-05": "present",
            "2025-05-06": "present",
            "2025-05-09": "present",
            "2025-05-10": "present",
            "2025-05-13": "absent",
            "2025-05-14": "absent",
            "2025-05-15": "present",
            "2025-05-16": "present",
            "2025-05-17": "present",
            "2025-05-18": "present"
        };
        
        // Initialize the calendar
        renderCalendar(currentDate);
        
        // Event listeners
        prevMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar(currentDate);
        });
        
        nextMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar(currentDate);
        });
        
        todayBtn.addEventListener('click', () => {
            currentDate = new Date(2025, 4, 19); // Reset to today (May 19, 2025 for demo)
            renderCalendar(currentDate);
        });
        
        monthButtons.forEach(button => {
            button.addEventListener('click', () => {
                const monthIndex = parseInt(button.getAttribute('data-month'));
                currentDate.setMonth(monthIndex);
                renderCalendar(currentDate);
                document.querySelector('.dropdown-toggle').click(); // Close dropdown
            });
        });
        
        setYearBtn.addEventListener('click', () => {
            const year = parseInt(yearInput.value);
            if (year >= 2020 && year <= 2050) {
                currentDate.setFullYear(year);
                renderCalendar(currentDate);
                document.querySelector('.dropdown-toggle').click(); // Close dropdown
            }
        });
        
        // Function to render calendar
        function renderCalendar(date) {
            // Clear existing calendar grid
            calendarGrid.innerHTML = '';
            
            // Set month and year in header
            const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            currentMonthYear.textContent = `${months[date.getMonth()]} ${date.getFullYear()}`;
            
            // Get first day of the month
            const firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
            const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            
            // Calculate days from previous and next months
            const startingDayOfWeek = firstDay.getDay(); // 0 = Sunday, 1 = Monday, etc.
            const daysInMonth = lastDay.getDate();
              // Add days from previous month with numbers
            const prevMonth = new Date(date.getFullYear(), date.getMonth(), 0);
            const daysInPrevMonth = prevMonth.getDate();
            
            for (let i = 0; i < startingDayOfWeek; i++) {
                const dayCell = document.createElement('div');
                dayCell.className = 'calendar-day other-month';
                
                // Add the day number from previous month
                const dayNumber = document.createElement('div');
                dayNumber.classList.add('day-number');
                const prevMonthDay = daysInPrevMonth - startingDayOfWeek + i + 1;
                dayNumber.textContent = prevMonthDay;
                dayCell.appendChild(dayNumber);
                
                calendarGrid.appendChild(dayCell);
            }
            
            // Add days of current month
            for (let i = 1; i <= daysInMonth; i++) {
                const dayCell = document.createElement('div');
                
                // Create a div for the day number
                const dayNumber = document.createElement('div');
                dayNumber.classList.add('day-number');
                dayNumber.textContent = i;
                dayCell.appendChild(dayNumber);
                
                // Format the date string to match our attendance data format
                const dateString = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                
                // Check if this is today
                const isToday = i === today.getDate() && 
                               date.getMonth() === today.getMonth() && 
                               date.getFullYear() === today.getFullYear();
                
                // Set the appropriate CSS class based on attendance status
                if (isToday) {
                    dayCell.className = 'calendar-day today';
                } else if (attendanceData[dateString] === "present") {
                    dayCell.className = 'calendar-day present';
                } else if (attendanceData[dateString] === "absent") {
                    dayCell.className = 'calendar-day absent';
                } else {
                    dayCell.className = 'calendar-day';
                }
                
                // Add the day cell to the calendar grid
                calendarGrid.appendChild(dayCell);
                
                // Add a tooltip with the date and status
                if (attendanceData[dateString]) {
                    const formattedDate = new Date(dateString).toLocaleDateString('en-US', { 
                        weekday: 'long', 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric' 
                    });
                    dayCell.setAttribute('title', `${formattedDate}: ${attendanceData[dateString]}`);
                }
            }
            
            // Calculate how many days from next month to add
            const totalCells = startingDayOfWeek + daysInMonth;
            const remainingCells = 42 - totalCells; // Always show 6 rows (42 cells)
              // Add days from next month with numbers
            for (let i = 1; i <= remainingCells; i++) {
                const dayCell = document.createElement('div');
                dayCell.className = 'calendar-day other-month';
                
                // Add the day number from next month
                const dayNumber = document.createElement('div');
                dayNumber.classList.add('day-number');
                dayNumber.textContent = i;
                dayCell.appendChild(dayNumber);
                
                calendarGrid.appendChild(dayCell);
            }
        }
    });
</script>
</script>
<?php
// Page title for the sidebar
$pageTitle = "Monitor Attendance";
?>

<!-- Monitor Attendance Page -->
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
    </div>    <div class="calendar-container mb-4">
        <div class="calendar-days-header">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>        <div class="calendar-grid" id="calendarGrid">
            <!-- Calendar days will be generated here by JavaScript -->
        </div>
        
        <!-- Empty initial message container -->
        <div class="initial-message d-none" id="initialMessage"></div>
    </div>

    <!-- Attendance view when a date is selected -->
    <div class="attendance-view-container d-none" id="attendanceView">
        <div class="attendance-date-header" id="attendanceDateHeader">
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary me-3" id="backToCalendarBtn">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
                <h3 id="selectedDate" class="mb-0"></h3>
            </div>
            <div class="attendance-stats">
                <span class="badge bg-purple" id="totalAttendees">0 attendees</span>
                <div class="search-box">
                    <input type="text" class="form-control" id="searchAttendees" placeholder="Search customers...">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
        </div>

        <div class="attendee-list" id="attendeeList">
            <!-- Attendee list will be populated here -->
        </div>
    </div>
</div>

<style>
    /* Calendar Styles */
    .attendance-container {
        padding: 20px;
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }    .calendar-navigation {
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
        min-width: 180px;
        text-align: center;
    }

    .calendar-controls {
        display: flex;
        gap: 10px;
    }

    .month-year-dropdown {
        width: 300px;
    }    .calendar-container {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        position: relative;
    }

    .calendar-days-header {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        padding: 10px 0;
        font-weight: 600;
        text-align: center;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 1px;
        background-color: #f0f0f0;
    }    .calendar-day {
        background-color: #fff;
        height: 100px;
        padding: 8px;
        cursor: pointer;
        transition: all 0.2s;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .calendar-day:hover {
        background-color: #f8f4fd;
    }

    .calendar-day.selected {
        background: rgba(120, 46, 157, 0.1);
    }

    .calendar-day.today {
        background-color: #f8f4fd;
        border: 2px solid var(--primary);
    }

    .calendar-day.other-month {
        color: #ccc;
        background-color: #f9f9f9;
    }

    .day-number {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: auto;
    }    .attendee-count {
        position: absolute;
        bottom: 5px;
        right: 5px;
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        color: white;
        border-radius: 12px;
        padding: 1px 6px;
        font-size: 0.7rem;
        font-weight: 600;
    }
      .initial-message {
        display: none;
    }
    
    /* Attendance View Styles */
    .attendance-view-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    
    .attendance-date-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    
    #backToCalendarBtn {
        transition: all 0.2s;
    }
    
    #backToCalendarBtn:hover {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .attendance-stats {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .search-box {
        position: relative;
        width: 250px;
    }

    .search-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
    }

    .attendee-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }

    .attendee-card {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 8px;
        background-color: #f9f9f9;
        transition: all 0.2s;
    }

    .attendee-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f8f4fd;
    }

    .attendee-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 15px;
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .attendee-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .attendee-info {
        flex: 1;
    }

    .attendee-name {
        font-weight: 600;
        margin-bottom: 3px;
    }

    .attendee-time {
        font-size: 0.85rem;
        color: #777;
    }

    .badge.bg-purple {
        background-color: var(--primary);
    }

    .btn-outline-purple {
        color: var(--primary);
        border-color: var(--primary);
    }

    .btn-outline-purple:hover {
        background-color: var(--primary);
        color: white;
    }

    .btn-purple {
        background-color: var(--primary);
        color: white;
    }

    .btn-purple:hover {
        background-color: #6a2b8d;
        color: white;
    }

    .gradient-btn {
        background: linear-gradient(135deg, var(--primary) 0%, #8e44ad 100%);
        border: none;
        color: white;
    }

    @media (max-width: 768px) {
        .calendar-header {
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }

        .calendar-navigation {
            justify-content: space-between;
        }

        .calendar-day {
            height: 60px;
        }

        .attendance-date-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .attendance-stats {
            width: 100%;
            flex-direction: column;
            align-items: stretch;
        }

        .search-box {
            width: 100%;
        }

        .attendee-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarGrid = document.getElementById('calendarGrid');
        const currentMonthYearElem = document.getElementById('currentMonthYear');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');
        const todayBtn = document.getElementById('todayBtn');
        const selectedDateElem = document.getElementById('selectedDate');
        const totalAttendeesElem = document.getElementById('totalAttendees');
        const initialMessage = document.getElementById('initialMessage');
        const attendeeList = document.getElementById('attendeeList');
        const attendanceView = document.getElementById('attendanceView');
        const searchAttendeesInput = document.getElementById('searchAttendees');
        const monthButtons = document.querySelectorAll('.month-btn');
        const yearInput = document.getElementById('yearInput');
        const setYearBtn = document.getElementById('setYearBtn');
        
        // Set current date
        let currentDate = new Date();
        let selectedDate = null;

        // Initialize year input with current year
        yearInput.value = currentDate.getFullYear();

        // Initialize calendar
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
            currentDate = new Date();
            renderCalendar(currentDate);
        });
        
        // Back to calendar button event listener
        document.getElementById('backToCalendarBtn').addEventListener('click', showCalendarView);

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

        searchAttendeesInput.addEventListener('input', () => {
            const searchTerm = searchAttendeesInput.value.toLowerCase();
            filterAttendees(searchTerm);
        });

        // Function to render calendar
        function renderCalendar(date) {
            // Clear existing calendar grid
            calendarGrid.innerHTML = '';

            // Set month and year in header
            const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            currentMonthYearElem.textContent = `${months[date.getMonth()]} ${date.getFullYear()}`;

            // Get first day of the month
            const firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
            const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            
            // Calculate days from previous and next months
            const daysInPrevMonth = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
            const startingDayOfWeek = firstDay.getDay(); // 0 = Sunday, 1 = Monday, etc.
            const daysInMonth = lastDay.getDate();
            
            // Add days from previous month
            for (let i = startingDayOfWeek - 1; i >= 0; i--) {
                const dayElement = createDayElement(daysInPrevMonth - i, true);
                calendarGrid.appendChild(dayElement);
            }
            
            // Add days of current month
            const today = new Date();
            for (let i = 1; i <= daysInMonth; i++) {
                const isToday = i === today.getDate() && 
                               date.getMonth() === today.getMonth() && 
                               date.getFullYear() === today.getFullYear();
                
                const dayElement = createDayElement(i, false, isToday);
                
                // Check for selected date
                if (selectedDate && i === selectedDate.getDate() && 
                    date.getMonth() === selectedDate.getMonth() && 
                    date.getFullYear() === selectedDate.getFullYear()) {
                    dayElement.classList.add('selected');
                }
                
                // Add random attendance count for demo
                const attendeeCount = Math.floor(Math.random() * 20);
                if (attendeeCount > 0) {
                    const countElement = document.createElement('span');
                    countElement.classList.add('attendee-count');
                    countElement.textContent = attendeeCount;
                    dayElement.appendChild(countElement);
                }
                
                calendarGrid.appendChild(dayElement);
            }
            
            // Calculate how many days from next month to add
            const daysFromNextMonth = 42 - (startingDayOfWeek + daysInMonth);
            
            // Add days from next month
            for (let i = 1; i <= daysFromNextMonth; i++) {
                const dayElement = createDayElement(i, true);
                calendarGrid.appendChild(dayElement);
            }
        }

        // Function to create day elements
        function createDayElement(day, isOtherMonth, isToday = false) {
            const dayElement = document.createElement('div');
            dayElement.classList.add('calendar-day');
            
            if (isOtherMonth) {
                dayElement.classList.add('other-month');
            }
            
            if (isToday) {
                dayElement.classList.add('today');
            }
            
            const dayNumber = document.createElement('div');
            dayNumber.classList.add('day-number');
            dayNumber.textContent = day;
            dayElement.appendChild(dayNumber);
            
            // Add click event
            if (!isOtherMonth) {
                dayElement.addEventListener('click', () => {
                    // Remove selected class from all days
                    document.querySelectorAll('.calendar-day').forEach(day => {
                        day.classList.remove('selected');
                    });
                    
                    // Add selected class to clicked day
                    dayElement.classList.add('selected');
                    
                    // Set selected date
                    selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
                    
                    // Show attendance for selected date
                    showAttendance(selectedDate);
                });
            }
            
            return dayElement;
        }
        
        // Function to show attendance for selected date
        function showAttendance(date) {
            // Format date: May 6, 2025
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = date.toLocaleDateString('en-US', options);
            
            // Update selected date in header
            selectedDateElem.textContent = formattedDate;
              // Hide calendar view elements and show attendance view
            document.querySelector('.calendar-header').classList.add('d-none');
            document.querySelector('.calendar-container').classList.add('d-none');
            attendanceView.classList.remove('d-none');
            
            // Clear previous attendee list
            attendeeList.innerHTML = '';
            
            // Generate random number of attendees (5-25)
            const numAttendees = Math.floor(Math.random() * 20) + 5;
            totalAttendeesElem.textContent = `${numAttendees} attendees`;
            
            // Generate mock attendee data with Filipino names (matching your examples)
            const attendeeNames = [
                'Aguilar, Christian Paul', 'Lopez, Christine Mae',
                'Alvarez, Joshua Emmanuel', 'Magsaysay, Julius Patrick',
                'Baltazar, Jonathan Ryan', 'Mendoza, Robert Stephen',
                'Castro, Adrian Joseph', 'Morales, Patricia Anne',
                'Cruz, Nathaniel James', 'Natividad, Martin Angelo',
                'De Leon, Francis Xavier', 'Navarro, Vincent Elijah',
                'Delacruz, Catherine Rose', 'Ocampo, Benedict Kyle',
                'Delos Santos, Raymond Luis', 'Pascual, Andrew Sebastian',
                'Domingo, Sarah Louise', 'Querubin, Daniel Thomas',
                'Escobar, Dominic Carl', 'Ramos, Stephanie Claire',
                'Estrada, Kevin Matthew', 'Reyes, Angela Marie',
                'Fernandez, Michael Anthony', 'Rivera, Nathan Lucas',
                'Francisco, Gabriel Ethan', 'Rodriguez, James Daniel',
                'Garcia, Melissa Joy', 'Salazar, Timothy George',
                'Gonzales, Andrew Joseph', 'Santiago, John Patrick',
                'Gutierrez, Samuel Oliver', 'Santos, Kimberly Anne',
                'Hernandez, Daniel Joseph', 'Tañedo, Joshua Benedict',
                'Hidalgo, Tristan James', 'Torres, Jessica Ann',
                'Jimenez, Carlo Emmanuel', 'Urbano, Christian Noel',
                'Lazaro, Vincent Rafael', 'Villanueva, Mark Adrian'
            ];
            
            // Shuffle and select random names
            const shuffledNames = [...attendeeNames].sort(() => 0.5 - Math.random());
            const selectedNames = shuffledNames.slice(0, numAttendees);
            
            // Create random times for check-ins
            const randomAttendees = [];
            for (let i = 0; i < numAttendees; i++) {
                const randomName = selectedNames[i];
                const randomHour = Math.floor(Math.random() * 14) + 6; // 6 AM to 8 PM
                const randomMinute = Math.floor(Math.random() * 60);
                const amPm = randomHour >= 12 ? 'PM' : 'AM';
                const formattedHour = randomHour > 12 ? randomHour - 12 : (randomHour === 0 ? 12 : randomHour);
                const formattedMinute = randomMinute < 10 ? `0${randomMinute}` : randomMinute;
                const checkInTime = `${formattedHour}:${formattedMinute} ${amPm}`;
                
                randomAttendees.push({ name: randomName, time: checkInTime });
            }
            
            // Sort by check-in time
            randomAttendees.sort((a, b) => {
                const timeA = convertTo24Hour(a.time);
                const timeB = convertTo24Hour(b.time);
                return timeA - timeB;
            });
            
            // Add attendees to the list
            randomAttendees.forEach(attendee => {
                const attendeeCard = document.createElement('div');
                attendeeCard.classList.add('attendee-card');
                
                const nameParts = attendee.name.split(', ');
                const lastName = nameParts[0];
                const firstName = nameParts.length > 1 ? nameParts[1] : '';
                const initials = firstName ? firstName.charAt(0) + lastName.charAt(0) : lastName.charAt(0);
                
                attendeeCard.innerHTML = `
                    <div class="attendee-avatar">
                        ${initials}
                    </div>
                    <div class="attendee-info">
                        <div class="attendee-name">${attendee.name}</div>
                        <div class="attendee-time">
                            <i class="far fa-clock me-1"></i> ${attendee.time}
                        </div>
                    </div>
                `;
                
                attendeeList.appendChild(attendeeCard);
            });
        }

        // Helper function to convert time to 24-hour format for sorting
        function convertTo24Hour(timeStr) {
            const [time, period] = timeStr.split(' ');
            let [hours, minutes] = time.split(':');
            hours = parseInt(hours);
            if (period === 'PM' && hours < 12) hours += 12;
            if (period === 'AM' && hours === 12) hours = 0;
            return hours * 60 + parseInt(minutes);
        }
        
        // Function to filter attendees
        function filterAttendees(searchTerm) {
            const attendeeCards = document.querySelectorAll('.attendee-card');
            let visibleCount = 0;
            
            attendeeCards.forEach(card => {
                const name = card.querySelector('.attendee-name').textContent.toLowerCase();
                if (name.includes(searchTerm)) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            totalAttendeesElem.textContent = `${visibleCount} attendees`;
        }
        
        // Function to show calendar view and hide attendance list
        function showCalendarView() {
            // Show calendar elements
            document.querySelector('.calendar-header').classList.remove('d-none');
            document.querySelector('.calendar-container').classList.remove('d-none');
            
            // Hide attendance elements
            attendanceView.classList.add('d-none');
            
            // Clear search input
            searchAttendeesInput.value = '';
        }
    });
</script>
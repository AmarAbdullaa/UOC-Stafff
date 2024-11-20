<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Events</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
}

.container {
    display: flex;
    width: 100%;
}

/* Sidebar */
.sidebar {
    background-color: #f4f4f4;
    width: 200px;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    padding: 10px 0;
    cursor: pointer;
}

.sidebar li.active {
    font-weight: bold;
    color: #007BFF;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 20px;
    background-color: #fff;
}

.main-content h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.main-content p {
    color: #555;
    margin-bottom: 20px;
}

/* Calendar Section */
.calendar-section {
    margin-bottom: 20px;
}

.calendar {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.calendar .month {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.calendar .month button {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
}

.calendar .month span {
    font-weight: bold;
    margin: 0 10px;
}

.calendar table {
    border-collapse: collapse;
    width: 100%;
}

.calendar th, .calendar td {
    text-align: center;
    padding: 5px;
    border: 1px solid #ddd;
}

/* Events Section */
.events-section {
    margin-top: 20px;
}

.events-section h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.events-section ul {
    list-style-type: none;
    padding: 0;
}

.events-section li {
    padding: 10px;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    border-radius: 4px;
    background-color: #f9f9f9;
}

.event {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.event-name {
    font-weight: bold;
}

.event-date {
    color: #666;
}

    </style>

</head>
<body>
    
        <main class="main-content">
            <h1>Schedule events</h1>
            <p>Create and schedule events for the academic year</p>
            
            <div class="calendar-section">
                <h2>Select a date to begin scheduling</h2>
                <div class="calendar">
                    <div class="month">
                        <button>&lt;</button>
                        <span>August 2023</span>
                        <button>&gt;</button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>S</th>
                                <th>M</th>
                                <th>T</th>
                                <th>W</th>
                                <th>T</th>
                                <th>F</th>
                                <th>S</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add days here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="events-section">
                <h3>Events on selected dates</h3>
                <ul>
                    <li>
                        <div class="event">
                            <span class="event-name">New Student Orientation</span>
                            <span class="event-date">Wednesday, August 23, 2023</span>
                        </div>
                    </li>
                    <li>
                        <div class="event">
                            <span class="event-name">First Day of School</span>
                            <span class="event-date">Monday, August 28, 2023</span>
                        </div>
                    </li>
                    <li>
                        <div class="event">
                            <span class="event-name">Back to School Night</span>
                            <span class="event-date">Friday, September 1, 2023</span>
                        </div>
                    </li>
                </ul>

                <h3>Upcoming events</h3>
                <ul>
                    <li>
                        <div class="event">
                            <span class="event-name">Labor Day (No School)</span>
                            <span class="event-date">Monday, September 4, 2023</span>
                        </div>
                    </li>
                    <li>
                        <div class="event">
                            <span class="event-name">Early Release Day</span>
                            <span class="event-date">Wednesday, September 13, 2023</span>
                        </div>
                    </li>
                    <li>
                        <div class="event">
                            <span class="event-name">Parent-Teacher Conferences</span>
                            <span class="event-date">Thursday, September 21, 2023</span>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>

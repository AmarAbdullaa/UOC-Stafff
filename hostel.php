<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Facilities</title>
  <style>
    /* General Reset */
body, h1, h2, ul, li, a {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}
body {
  display: flex;
  height: 100vh;
  background-color: #f5f6f8;
}

/* Sidebar Styles */
.sidebar {
  width: 240px;
  background-color: #ffffff;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}
.sidebar ul {
  list-style: none;
  padding: 20px;
}
.sidebar li {
  margin-bottom: 20px;
}
.sidebar li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}
.sidebar li.active a {
  color: #007bff;
}

/* Main Content Styles */
.content {
  flex: 1;
  padding: 20px;
}
header {
  margin-bottom: 20px;
}
header h1 {
  font-size: 24px;
  margin-bottom: 10px;
}
.tabs {
  display: flex;
  gap: 15px;
}
.tabs a {
  text-decoration: none;
  color: #333;
  padding: 5px 10px;
  border-radius: 5px;
}
.tabs a.active {
  background-color: #007bff;
  color: white;
}

/* Vacancy List Styles */
.vacancy-lists {
  display: flex;
  gap: 40px;
}
.list h2 {
  margin-bottom: 15px;
  font-size: 18px;
  color: #007bff;
}
.list ul {
  list-style: none;
}
.list li {
  background-color: #ffffff;
  padding: 10px 15px;
  margin-bottom: 10px;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: space-between;
}
.list li .icon {
  margin-right: 10px;
}
.list li small {
  color: #888;
  font-size: 12px;
}
/* Responsive Styles */
  </style>
</head>
<body>
  
    <main class="content">
      <header>
        <h1>Hostel Facilities</h1>
        <div class="tabs">
          <a href="#" class="active">Vacancy Notifications</a>
          <a href="#">Vacancy Requests</a>
          <a href="#">Stock Requests</a>
          <a href="#">Stock Inventory</a>
          <a href="#">Assign Hostel</a>
        </div>
      </header>
      <section class="vacancy-lists">
        <div class="list">
          <h2>Vacancy Notifications</h2>
          <ul>
            <li><span class="icon">🔔</span> 2 vacancies <small>Room 101 - 2 beds</small></li>
            <li><span class="icon">🔔</span> 1 vacancy <small>Room 102 - 1 bed</small></li>
            <li><span class="icon">🔔</span> 3 vacancies <small>Room 103 - 3 beds</small></li>
          </ul>
        </div>
        <div class="list">
          <h2>Vacancy Requests</h2>
          <ul>
            <li><span class="icon">🔔</span> 1 vacancy <small>Room 104 - 1 bed</small></li>
            <li><span class="icon">🔔</span> 2 vacancies <small>Room 105 - 2 beds</small></li>
            <li><span class="icon">🔔</span> 1 vacancy <small>Room 106 - 1 bed</small></li>
            <li><span class="icon">🔔</span> 2 vacancies <small>Room 107 - 2 beds</small></li>
            <li><span class="icon">🔔</span> 1 vacancy <small>Room 108 - 1 bed</small></li>
          </ul>
        </div>
      </section>
    </main>
  </div>
</body>
</html>

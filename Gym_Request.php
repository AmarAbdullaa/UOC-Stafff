<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Entry Requests</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    color: #333;
  }
  
  .container {
    display: flex;
    max-width: 100%;
    
    flex-wrap: wrap;
    
  }
  
  .sidebar {
    width: 220px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(60, 53, 53, 0.1);
    margin-right: 20px;
  }
  
  .sidebar-nav a {
    display: flex;
    align-items: center;
    padding: 10px 0;
    color: #333;
    text-decoration: none;
    font-size: 16px;
  }
  
  .sidebar-nav a.active {
    background-color: #e5e7eb;
    border-radius: 4px;
    padding-left: 10px;
  }
  
  .icon {
    margin-right: 10px;
  }
  
  .main-content {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-top: 120px;
  }
  
  .main-content h1 {
    font-size: 24px;
    margin-bottom: 5px;
  }
  
  .description {
    color: #555;
    margin-bottom: 20px;
  }
  
  .week-filters {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
  }
  
  .week-filters button {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    background-color: #f3f4f6;
    cursor: pointer;
  }
  
  .week-filters button:hover {
    background-color: #e5e7eb;
  }
  
  .request-table {
    width: 100%;
    border-collapse: collapse;
  }
  
  .request-table th,
  .request-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
  }
  
  .request-table th {
    font-weight: bold;
    color: #555;
  }
  
  .request-table .time {
    background-color: #f3f4f6;
    padding: 5px 10px;
    border-radius: 4px;
  }
  
  .request-table .status {
    padding: 5px 10px;
    border-radius: 12px;
    font-size: 14px;
    color: #fff;
  }
  
  .status.approved {
    background-color: #4ade80;
  }
  
  .status.pending {
    background-color: #fbbf24;
  }
  
  .status.denied {
    background-color: #f87171;
  }
  
  header {
    background-color:#3E034A;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
	position: fixed;
	top:0;
	left:0;
	width:100%;
	z-index: 1000;
}

.header-container {
    display: flex;
	height: 50px;
    width: 100%;
    justify-content: space-between;
    align-items: center;
	position: relative;
    gap:20px;
}

.logo img {
    max-height:70px;
	widows: auto;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
	justify-content: flex-start;
	padding: 0;
	margin: 0;
}

nav{
	flex-grow: 1;
}

nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 5px 10px;
}

nav a.active {
  color:white;
  font-weight: bold;

}

.bell-icon, .profile-icon {
    cursor: pointer;
    justify-content: flex-end;

    
}

.bell-icon {
    background-color: transparent;
    border: none;
    font-size: 30px;
    color: #7f7f7f;
}
.bell-icon :hover{
    color: white;
}
.profile-icon img {
    height: 35px;
    border-radius: 50%;
    transition: border 0.3s ease;
}

.profile-icon img:hover {
    border: 2px solid #A87BBE;
}
  </style>
</head>
<body>
  
  <header>
    <div class="header-container">
        <div class="logo">
            <img src="../logo.png" alt="PEAK Logo">
        </div>
       
        <nav>
            <ul>
                <li><a href="#" class="active">Gym</a></li>
                <li><a href="ground_reservation.php">Pool Request</a></li>
                <li><a href="#" >About</a></li>
                <li><a href="#" >Contact</a></li></li>
            </ul>
        </nav>
        <button class="bell-icon">
            <i class="uil uil-bell"></i>
        </button>

        
       
    </div>
    
    <div class="dropdown-menu" id="dropdownMenu">
        <!-- <ul>
            <li><a href="#"><i class="uil uil-user"></i> My Profile</a></li>
            <li><a href="#"><i class="uil uil-signout"></i> Log out</a></li>
        </ul> -->
    </div>
</header>
    
    <main class="main-content">
      <h1>Gym entry requests</h1>
      <p class="description">View and manage gym entry requests</p>

      <div class="week-filters">
        <button>Week 1</button>
        <button>Week 2</button>
        <button>Week 3</button>
        <button>Week 4</button>
        <button>Week 5</button>
        <button>Week 6</button>
        <button>Week 7</button>
        <button>Week 8</button>
        <button>Week 9</button>
        <button>Week 10</button>
      </div>

      <table class="request-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mar 14, 2023</td>
            <td><span class="time">12:00 PM - 1:30 PM</span></td>
            <td>Michael Smith</td>
            <td><span class="status approved">Approved</span></td>
          </tr>
          <tr>
            <td>Mar 15, 2023</td>
            <td><span class="time">11:00 AM - 12:30 PM</span></td>
            <td>Jennifer Williams</td>
            <td><span class="status pending">Pending</span></td>
          </tr>
          <tr>
            <td>Mar 16, 2023</td>
            <td><span class="time">5:00 PM - 6:30 PM</span></td>
            <td>David Johnson</td>
            <td><span class="status denied">Denied</span></td>
          </tr>
          <tr>
            <td>Mar 17, 2023</td>
            <td><span class="time">4:00 PM - 5:30 PM</span></td>
            <td>Emma Brown</td>
            <td><span class="status approved">Approved</span></td>
          </tr>
          <tr>
            <td>Mar 18, 2023</td>
            <td><span class="time">3:00 PM - 4:30 PM</span></td>
            <td>Christopher Davis</td>
            <td><span class="status pending">Pending</span></td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>

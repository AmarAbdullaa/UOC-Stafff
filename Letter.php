<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excuse Letter</title>
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
    margin: 0 auto;
    
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
  
  .sidebar {
    width: 200px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-right: 20px;
  }
  
  .user-info {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;

  }
  
  .sidebar-nav a {
    display: block;
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
  
  .main-content {
    margin-left: 210px;
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 8px;
  }
  
  .main-content h1 {
    margin-left: 210px;
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .description {
    color: #555;
    margin-bottom: 20px;

  }
  
  .status-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  
  .status-table th,
  .status-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
  }
  
  .status-table th {
    font-weight: bold;
    color: #555;
  }
  
  .status-table .status {
    padding: 5px 10px;
    border-radius: 12px;
    font-size: 14px;
    color: #fff;
  }
  
  .status.pending {
    background-color: #fbbf24;
  }
  
  .status.approved {
    background-color: #4ade80;
  }
  
  .submit-button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #1d4ed8;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
  }
  
  .submit-button:hover {
    background-color: #2563eb;
  }
  
  .status-table a {
    color: #1d4ed8;
    text-decoration: none;
  }
  
  .status-table a:hover {
    text-decoration: underline;
  }
  
  </style>

</head>
<body>
<?php include 'nav.php'; ?>

  <header>
    <div class="header-container">
        <div class="logo">
            <img src="logo.png" alt="PEAK Logo">
        </div>
       
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="ground_reservation.php">Dashboard</a></li>
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
      <h1>Excuse Letter</h1>
      <p class="description">You can submit an excuse letter for an attendance record after the class has ended. You can also download a copy of your attendance record at any time.</p>
      
      <h2>Excuse letter status</h2>
      <table class="status-table">
        <thead>
          <tr>
            <th>Class</th>
            <th>Date</th>
            <th>Excuse status</th>
            <th>Excuse reason</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Injury</td>
            <td>04/11/2023</td>
            <td><span class="status pending">Pending</span></td>
            <td>Doctor's note</td>
            <td><a href="#">Download</a></td>
          </tr>
          <tr>
            <td>Exams</td>
            <td>04/09/2023</td>
            <td><span class="status approved">Approved</span></td>
            <td>Family emergency</td>
            <td><a href="#">Download</a></td>
          </tr>
        </tbody>
      </table>

      <button class="submit-button">Submit a new excuse letter</button>
    </main>
  </div>
</body>
</html>
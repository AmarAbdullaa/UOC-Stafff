<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Request Forms</title>
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

.nav a {
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.settings-icon {
    font-size: 18px;
    margin-left: 20px;
}

.content {
    margin-left: 220px;
    max-width: 100%;
    
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    margin-top: 120px;
}

.content h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.form-section h2 {
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
    margin-bottom: 15px;
}

.form-list {
    list-style: none;
    margin-bottom: 20px;
}

.form-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
    font-size: 16px;
}
.form-list button , .next-btn{
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.cancel-btn {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    font-size: 16px;
    margin-right: 20px;
}

.next-btn {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
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
    
    
    <main class="content">
        <h1>Fill in and submit medical request forms</h1>
        
        <section class="form-section">
            <h2>Step 1: Select a form</h2>
            <ul class="form-list">
                <li>
                    Preparticipation Physical Evaluation (PPE) Form
                    <button>Select</button>
                </li>
                <li>
                    Medical History Questionnaire
                    <button>Select</button>
                </li>
               
               
            </ul>
            
            <h2>Step 2: Complete the form</h2>
        </section>
        
        <div class="actions">
            <button class="cancel-btn">Cancel</button>
            <button class="next-btn">Next</button>
        </div>
    </main>
</body>
</html>
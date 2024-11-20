<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Club Blog</title>
    <style>
        /* styles.css */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f7fa;
    color: #333;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #e3e7eb;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100vh;
}

.sidebar h2 {
    font-size: 1.5em;
    color: #333;
}

.sidebar nav a {
    display: block;
    color: #333;
    padding: 10px;
    text-decoration: none;
    border-radius: 5px;
    margin: 5px 0;
}

.sidebar nav a.active, .sidebar nav a:hover {
    background-color: #d0d6db;
}

.sidebar-footer a {
    display: block;
    color: #333;
    padding: 10px;
    text-decoration: none;
    margin-top: 20px;
}

.blog-content {
    flex: 1;
    padding: 20px;
    margin-top: 120px;
    margin-left: 210px;
}

.blog-content h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.blog-post {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    background-color: #ffffff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.post-info {
    flex: 1;
}

.post-info h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #333;
}

.post-info p {
    margin-bottom: 10px;
    color: #555;
}

.post-info button {
    padding: 10px 15px;
    border: none;
    background-color: #d0d6db;
    color: #333;
    border-radius: 5px;
    cursor: pointer;
}

.post-info button:hover {
    background-color: #bfc4c9;
}

.blog-post img {
    width: 120px;
    height: 120px;
    border-radius: 8px;
    margin-left: 15px;
    object-fit: cover;
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
   
        <main class="blog-content">
            <div class="blog-post">
                <div class="post-info">
                    <h2>New Gym Equipment</h2>
                    <p>We got new gym equipment. Come and try it out.</p>
                    <button>Read more</button>
                </div>
                <img src="../gym.jpg" alt="Gym equipment">
            </div>
            <div class="blog-post">
                <div class="post-info">
                    <h2>Football</h2>
                    <p>Football Rules Are here</p>
                    <button>Read more</button>
                </div>
                <img src="../footall.jpeg" alt="Yoga class">
            </div>
            <div class="blog-post">
                <div class="post-info">
                    <h2>New Swimming Pool Rules</h2>
                    <p>New swimming pool rules are now in effect. Please review them before your next visit.</p>
                    <button>Read more</button>
                </div>
                <img src="../pool.webp" alt="Swimming pool">
            </div>
            <div class="blog-post">
                <div class="post-info">
                    <h2>Basketball Tournament Registration</h2>
                    <p>Registration for our annual basketball tournament is now open. Sign up today!</p>
                    <button>Read more</button>
                </div>
                <img src="../basket ball.jpg" alt="Basketball court">
            </div>
        </main>
    </div>
</body>
</html>

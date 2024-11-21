<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Management Landing Page</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    line-height: 1.6;
}

h1, h2 {
    margin: 0;
}

/* Hero Section */
.hero {
    background: url('sports.jpeg') no-repeat center center/cover;
    color: black;
    text-align: center;
    padding: 80px 20px;
    margin-left: 210px;
}

.hero-content {
    max-width: 700px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.cta-btn {
    background-color: #0078D7;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 5px;
    cursor: pointer;
}

.cta-btn:hover {
    background-color: #005bb5;
}

/* Features Section */
.features {
    background: #f4f4f9;
    padding: 40px 20px;
    text-align: center;
    margin-left: 210px;
}

.features h2 {
    margin-bottom: 20px;
    font-size: 2em;
}

.feature-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.feature-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.feature-card img {
    width: 50px;
    height: 50px;
    margin-bottom: 15px;
}

.feature-card h3 {
    margin-bottom: 10px;
    font-size: 1.2em;
}

/* Call-to-Action Section */
.cta {
    background: url('bg.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
    padding: 60px 20px;
    margin-left: 220px;
    
}

.cta-content {
    max-width: 600px;
    margin: 0 auto;
}

.cta h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.cta-form {
    display: flex;
    gap: 10px;
}

.cta-form input {
    flex: 1;
    padding: 10px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
}

.cta-form button {
    padding: 10px 20px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
    background-color: #0078D7;
    color: white;
    cursor: pointer;
}

.cta-form button:hover {
    background-color: #005bb5;
}

    </style>
</head>
<body>
    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Manage your sports program</h1>
            <p>The most powerful sports management system for schools, clubs, and colleges. From scheduling and communication to player registration, payments, and more.</p>
            <button class="cta-btn">Get Started</button>
        </div>
    </header>

    <!-- Features Section -->
    <section class="features">
        <h2>Sports Management Software</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <img src="sports.jpeg" alt="Team Management Icon">
                <h3>Team Management</h3>
                <p>Easily manage teams, track attendance, and communicate with parents and athletes.</p>
            </div>
            <div class="feature-card">
                <img src="https://via.placeholder.com/50" alt="Mobile App Icon">
                <h3>Mobile App</h3>
                <p>Athletes and parents can view team rosters, schedules, and results from their mobile devices.</p>
            </div>
            <div class="feature-card">
                <img src="https://via.placeholder.com/50" alt="Scheduling Icon">
                <h3>Scheduling</h3>
                <p>Create and manage team schedules with ease.</p>
            </div>
            <div class="feature-card">
                <img src="https://via.placeholder.com/50" alt="Payments Icon">
                <h3>Payments</h3>
                <p>Collect fees and donations, track financials, and allow parents to pay online.</p>
            </div>
        </div>
   
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Management</title>
    <style>
        /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f9f9fc;
}

/* Hero Section */
.hero {
    color: white;
    text-align: center;
    padding: 100px 20px;
    background-image: url('sport_front.png');
    background-repeat: no-repeat;
    background-size: cover;
    margin-left: 210px;
}

.hero-content {
    max-width: 700px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.cta-btn {
    background-color: #6a4c93;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 1rem;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.cta-btn:hover {
    background-color: #dcd0f7;
    color: #6a4c93;
}

/* Notices Section */
.notices {
    background-color: #D8BFD8;
    padding: 60px 20px;
    text-align: center;
    margin-left: 210px;
}

.notices h2 {
    font-size: 2.5rem;
    color: #6a4c93;
    margin-bottom: 30px;
}

.notices-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 0 20px;
}

.notice-card {
    background: #f4f4f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.notice-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.notice-card h3 {
    color: #6a4c93;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.notice-card p {
    color: #555;
    font-size: 1rem;
    line-height: 1.5;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2rem;
    }

    .hero p {
        font-size: 1rem;
    }

    .cta-btn {
        padding: 10px 20px;
        font-size: 0.9rem;
    }

    .notices h2 {
        font-size: 2rem;
    }
}

    </style>
</head>
<body>

<?php include"nav.php";?>

    <!-- Header Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Welcome to  Peak</h1>
            <p>Your ultimate platform for UOC Sports activities adn updates.</p>
        </div>
    </header>

    <!-- Notices Section -->
    <section class="notices">
        <h2>Notices</h2>
        <div class="notices-grid">
            <div class="notice-card">
                <h3>Sports Blog</h3>
                <p>On our sports blog, you can dive into the world of every sport with ease
                    . Whether you're into football, basketball, tennis, or niche sports, each category 
                    offers a concise summary that keeps you updated on the latest results, key moments, 
                    and standout performances. Our summaries are designed to give you a quick yet thorough overview, 
                    so you never miss out on the 
                    action—no matter which sport you're passionate about.</p>
            </div>
            <div class="notice-card">
                <h3>Gym and Pool Pass</h3>
                <p>
                    Stay active and fit with access to our pool and gym facilities! Get your pass now to enjoy swimming, weight training, cardio, and more. Whether you're looking to relax by the pool or power through your workout, the facilities are here to help you meet your fitness goals.
                     Don't wait—get your pass today and make the most of our campus amenities
                </p>
            </div>
            <div class="notice-card">
                <h3>Inter-Faculty Freshers tournament</h3>
                <p>he Inter-Faculty Freshers Tournament is an exciting event that brings together students
                     from different faculties for some friendly competition. It's a chance for newcomers to showcase 
                     their talents, build connections, and get involved in campus life right from the start. Whether
                      it’s sports, games, or other activities, the tournament fosters team spirit, camaraderie, and 
                      a sense of belonging, 
                    making it the perfect way for freshers to kick off their university journey.!</p>
            </div>
            <div class="notice-card">
                <h3>Enhancement and Execuse Letters</h3>
                <p>
                    <b>Enhancement Letters:</b> For requests regarding course or grade enhancements, 
                    please submit your letters along with the necessary documentation before the specified deadline.
<br>
<br>

<b>Excuse Letters:</b> For absences due to medical or personal reasons, submit an excuse letter with
 the required proof (e.g., medical certificate) within 3 days of your absence.
                </p>
            </div>
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduConnect - Color Night</title>
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f9f9f9;
}

.container {
    width: 100%;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffffff;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.navbar .logo {
    font-weight: bold;
    font-size: 20px;
}

.navbar .menu a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
}

.navbar .menu a:hover {
    color: #007bff;
}

.navbar .profile img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.content {
    display: flex;
    flex: 1;
    gap: 20px;
}

.left-section,
.right-section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    flex: 1;
}

.left-section h1,
.right-section h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

.pending h2,
.notifications h2,
.seating-arrangement h3 {
    margin-bottom: 15px;
    font-size: 20px;
    color: #555;
}

.card {
    padding: 10px 15px;
    background: #f5f5f5;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.card .title {
    font-weight: bold;
}

.card .description {
    color: #777;
}

.card .time {
    font-size: 12px;
    color: #aaa;
}

.publish-btn {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    background: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.publish-btn:hover {
    background: #0056b3;
}

.seating-arrangement .card {
    background: #f0f0f0;
}

    </style>
</head>
<body>
   

        <main class="content">
            <section class="left-section">
                <h1>Color Night</h1>
                <div class="pending">
                    <h2>Pending</h2>
                    <div class="card">
                        <p class="title">Colors Night Request Form</p>
                        <p class="description">The form is ready for PDE approval.</p>
                    </div>
                    <div class="card">
                        <p class="title">Colors Night Request Form</p>
                        <p class="description">The form is ready for PDE approval.</p>
                    </div>
                </div>

                <div class="notifications">
                    <h2>Notifications</h2>
                    <div class="card">
                        <p class="title">Colors Night Request Form</p>
                        <p class="description">The request has been approved and published.</p>
                        <p class="time">Mon, 12:00 PM</p>
                    </div>
                    <div class="card">
                        <p class="title">Colors Night Request Form</p>
                        <p class="description">The request has been approved and published.</p>
                        <p class="time">Mon, 12:00 PM</p>
                    </div>
                    <div class="card">
                        <p class="title">Colors Night Request Form</p>
                        <p class="description">The request has been approved and published.</p>
                        <p class="time">Mon, 12:00 PM</p>

                        <h2>Publish</h2>
                <p>After you publish, the seat arrangement will be in effect. You can publish again after changing the arrangement.</p>
                <button class="publish-btn">Publish</button>
                <div class="seating-arrangement">
                    <h3>Seating Arrangement</h3>
                    <div class="card">
                        <p>Colors Night Seating Arrangement</p>
                        <p>Created by PDE</p>
                    </div>
                    <div class="card">
                        <p>Colors Night Seating Arrangement</p>
                        <p>Created by PDE</p>
                    </div>
                    <div class="card">
                        <p>Colors Night Seating Arrangement</p>
                        <p>Created by PDE</p>
                    </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
</body>
</html>

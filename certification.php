<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #D8BFD8;
    color: #333;
}

.container {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #f1f3f4;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    display: block;
    padding: 10px;
    border-radius: 5px;
}

.sidebar ul li a.active {
    background-color: #e3e4e6;
}

.logout-btn {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    font-size: 16px;
}

.main-content {
    flex: 1;
    padding: 40px;
    margin-left: 210px;
    
}

.main-content h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.section {
    margin-bottom: 30px;
    
}

.section h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}

.item {
    display: flex;
    align-items: center;
    padding: 15px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
}

.item-icon {
    font-size: 24px;
    margin-right: 15px;
}

.item-info {
    flex: 1;
}

.item-info p {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

.item-date {
    color: #666;
    font-size: 14px;
}

.request-btn,
.view-btn {
    background-color: #e3e4e6;
    color: #333;
    border: none;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
}

.request-btn {
    background-color: #f1f1f5;
}

.view-btn {
    background-color: #007bff;
    color: white;
}




    </style>


<body>

<?php include 'nav.php'; ?>
    
        <main class="main-content">
            <h1>Certification</h1>
            
            <section class="section">
                <h2>Recruitment</h2>
                <div class="item">
                    <div class="item-icon">📄</div>
                    <div class="item-info">
                        <p>Rugby Overall Mens First Place at SLUG</p>
                        <span class="item-date">2022-06-07 14:00</span>
                    </div>
                    <button class="request-btn">Request</button>
                </div>
            </section>
            
            <section class="section">
                <h2>Certificate</h2>
                <div class="item">
                    <div class="item-icon">📄</div>
                    <div class="item-info">
                        <p>Womens First Runner up in Hockey at SLUG</p>
                        <span class="item-date">2022-06-07 14:00</span>
                    </div>
                    <button class="request-btn">Request</button>
                </div>
                <div class="item">
                    <div class="item-icon">📄</div>
                    <div class="item-info">
                        <p>Womens Second Runners in WeighTlifting at SLUG</p>
                        <span class="item-date">2022-06-07 14:00</span>
                    </div>
                    <button class="request-btn">Request</button>
                </div>
            </section>
            
           
        </main>
        
    </div>
    

</body>
</html>

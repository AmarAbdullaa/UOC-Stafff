<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request Gym Access</title>
  <style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 100%;
    background-color:  #D8BFD8;

    border-radius: 10px;
    overflow: hidden;
    height: 100vh;
    margin-left: 230px;
  }
  

  
  .user-icon img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  
  .breadcrumb {
    padding: 15px 20px;
    font-size: 0.9rem;
    color: #555;
  }
  
  .breadcrumb a {
    text-decoration: none;
    color: #007bff;
  }
  
  .breadcrumb a:hover {
    text-decoration: underline;
  }
  
  .form-section {
    width: 100%;  
    margin-top: 40px;
    padding: 20px;
    height: 100vh;
  }
  
  .form-section h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #333;
    
  }
  
  .form-section p {
    margin-bottom: 20px;
    color: #666;
  }
  
  .request-form .form-group {
    margin-bottom: 15px;
  }
  
  .request-form label {
    display: block;
    font-size: 0.95rem;
    margin-bottom: 5px;
    color: #333;
  }
  
  .request-form input,
  .request-form textarea {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    color: #333;
    background-color: white;
  }
  
  .request-form input:focus,
  .request-form textarea:focus {
    border-color: #007bff;
    outline: none;
  }
  
  .submit-button {
    background-color: #9B59B6;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .submit-button:hover {
    background-color: #9B59B6;

  }
  
  </style>
</head>
<body>
<?php include"nav.php";?>
  <div class="container">
   
    <main>

      <section class="form-section">
        <h2>Request Gym Access</h2>
        <p>Please note that your request will be reviewed by the gym manager. You will receive an email to confirm your booking.</p>
        <form action="#" method="post" class="request-form">
          <div class="form-group">
            <label for="date">Preferred date</label>
            <input type="date" id="date" name="date" required>
          </div>
          <div class="form-group">
            <label for="time-slot">Preferred time slot</label>
            <input type="text" id="time-slot" name="time-slot" placeholder="Enter time slot" required>
          </div>
          <div class="form-group">
            <label for="notes">Personal preferences or notes</label>
            <textarea id="notes" name="notes" rows="4" placeholder="Enter any special requirements or notes"></textarea>
          </div>
          <button type="submit" class="submit-button">Submit</button>
        </form>
      </section>
    </main>
  </div>
</body>
</html>

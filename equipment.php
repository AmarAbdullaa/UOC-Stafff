<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Equipment Request</title>
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
    max-width: 100%;
   
    
  }
  
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
  }
  
  .logo {
    font-size: 18px;
    font-weight: bold;
  }
  
  .navbar a {
    margin: 0 10px;
    color: #333;
    text-decoration: none;
    font-weight: 500;
  }
  
  .icons {
    display: flex;
    align-items: center;
  }
  
  .icon {
    font-size: 20px;
    margin: 0 5px;
  }
  
  .profile-pic {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-left: 10px;
  }
  
  .main-content {
    background: white;
    padding: 20px;
    border-radius: 8px;
  }
  
  .main-content h1 {
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .form label {
    display: block;
    font-weight: bold;
    margin: 10px 0 5px;
  }
  
  .form select,
  .form input,
  .form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
  }
  
  .form button {
    width: 100%;
    padding: 12px;
    background-color: #1d4ed8;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
  }
  
  .form button:hover {
    background-color: #2563eb;
  }
  
  .footer {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #888;
  }
  
  .footer a {
    color: #888;
    margin: 0 10px;
    text-decoration: none;
  }
  
  .footer p {
    margin-top: 10px;
  }
  
  </style>
</head>
<body>
  <div class="container">
    <main class="main-content">
      <h1>Sports Equipment Request</h1>
      <form class="form">
        <label for="equipment-type">Equipment Type</label>
        <select id="equipment-type" required>
          <option value="" disabled selected>Select an equipment type</option>
          <option value="Basketball">Basketball</option>
          <option value="Soccer Ball">Soccer Ball</option>
          <option value="Tennis Racket">Tennis Racket</option>
        </select>

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" placeholder="Enter quantity" required>

        <label for="additional-info">Additional Information</label>
        <textarea id="additional-info" placeholder="Enter additional information"></textarea>

        <button type="submit">Submit Request</button>
      </form>
    </main>

    
  </div>
</body>
</html>

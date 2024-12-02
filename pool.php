<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request a Pass</title>
  <style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  
  .container {
    background-color: #D8BFD8;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    padding:  30px;
    margin-left: 210px;
  }
  
  h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #6A0DAD;
  }
  
  p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
  }
  
  .request-form {
    display: flex;
    flex-direction: column;
  }
  
  .form-group {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  
  .form-group input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
  }
  
  .form-section {
    margin-bottom: 20px;
  }
  
  label {
    font-size: 14px;
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
    color: #6A0DAD;
  }
  
  .time-slots button {
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    cursor: pointer;
    margin-right: 10px;
  }
  
  .time-slots button:hover {
    background-color: #007bff;
    color: white;
  }
  
  .radio-group label {
    display: flex;
    align-items: center;
    margin-right: 20px;
    font-size: 14px;
  }
  
  .radio-group input {
    margin-right: 5px;
  }
  
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    min-height: 80px;
  }
  
  .checkbox {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
  }
  
  .submit-btn {
    background-color: #9B59B6;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  
  
  
  </style>

</head>
<body>
  <?php include"nav.php";?>
  <div class="container">
    <h1>Request a pass</h1>
    <p>Please complete the form and we will get back to you within 48 hours</p>
    <form class="request-form">
      <div class="form-group">
        <input type="text" placeholder="First name" required>
        <input type="text" placeholder="Last name" required>
      </div>
      <div class="form-group">
        <input type="email" placeholder="Email" required>
        <input type="tel" placeholder="Phone number" required>
      </div>

      <div class="form-section">
        <label>Preferred time slots</label>
        <div class="time-slots">
          <button type="button">Morning</button>
          <button type="button">Afternoon</button>
          <button type="button">Evening</button>
          <button type="button">Weekday</button>
          <button type="button">Weekend</button>
        </div>
      </div>

      <div class="form-section">
        
      </div>

      <div class="form-section">
        <label for="additional-requests">Additional requests or instructions</label>
        <textarea id="additional-requests" placeholder="Please let us know if you have any specific requests or instructions"></textarea>
      </div>

      <div class="form-group">
        <label class="checkbox">
          <input type="checkbox" required>
          I have read and accept the terms and conditions
        </label>
      </div>

      <button type="submit" class="submit-btn">Submit request</button>
    </form>
  </div>
</body>
</html>

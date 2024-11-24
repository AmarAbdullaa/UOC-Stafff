<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flex Column Layout</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    .container1, .container2 {
      display: flex;
      flex-direction: row;
      gap: 50px; /* space between boxes */
      margin: 70px;
    }
    

    .box {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      height: 150px;
    }
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>
<div class="container">
  <div class="container1">
    <!-- box1 -->
    <div class="box">
        Box 1
    </div>

</div>


<div class="container2">
    <!-- box4 -->
    <div class="box">Box 1</div>
    
</div>
</div>
</body>
</html>

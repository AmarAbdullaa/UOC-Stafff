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
    

    .box1, .box2 {
      background-color: PINK;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 350px;
      height: 200px;
      border-radius: 20px;
      margin-left: 200px;

    }

    .box1 img {
      width: 50%;
      object-fit: cover;
      border-radius: 10px;
    }

    .box2 img {
      width: 60%;
      object-fit: cover;
      border-radius: 10px;
      justify-content: center;
      margin-top: 40px;
    }

    
  </style>
</head>
<body>
<?php
include 'nav.php'; // This includes the header.php file
?><div class="container">
  <div class="container1">
    <!-- UCSC -->
    <div class="box1">
    <a href="UCSC_Enhancemrnt.pdf" Download><img src="ucscc.png" alt=""></a>
      
        
    </div>

    
</div>


<div class="container2">
    <!-- Science -->
    <div class="box2">
    <a href="UCSC_Enhancement.pdf" Download>
    <img src="fos.png" alt=""></a>
      
    </div>
   
</div>
</div>
</body>
</html>

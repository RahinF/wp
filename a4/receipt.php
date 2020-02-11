<?php
session_start();

if (empty($_SESSION)){
  header("Location: index.php");
} //else {$_SESSION = [];}
print_r($_SESSION) ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Receipt</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Montserrat|Tajawal&display=swap" rel="stylesheet">
</head>
  <body>
<div class="receipt-box">
<div id="receipt">
  <div class="receipt-header">
    <img src="../../media/logo.png" alt="Lunardo Logo">
    <h1>Lunardo</h1>
  </div>

  <div class="lunardo-info">

    <p>Email: lunardocinema@lundaro.com.au</p>
    <p>Phone: (03) 9123 4567</p>
    <p>Address: Daylesford, Victoria</p>
    <p>ABN: 00 123 456 789</p>

  </div>

<div class = "receipt-text">
  <p>Name: <?php echo $_SESSION["cust"]["name"]; ?></p>
  <p>Movie: <?php echo $_SESSION["movie"]["id"]; ?></p>
  <p>Day: <?php echo $_SESSION["movie"]["day"]; ?></p>
  <p>Time: <?php echo $_SESSION["movie"]["hour"]; ?></p>
  <p>Cost: </p>
</div>

</div>
<div>
  </body>
</html>

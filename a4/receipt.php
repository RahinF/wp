<?php
session_start();

if (empty($_SESSION)){
  header("Location: index.php");
} else {


  // merge $_POST into single array
  $receiptData['date'] = date("h:ia d/m/Y");
  $cust = [$_SESSION['cust']['name'],$_SESSION['cust']['email'],$_SESSION['cust']['mobile']];
  $receiptData+=array_merge($cust,  $_SESSION['movie'], $_SESSION['seats']);
  $receiptData['cost'] =  $_SESSION['cost'];

  // write to file
  $fp = fopen("booking.txt", "a");
  flock($fp, LOCK_EX);
  fputcsv($fp, $receiptData,"\t");
  flock($fp, LOCK_UN);
  fclose($fp);

// display individual tickets
function showTickets(){
foreach($_SESSION['seats'] as $seat){
  if ($seat > 0){
    for($i = 0; $i < $seat; $i++){
    echo '<div class="ticket">';

    echo    '<h1>Lunardo</h1>';

    echo '<p>'.$_SESSION["movie"]["id"].'</p>';
    echo $_SESSION["movie"]["day"]. " ";
    echo $_SESSION["movie"]["hour"]. " ";
    echo array_search ($seat, $_SESSION['seats']).'<br>';
    echo '</div>';
  }
}
}}


}
?>
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
  <p>Movie: <?php

  switch ($_SESSION["movie"]["id"]) {
    case 'ACT':
      echo "Star Wars: The Rise of Skywalker";
      break;
    case 'ANM':
      echo "Frozen 2";
      break;
    case 'RMC':
      echo "The Aeronauts";
      break;
    case 'AHF':
      echo "Jojo Rabbit";
      break;
  }

  ?></p>
  <p>Day: <?php echo $_SESSION["movie"]["day"]; ?></p>
  <p>Time: <?php echo $_SESSION["movie"]["hour"]; ?></p>
  <p>Cost: <?php echo $_SESSION["cost"]; ?></p>
</div>

<?php showTickets(); ?>

</div>
<div>
  </body>
</html>

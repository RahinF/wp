<?php
session_start();

if (empty($_SESSION)){
  header("Location: index.php");
} else {


  // merge $_POST into single array
  $receiptData['date'] = date("h:ia d/m/Y");
  $cust = [$_SESSION['cust']['name'],$_SESSION['cust']['email'],$_SESSION['cust']['mobile']];
  $receiptData+=array_merge($cust,  $_SESSION['movie'], $_SESSION['seats']);
  $receiptData['cost'] =  '$'.$_SESSION['cost'];

  // write to file
  $fp = fopen("booking.txt", "a");
  flock($fp, LOCK_EX);
  fputcsv($fp, $receiptData,"\t");
  flock($fp, LOCK_UN);
  fclose($fp);

function getMovieName($movieID){
  switch ($movieID) {
    case 'ACT':
      return "Star Wars: The Rise of Skywalker";
      break;
    case 'ANM':
      return "Frozen 2";
      break;
    case 'RMC':
      return  "The Aeronauts";
      break;
    case 'AHF':
      return  "Jojo Rabbit";
      break;
  }
}

function getSeatName($seat){
  switch ($seat) {
    case 'STA':
      return "Standard Adult";
      break;
    case 'STP':
      return "Standard Concession";
      break;
    case 'STC':
      return  "Standard Child";
      break;
    case 'FCA':
      return  "First Class Adult";
      break;
    case 'FCP':
      return  "First Class Concession";
      break;
    case 'FCC':
      return  "First Class Child";
      break;
  }
}


// display individual tickets

function showTickets(){
  $ticketCount =0;
  foreach($_SESSION['seats'] as $seat){

    if ($seat > 0){

      for($i = 0; $i < $seat; $i++){
        if ($ticketCount == 0){
      echo '<div class="ticket-section">';
    }
      echo  '<div class="ticket">';
      echo  '<div class="ticket-a">';
      echo  '<h1>Lunardo Cinema</h1>';
      echo '<p>'.getMovieName($_SESSION["movie"]["id"])."<br>"
      .$_SESSION["movie"]["day"]. " ".$_SESSION["movie"]["hour"]."<br>"
      .getSeatName(array_search ($seat, $_SESSION['seats'])).'</p>';
      echo    '</div>';
      echo  '<div class="ticket-give">';
      echo  '<img src="../../media/barcode.png" alt="">';
      echo  '</div>';
      echo  '</div>';
      $ticketCount++;
      if ($ticketCount == 10){
        echo  '</div>';
        $ticketCount = 0;

      }
      }
    }
  }
}


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
  <link rel="stylesheet" href="receipt-print.css">
  <script src='../wireframe.js'></script>


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Montserrat|Tajawal&display=swap" rel="stylesheet">
</head>

  <body>
<div class="receipt-box">
  <div id="receipt">
    <div class="receipt-header">
    <h1>Lunardo</h1>
    <span class="lunardo-info">
    <p>
      ABN: 00 123 456 789<br>
      Phone: (03) 9123 4567<br>
      Email: lunardocinema@lundaro.com.au
    </p>
    </span>
  </div>
    <div class = "receipt-text">
  <div class="receipt-customer-details">
    <h2>Customer details</h2>
    <hr>
    <p>Name: <?php echo $_SESSION["cust"]["name"]; ?></p>
    <p>Mobile: <?php echo $_SESSION["cust"]["mobile"]; ?></p>
    <p>Email: <?php echo $_SESSION["cust"]["email"]; ?></p>
  </div>
    <div class="receipt-movie-details">
  <h2>Movie details</h2>
  <hr>
  <p>Movie: <?php echo getMovieName($_SESSION["movie"]["id"]);?></p>
  <p>Session: <?php echo $_SESSION["movie"]["day"]." ".$_SESSION["movie"]["hour"]; ?></p>
</div>

  <?php
  echo  '<table>';
  echo  '<tr>';
  echo  '<th>Quantity</th>';
  echo  '<th>Ticket Type</th>';
  echo  '</tr>';
  foreach($_SESSION['seats'] as $seat){
    if ($seat > 0){
      for($i = 0; $i < count($seat); $i++){
        echo  '<tr>';
        echo '<td>';
        echo $seat;
        echo'</td>';
        echo '<td>';
        echo getSeatName(array_search ($seat, $_SESSION['seats']));
        echo'</td>';
        echo  '</tr>';
      }
    }
  }
  echo  '</table>';
  ?>
<div class="thank-you-message">
  <p>Thank you for your purchase! Your tickets are available below.</p>
</div>
  <div class="receipt-cost-details">
    <p>Cost: $<?php echo $totalCost = sprintf("%.2f",(float)$_SESSION["cost"]); ?></p>
    <p>GST: $<?php echo $gst = sprintf("%.2f",$totalCost/11); ?></p>
    <hr>
    <p>Total: $<?php echo $totalCost + $gst; ?></p>
    <hr>
  </div>
 </div>
</div>

<?php showTickets(); ?>
</div>
  </body>
</html>

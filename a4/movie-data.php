<?php

function showPriceBoxes() {
$ticketType = ['Standard Adult', 'Standard Concession', 'Standard Child', 'First Class Adult', 'First Class Concession', 'First Class Child'];
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$ticketPrices = [
  'Standard Adult' => [
    'Discounted Price' => 15,
    'Normal Price' => 20.50,
  ],
  'Standard Concession' => [
    'Discounted Price' => 13,
    'Normal Price'=> 18,
  ],
  'Standard Child' => [
    'Discounted Price' => 11,
    'Normal Price' => 15.50,
  ],
  'First Class Adult' => [
    'Discounted Price' => 25,
    'Normal Price' => 30,
  ],
  'First Class Concession' => [
    'Discounted Price' => 23,
    'Normal Price' => 27.50,
  ],
  'First Class Child' => [
    'Discounted Price' => 21,
    'Normal Price' => 25,
  ]
];

  echo '<div class="price-grid">';

  for($i = 0; $i < count($ticketType); $i++){
    echo '<div class="price-box">';
    echo '<h2>'.$ticketType[$i].'</h2>';
    echo '<ul>';

    for($a = 0; $a < count($days); $a++){
      $currentDay = $days[$a];
      if($currentDay == 'Monday' || $currentDay == 'Tuesday'){
        $dPrice = $ticketPrices[$ticketType[$i]]["Discounted Price"];
        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$dPrice.'</span></li>';
      }
      else if ($currentDay == 'Wednesday' || $currentDay == 'Thursday' || $currentDay == 'Friday'){
        $dPrice = $ticketPrices[$ticketType[$i]]["Discounted Price"];
        $nPrice = sprintf("%.2f", $ticketPrices[$ticketType[$i]]["Normal Price"]);
        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$nPrice.'</span><span class="ticket-price">12pm $'.$dPrice.'</span></li>';
      }
      else {
        $nPrice = sprintf("%.2f", $ticketPrices[$ticketType[$i]]["Normal Price"]);
        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$nPrice.'</span></li>';
      }
    };

    echo '</ul>';
    echo '</div>';
  }
  echo '</div>';
}

// function showMoviePanel() {
// $arr = [];
//
//    $fp = fopen('movie-times.csv','r');
//    if (($headings = fgetcsv($fp, 0, ",")) !== false) {
//      while ( $cells = fgetcsv($fp, 0, ",")) {
//        for ($x=1;$x< count($cells); $x++){
//          $arr[$cells[0]][$headings[$x]]=$cells[$x];
//        }
//      }
//    }
//
//   fclose($fp);
// //----------------------------------------------------------------------------
// echo count($arr["LC000"]);
//
// for ($i = 0;$i <count($arr);$i++){
//   for ($a = 4; $a <count($arr['LC00'.$i]) $a++){
//
//   }
// }
// preShow($arr );
// //----------------------------------------------------------------------------
//
//   for($i = 0; $i < count($pumps); $i++){
//     echo '<div id="moviePanel'.$pumps["LC00".$i]["Genre"].'" class="movie-box">';
//     echo '<img src="../../media/movie-'.$pumps["LC00".$i]["Genre"].'.jpg" alt="'.$pumps["LC00".$i]["Name"].'">';
//     echo '<h1>'.$pumps["LC00".$i]["Name"].'</h1>';
//     echo '<div><img class="movie-rating" src="../../media/'.$pumps["LC00".$i]["Rating"].'-rating.png" alt="'.$pumps["LC00".$i]["Rating"].'-Rating"></div>';
//     echo '<div class = "movie-box-session">Times</div>';
//     echo '<div class = "movie-box-more-info">Info</div>';
//     echo '<div class="movie-session-times">';
//     echo '<ul>';
//
//   for ($a = 0; $a < 7; $a++){
//     echo '<li><div>Mon</div><span>12pm</span></li>';
//   }
//   echo '</ul>';
//   echo '</div>';
//   echo '</div>';
//   }
// }


?>

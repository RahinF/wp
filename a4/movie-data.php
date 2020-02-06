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



?>

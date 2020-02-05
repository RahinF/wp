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

  for($i = 0; $i < count($ticketType); $i++){
    echo '<div class="price-box">';
    echo '<h2>'.$ticketType[$i].'</h2>';
    echo '<ul>';

    for($a = 0; $a < count($days); $a++){
      $currentDay = $days[$a];
      if($currentDay == 'Monday' || $currentDay == 'Tuesday'){

        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$ticketPrices[$ticketType[$i]]["Discounted Price"].'</span></li>';
      }
      else if ($currentDay == 'Wednesday' || $currentDay == 'Thursday' || $currentDay == 'Friday'){
        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$ticketPrices[$ticketType[$i]]["Normal Price"].'</span><span class="ticket-price">12pm $'.$ticketPrices[$ticketType[$i]]["Discounted Price"].'</span></li>';
      }
      else {
        echo '<li>'.$days[$a].':<span class="ticket-price">$'.$ticketPrices[$ticketType[$i]]["Normal Price"].'</span></li>';

      }
    };

    echo '</ul>';
    echo '</div>';
  }
}



?>

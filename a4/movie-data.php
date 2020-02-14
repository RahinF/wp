<?php


// gets movie info from file
   $fp = fopen('movie-times.tsv','r');
   if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
     while ( $cells = fgetcsv($fp, 0, "\t")) {
       for ($x=1;$x< count($cells); $x++){
         $movieData[$cells[0]][$headings[$x]]=$cells[$x];
       }
     }
   }
  fclose($fp);

$GLOBALS['movie-data'] = $movieData;
$GLOBALS['days'] = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

function showPriceBoxes() {
$ticketType = ['Standard Adult', 'Standard Concession', 'Standard Child', 'First Class Adult', 'First Class Concession', 'First Class Child'];
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

    for($a = 0; $a < count($GLOBALS['days']); $a++){
      $currentDay = $GLOBALS['days'][$a];
      if($currentDay == 'Monday' || $currentDay == 'Tuesday'){
        $dPrice = $ticketPrices[$ticketType[$i]]["Discounted Price"];
        echo '<li>'.$GLOBALS['days'][$a].':<span class="ticket-price">$'.$dPrice.'</span></li>';
      }
      else if ($currentDay == 'Wednesday' || $currentDay == 'Thursday' || $currentDay == 'Friday'){
        $dPrice = $ticketPrices[$ticketType[$i]]["Discounted Price"];
        $nPrice = sprintf("%.2f", $ticketPrices[$ticketType[$i]]["Normal Price"]);
        echo '<li>'.$GLOBALS['days'][$a].':<span class="ticket-price">$'.$nPrice.'</span><span class="ticket-price">12pm $'.$dPrice.'</span></li>';
      }
      else {
        $nPrice = sprintf("%.2f", $ticketPrices[$ticketType[$i]]["Normal Price"]);
        echo '<li>'.$GLOBALS['days'][$a].':<span class="ticket-price">$'.$nPrice.'</span></li>';
      }
    };

    echo '</ul>';
    echo '</div>';
  }
  echo '</div>';
}

function showMoviePanel() {
// create movie panel
  for($i = 0; $i < count($GLOBALS['movie-data']); $i++){
    echo '<div id="moviePanel'.$GLOBALS['movie-data']["LC00".$i]['Genre'].'" class="movie-box">';
    echo '<img src="../../media/movie-'.$GLOBALS['movie-data']["LC00".$i]["Genre"].'.jpg" alt="'.$GLOBALS['movie-data']["LC00".$i]["Name"].'">';
    echo '<h1>'.$GLOBALS['movie-data']["LC00".$i]["Name"].'</h1>';
    echo '<div><img class="movie-rating" src="../../media/'.$GLOBALS['movie-data']["LC00".$i]["Rating"].'-rating.png" alt="'.$GLOBALS['movie-data']["LC00".$i]["Rating"].'-Rating"></div>';
    echo '<div class = "movie-box-session">Times</div>';
    echo '<div class = "movie-box-more-info">Info</div>';
    echo '<div class="movie-session-times">';
    echo '<ul>';

    for ($a = 0; $a < count($GLOBALS['days']); $a++){
      if (!empty($GLOBALS['movie-data']['LC00'.$i][$GLOBALS['days'][$a]])){
        echo '<li><div>'.substr($GLOBALS['days'][$a], 0, 3).'</div><span>'.$GLOBALS['movie-data']['LC00'.$i][$GLOBALS['days'][$a]].'</span></li>';
      }
    }
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  }
}

function showSynopsisPanel(){
  for($i = 0; $i < count($GLOBALS['movie-data']); $i++){
    echo '<div id="synopsis'.$GLOBALS['movie-data']["LC00".$i]['Genre'].'" class="synopsis-tabs synopsis-container">';
    echo '<div>';
    echo '<h2>'.$GLOBALS['movie-data']["LC00".$i]["Name"].'</h2>';
    echo '<h3>Rating: '.$GLOBALS['movie-data']["LC00".$i]["Rating"].'</h3>';
    echo  '<p>'.$GLOBALS['movie-data']["LC00".$i]['Description'].'</p>';
    echo   '<ul>';

    for ($a = 0; $a < count($GLOBALS['days']); $a++){
      if (!empty($GLOBALS['movie-data']['LC00'.$i][$GLOBALS['days'][$a]])){
        echo '<li><button type="button" name="button">'.$GLOBALS['days'][$a]." ".$GLOBALS['movie-data']['LC00'.$i][$GLOBALS['days'][$a]].'</button></li>';
      }
    }
    echo '</ul>';
    echo '</div>';
    echo '<div>';
    echo '<iframe width="560" height="315" src="'.$GLOBALS['movie-data']["LC00".$i]['Link'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    echo    '</div>';
    echo  '</div>';
  }
}

?>

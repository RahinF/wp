<?php
include("tools.php");
include("movie-data.php");

//$_POST = [];

if(!empty($_POST)){
  $custName = filter_var($_POST["cust"]["name"], FILTER_SANITIZE_STRING);
  $custEmail = $_POST["cust"]["email"];
  $custMobile = $_POST["cust"]["mobile"];
  $custCard = $_POST["cust"]["card"];
  $custExpiry = $_POST["cust"]["expiry"];
  $movieID = $_POST["movie"]["id"];
  $movieDay = $_POST["movie"]["day"];
  $movieHour = $_POST["movie"]["hour"];

  $errorCount = 0;

// checks seats
  $seatCount = 0;
  foreach ($_POST["seats"] as $numberOfSeats){
    if($numberOfSeats <= 0 || $numberOfSeats > 9){
      $seatCount++;
      if ($seatCount == 6){
        $errorCount++;
      }
    }
  }

  // name validation
  if(!preg_match("/^[a-zA-Z \-.']+$/", $custName)){
    $errCustName = '<p class= "input-error">Please input a valid name</p>';
    $errorCount++;
  } else {$errCustName = "";}

  // validate email
  if (!filter_var($custEmail, FILTER_VALIDATE_EMAIL)) {
    $errCustEmail =  '<p class= "input-error">Please input a valid email address</p>';
    $errorCount++;
  } else {$errCustEmail = "";}

  // validate mobile
  if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $custMobile)){
    $errCustMobile =  '<p class= "input-error">Must contain 10 digit and start with 04 or +614</p>';
    $errorCount++;
  } else {$errCustMobile = "";}

  // validate card
  if(!preg_match("/^( ?\d){14,19}$/", $custCard)){
    $errCustCard =  '<p class= "input-error">Must contain 14-19 digits</p>';
    $errorCount++;
 } else {$errCustCard = "";}


 // validate expiry
 if(!preg_match("/^[0-9]{4}\-[0-9]{2}$/", $custExpiry)){
   $errCustExpiry =   '<p class= "input-error">Please select a valid date</p>';
   $errorCount++;
  } else {$errCustExpiry = "";}

// if no seats are selected
  if ($seatCount == 6){
    $errSeats = '<p class="input-error">Need to buy at least 1 seat</p>';
  } else {$errSeats = "";}

// if movie is selected or not
  if (empty($movieID)){
    $errMovieID = '<p class="input-error">Please select a movie</p>';
    $errorCount++;
  } else {$errMovieID = "";}

// if session is selected or not
  if (isset($movieID) && empty($movieDay) || empty($movieHour)){
    $errMovieTime = '<p class="input-error">Please select a session time</p>';
    $errorCount++;
  } else {$errMovieTime = "";}

//$_POST += ['cost' => $totalCost];
// redirect if ok
  if ($errorCount == 0){
    //$_POST['cost'] += ['c3t'];
  $_SESSION = $_POST;
    header("location: receipt.php");
  }
}

?>


<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 4</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Montserrat|Tajawal&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <div>
      <!-- logo from https://www.logomaker.com-->
      <img src="../../media/logo.png" alt="Lunardo Logo">
      <h1>Lunardo</h1>
    </div>
  </header>

  <nav>
    <div>
      <ul>
        <li><a class="nav" href="#about-us">About Us</a></li>
        <li><a class="nav" href="#prices">Ticket Prices</a></li>
        <li><a class="nav" href="#now-showing">Now Showing</a></li>
      </ul>
    </div>
  </nav>

  <main>

    <section id="about-us">

      <div class="hero">
        <div class="hero-text">
          <h1>Grand reopening</h1>
          <p>Our cinema have been upgraded with the latest technology to ensure that you can enjoying the latest and greatest movies in the best way possible.</p>
        </div>
      </div>


      <div class="chairs-info">
        <h1 class="section-heading">New and improved seating</h1>
        <p>Now introducing our brand new seating options. Experience different levels of comfort with our latest standard and premium seating options.</p>


        <div class="flex-container">

          <div class="chair-box">
            <img src="../../media/538.png" alt="Standard seats">
            <div class="chair-text">
              <h2>Paragon 538</h2>
              <!-- description from: https://www.fercoseating.com/products/paragon-collection/paragon-538_cinema_seat/ -->
              <p>With a distinctive headrest and a contoured backrest, the Paragon 538 cinema seat delivers outstanding comfort.</p>
            </div>
          </div>

          <div class="chair-box">
            <img src="../../media/verona-twin.png" alt="Premium seats">
            <div class="chair-text">
              <h2>Verona Zero Wall</h2>
              <!-- description from: https://www.fercoseating.com/products/premium-collection/verona-zero-wall_reclining_cinema_seat/-->
              <p>Performance, practicality and style are beautifully combined to enhance the cinematic experience and exceed the expectations of even the most demanding movie-goers.</p>
            </div>
          </div>

        </div>
      </div>

      <div class="dolby-systems">
        <!-- description from: https://www.dolby.com/us/en/platforms/dolby-cinema.html-->
        <h1 class="section-heading">Dolby systems</h1>
        <p>The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound.</p>


        <div class="dolby-1">
          <div>
            <h1>Dolby Atmos</h1>
            <p>An industry-leading audio technology that delivers powerful, moving audio that flows all around you, even from above and behind. Up to 128 individual sounds can be precisely placed and moved throughout the cinema with
              lifelike depth, detail, and clarity, putting you at the center of the story.</p>
          </div>
          <img src="../../media/sound-waves.jpg" alt="Dolby Moving Audio image">
        </div>


        <div class="dolby-2">
          <div>
            <h1>Dolby Vision</h1>
            <p>Designed for the cinema to deliver incredible color, a million-to-one contrast ratio, and twice the brightness of standard screens. Powered by dual-laser projection technology and engineered for a consistent
              experience, Dolby Vision lets you see more of the story.</p>
          </div>
          <!-- image from: https://www.trustedreviews.com/news/dolby-vision-hdr-guide-3168479 -->
          <img src="../../media/dolby-vision.jpg" alt="Dolby Dramatic Imaging image">
        </div>

      </div>


    </section>

    <section id="prices">
      <div class="price-text">
        <h1 class="section-heading">Ticket Prices</h1>
        <p>On select days ticket prices are discounted!</p>
      </div>
        <?php showPriceBoxes(); ?>
    </section>


    <section id="now-showing">

      <h1 class="section-heading">Now showing</h1>

      <div class="now-showing-grid">

        <div class="movie-box" id="moviePanelACT">
          <img src="../../media/movie-ACT.jpg" alt="Star Wars: The Rise of Skywalker movie poster">
          <h1>Star Wars: The Rise of Skywalker</h1>
          <div><img class="movie-rating" src="../../media/M-rating.png" alt="M-Rating"></div>
          <div class = "movie-box-session">Times</div>
          <div class = "movie-box-more-info">Info</div>
          <div class="movie-session-times">
              <ul>
                <li><div>Mon</div><span>12pm</span></li>
                <li><div>Tue</div><span>12pm</span></li>
                <li><div>Wed</div><span>6pm</span></li>
                <li><div>Thur</div><span>6pm</span></li>
                <li><div>Fri</div><span>6pm</span></li>
                <li><div>Sat</div><span>12pm</span></li>
                <li><div>Sun</div><span>12pm</span></li>
              </ul>
          </div>
        </div>

        <div class="movie-box" id="moviePanelANM">
          <img src="../../media/movie-ANM.jpg" alt="Frozen 2 movie poster">
          <h1>Frozen 2</h1>
          <div><img class="movie-rating" src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class = "movie-box-session">Times</div>
          <div class = "movie-box-more-info">Info</div>
          <div class="movie-session-times">
              <ul>
                <li><div>Wed</div><span>9pm</span></li>
                <li><div>Thur</div><span>9pm</span></li>
                <li><div>Fri</div><span>9pm</span></li>
                <li><div>Sat</div><span>6pm</span></li>
                <li><div>Sun</div><span>6pm</span></li>
              </ul>
          </div>
        </div>


        <div class="movie-box" id="moviePanelRMC">
          <img src="../../media/movie-RMC.jpg" alt="The Aeronauts movie poster">
          <h1>The Aeronauts</h1>
          <div><img class="movie-rating" src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class = "movie-box-session">Times</div>
          <div class = "movie-box-more-info">Info</div>
          <div class="movie-session-times">
              <ul>
                <li><div>Mon</div><span>6pm</span></li>
                <li><div>Tue</div><span>6pm</span></li>
                <li><div>Sat</div><span>3pm</span></li>
                <li><div>Sun</div><span>3pm</span></li>
              </ul>
            </div>
          </div>

        <div class="movie-box" id="moviePanelAHF">
          <img src="../../media/movie-AHF.jpg" alt="JoJo Rabbit movie poster">
          <h1>JoJo Rabbit</h1>
          <div><img class="movie-rating" src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class = "movie-box-session">Times</div>
          <div class = "movie-box-more-info">Info</div>
          <div class="movie-session-times">
              <ul>
                <li><div>Wed</div><span>12pm</span></li>
                <li><div>Thur</div><span>12pm</span></li>
                <li><div>Fri</div><span>12pm</span></li>
                <li><div>Sat</div><span>9pm</span></li>
                <li><div>Sun</div><span>9pm</span></li>
              </ul>
            </div>
          </div>

      </div>




      <div class="synopsis">

        <div id="synopsisACT" class="synopsis-tabs synopsis-container">
          <div>
            <h2>Star Wars: The Rise of Skywalker</h2>
            <h3>Rating: M</h3>
            <p>The surviving Resistance faces the First Order once more as Rey, Finn and Poe Dameron's journey continues. With the power and knowledge of generations behind them, the final battle commences.</p>
            <ul>
              <li><button type="button" name="button">Monday 12pm</button></li>
              <li><button type="button" name="button">Tuesday 12pm</button></li>
              <li><button type="button" name="button">Wednesday 6pm</button></li>
              <li><button type="button" name="button">Thursday 6pm</button></li>
              <li><button type="button" name="button">Friday 6pm</button></li>
              <li><button type="button" name="button">Saturday 12pm</button></li>
              <li><button type="button" name="button">Sunday 12pm</button></li>
            </ul>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div id="synopsisANM" class="synopsis-tabs synopsis-container">
          <div>
            <h2>Frozen 2</h2>
            <h3>Rating: PG</h3>
            <p>Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice
              call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery.</p>
            <ul>
              <li><button type="button" name="button">Wednesday 9pm</button></li>
              <li><button type="button" name="button">Thursday 9pm</button></li>
              <li><button type="button" name="button">Friday 9pm</button></li>
              <li><button type="button" name="button">Saturday 6pm</button></li>
              <li><button type="button" name="button">Sunday 6pm</button></li>
            </ul>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Zi4LMpSDccc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div id="synopsisRMC" class="synopsis-tabs synopsis-container">
          <div>
            <h1>The Aeronauts</h1>
            <h3>Rating: PG</h3>
            <p>In 1862 headstrong scientist James Glaisher and wealthy young widow Amelia Wren mount a balloon expedition to fly higher than anyone in history. As their perilous ascent reduces their chances of survival, the unlikely duo soon discover
              things about themselves -- and each other -- that help both of them find their place in the world.</p>
            <ul>
              <li><button type="button" name="button">Monday 6pm</button></li>
              <li><button type="button" name="button">Tuesday 6pm</button></li>
              <li><button type="button" name="button">Saturday 3pm</button></li>
              <li><button type="button" name="button">Sunday 3pm</button></li>
            </ul>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Rm4VnwCtQO8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div id="synopsisAHF" class="synopsis-tabs synopsis-container">
          <div>
            <h1>JoJo Rabbit</h1>
            <h3>Rating: PG</h3>
            <p>Jojo is a lonely German boy who discovers that his single mother is hiding a Jewish girl in their attic. Aided only by his imaginary friend -- Adolf Hitler -- Jojo must confront his blind nationalism as World War II continues to rage
              on.</p>
            <ul>
              <li><button type="button" name="button">Wednesday 12pm</button></li>
              <li><button type="button" name="button">Thursday 12pm</button></li>
              <li><button type="button" name="button">Friday 12pm</button></li>
              <li><button type="button" name="button">Saturday 9pm</button></li>
              <li><button type="button" name="button">Sunday 9pm</button></li>
            </ul>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tL4McUzXfFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>


      <div id="booking-section">
        <div class="booking-form">
          <div class="booking-movie-details">

            <h2 id="bookingACT" class="movie-name">Star Wars: The Rise of Skywalker</h2>
            <h2 id="bookingANM" class="movie-name">Frozen 2</h2>
            <h2 id="bookingRMC" class="movie-name">The Aeronauts</h2>
            <h2 id="bookingAHF" class="movie-name">JoJo Rabbit</h2>
            <h3 id="booking-day"></h3>
            <h3 id="booking-hour"></h3>
          </div>

          <?php
          if (isset($movieID)){echo $errMovieID;}
          if (isset($movieDay) && isset($movieHour)){echo $errMovieTime;}
          if (!empty($_POST)){echo $errSeats;}
          ?>

          <form class="booking-grid" action="index.php" method="post">
            <div>

              <fieldset class="grid-item">
                <legend>Standard</legend>
                <div>Adults<select id="seats[STA]" name="seats[STA]"></select></div>
                <div>Consession<select id="seats[STP]" name="seats[STP]"></select></div>
                <div>Children<select id="seats[STC]" name="seats[STC]"></select></div>
              </fieldset>

              <fieldset class="grid-item">
                <legend>First Class</legend>
                <div>Adults<select id="seats[FCA]" name="seats[FCA]"></select></div>
                <div>Consession<select id="seats[FCP]" name="seats[FCP]"></select></div>
                <div>Children<select id="seats[FCC]" name="seats[FCC]"></select></div>
              </fieldset>
            </div>

            <div>
              <fieldset class="grid-item">
                <legend>Customer</legend>
                <input id="movie[id]" type="hidden" name="movie[id]" value= "<?php if(!empty($_POST)){echo $movieID; }?>">
                <input id="movie[day]" type="hidden" name="movie[day]" value= "<?php if(!empty($_POST)){echo $movieDay; }?>">
                <input id="movie[hour]" type="hidden" name="movie[hour]" value= "<?php if(!empty($_POST)){echo $movieHour; }?>">

                <div>
                  <?php if(isset($custName)){echo $errCustName;} ?>
                  <label for="cust[name]">Name</label>
                  <input id="cust[name]" type="text" name="cust[name]" placeholder="John Smith" value= "<?php if(!empty($_POST)){echo $custName;}?>" required>
                </div>

                <div>
                  <?php if(isset($custEmail)){echo $errCustEmail;} ?>
                  <label for="cust[email]">Email</label>
                  <input id="cust[email]" type="email" name="cust[email]" placeholder="example@mail.com" value= "<?php if(!empty($_POST)){echo $custEmail;}?>" required>
                </div>

                <div>
                  <?php if(isset($custMobile)){echo $errCustMobile;} ?>
                  <label for="cust[mobile]">Mobile</label>
                  <input id="cust[mobile]" type="tel" name="cust[mobile]" placeholder="04 12345678" value= "<?php if(!empty($_POST)){echo $custMobile;}?>" required>
                </div>

                <div>
                  <?php if(isset($custCard)){echo $errCustCard;} ?>
                  <label for="cust[card]">Credit Card</label>
                  <input id="cust[card]" type="text" name="cust[card]" placeholder="0123 4567 8901 2345" value= "<?php if(!empty($_POST)){echo $custCard;}?>" required>
                </div>

                <div>
                  <?php if(isset($custExpiry)){echo $errCustExpiry;} ?>
                  Expiry<input type="month" name="cust[expiry]" placeholder="YYYY-MM" value= "<?php if(!empty($_POST)){echo $custExpiry;}?>" required>
                </div>

              </fieldset>



              <div class="grid-item">
                Total: <span  id="total-price-span">$0.00</span>
                <!-- unnecessary please fix! -->
                <input type="hidden" name = "cost" id="total-price">
                <input type="submit" value="Order">
              </div>

            </div>
          </form>

        </div>
      </div>


    </section>

  </main>

  <footer>
    <ul>
      <li>Contact email: lunardocinema@lundaro.com.au</li>
      <li>Phone: (03) 9123 4567</li>
      <li>Address: Daylesford, Victoria</li>
    </ul>
    <div>&copy;
      <script>document.write(new Date().getFullYear());</script>
      Rahin Farook, s3297352. <a href="https://github.com/RahinF/wp">Github</a> Last modified
      <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    <script src="script.js"></script>
  </footer>

  <?php
  preshow($_POST);
  echo "session";
  preshow($_SESSION);
  printMyCode();
  ?>

</body>
</html>

<?php
include("tools.php");
include("movie-data.php");

if(!empty($_POST)){
  $_POST["cust"]["name"] = filter_var($_POST["cust"]["name"], FILTER_SANITIZE_STRING);
  $_POST["cust"]["mobile"] = str_replace(' ','',$_POST["cust"]["mobile"]);
  $_POST["cust"]["card"] = str_replace(' ','',$_POST["cust"]["card"]);

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
  if(!preg_match("/^[a-zA-Z \-.']+$/", $_POST["cust"]["name"])){
    $errCustName = '<p class= "input-error">Please input a valid name</p>';
    $errorCount++;
  } else {$errCustName = "";}

  // validate email
  if (!filter_var($_POST["cust"]["email"], FILTER_VALIDATE_EMAIL)) {
    $errCustEmail = '<p class= "input-error">Please input a valid email address</p>';
    $errorCount++;
  } else {$errCustEmail = "";}

  // validate mobile
  if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $_POST["cust"]["mobile"])){
    $errCustMobile =  '<p class= "input-error">Must contain 10 digit and start with 04 or +614</p>';
    $errorCount++;
  } else {$errCustMobile = "";}

  // validate card
  if(!preg_match("/^( ?\d){14,19}$/", $_POST["cust"]["card"])){
    $errCustCard = '<p class= "input-error">Must contain 14-19 digits</p>';
    $errorCount++;
 } else {$errCustCard = "";}


 // validate expiry
 if(!preg_match("/^[0-9]{4}\-[0-9]{2}$/", $_POST["cust"]["expiry"])){
   $errCustExpiry = '<p class= "input-error">Please select a valid date</p>';
   $errorCount++;
  } else {$errCustExpiry = "";}

// if no seats are selected
  if ($seatCount == 6){
    $errSeats = '<p class="input-error">Need to buy at least 1 seat</p>';
  } else {$errSeats = "";}

// if movie is selected or not
  if (empty($_POST["movie"]["id"])){
    $errMovieID = '<p class="input-error">Please select a movie</p>';
    $errorCount++;
  } else {$errMovieID = "";}

// if session is selected or not
  if (isset($_POST["movie"]["id"]) && empty($_POST["movie"]["day"]) || empty($_POST["movie"]["hour"])){
    $errMovieTime = '<p class="input-error">Please select a session time</p>';
    $errorCount++;
  } else {$errMovieTime = "";}

// redirect if ok
  if ($errorCount == 0){
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
      <div class="now-showing-grid"><?php moviePanel(); ?></div>
      <div class="synopsis"><?php synopsisPanel(); ?></div>


      <div id="booking-section">
        <div class="booking-form">
          <?php
          bookingName();
          if (isset($_POST["movie"]["id"])){echo $errMovieID;}
          if (isset($_POST["movie"]["day"]) && isset($_POST["movie"]["hour"])){echo $errMovieTime;}
          if (!empty($_POST)){echo $errSeats;}
          ?>

          <form class="booking-grid" action="index.php" method="post">
            <div>

              <fieldset class="grid-item">
                <legend>Standard</legend>
                <div>Adults<select id="seats[STA]" name="seats[STA]"></select></div>
                <div>Concession<select id="seats[STP]" name="seats[STP]"></select></div>
                <div>Children<select id="seats[STC]" name="seats[STC]"></select></div>
              </fieldset>

              <fieldset class="grid-item">
                <legend>First Class</legend>
                <div>Adults<select id="seats[FCA]" name="seats[FCA]"></select></div>
                <div>Concession<select id="seats[FCP]" name="seats[FCP]"></select></div>
                <div>Children<select id="seats[FCC]" name="seats[FCC]"></select></div>
              </fieldset>
            </div>

            <div>
              <fieldset class="grid-item">
                <legend>Customer</legend>
                <input id="movie[id]" type="hidden" name="movie[id]" value= "<?php if(!empty($_POST)){echo $_POST["movie"]["id"]; }?>">
                <input id="movie[day]" type="hidden" name="movie[day]" value= "<?php if(!empty($_POST)){echo $_POST["movie"]["day"]; }?>">
                <input id="movie[hour]" type="hidden" name="movie[hour]" value= "<?php if(!empty($_POST)){echo $_POST["movie"]["hour"]; }?>">

                <div>
                  <?php if(isset($_POST["cust"]["name"])){echo $errCustName;} ?>
                  <label for="cust[name]">Name</label>
                  <input id="cust[name]" type="text" name="cust[name]" placeholder="John Smith" value= "<?php if(!empty($_POST)){echo $_POST["cust"]["name"];}?>" required>
                </div>

                <div>
                  <?php if(isset($_POST["cust"]["email"])){echo $errCustEmail;} ?>
                  <label for="cust[email]">Email</label>
                  <input id="cust[email]" type="email" name="cust[email]" placeholder="example@mail.com" value= "<?php if(!empty($_POST)){echo $_POST["cust"]["email"];}?>" required>
                </div>

                <div>
                  <?php if(isset($_POST["cust"]["mobile"])){echo $errCustMobile;} ?>
                  <label for="cust[mobile]">Mobile</label>
                  <input id="cust[mobile]" type="tel" name="cust[mobile]" placeholder="04 12345678" value= "<?php if(!empty($_POST)){echo $_POST["cust"]["mobile"];}?>" required>
                </div>

                <div>
                  <?php if(isset($_POST["cust"]["card"])){echo $errCustCard;} ?>
                  <label for="cust[card]">Credit Card</label>
                  <input id="cust[card]" type="text" name="cust[card]" placeholder="0123 4567 8901 2345" value= "<?php if(!empty($_POST)){echo $_POST["cust"]["card"];}?>" required>
                </div>

                <div>
                  <?php if(isset($_POST["cust"]["expiry"])){echo $errCustExpiry;} ?>
                  Expiry<input type="month" name="cust[expiry]" placeholder="YYYY-MM" value= "<?php if(!empty($_POST)){echo $_POST["cust"]["expiry"];}?>" required>
                </div>

              </fieldset>



              <div class="grid-item">
                Total: $<span  id="total-price-span">0.00</span>
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

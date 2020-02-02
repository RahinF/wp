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


      <h1>Standard tickets</h1>
      <div class="flex-container-price">

        <div class="price-box">
          <h2>Adult</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$15 </span></li>
            <li>Tuesday:<span class='ticket-price'>$15</span></li>
            <li>Wednesday:<span class='ticket-price'>$20.50</span><span class='ticket-price'>12pm $15</span></li>
            <li>Thursday:<span class='ticket-price'>$20.50</span> <span class='ticket-price'>12pm $15</span></li>
            <li>Friday:<span class='ticket-price'>$20.50</span><span class='ticket-price'>12pm $15</span></li>
            <li>Saturday:<span class='ticket-price'> $20.50</span></li>
            <li>Sunday:<span class='ticket-price'>$20.50</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Concession</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$13</span></li>
            <li>Tuesday:<span class='ticket-price'>$13</span></li>
            <li>Wednesday:<span class='ticket-price'>$18</span> <span class='ticket-price'>12pm $13</span></li>
            <li>Thursday:<span class='ticket-price'>$18</span><span class='ticket-price'>12pm $13</span></li>
            <li>Friday:<span class='ticket-price'>$18</span><span class='ticket-price'>12pm $13</span></li>
            <li>Saturday:<span class='ticket-price'>$18</span></li>
            <li>Sunday:<span class='ticket-price'>$18</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Child</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$11</span></li>
            <li>Tuesday:<span class='ticket-price'>$11</span></li>
            <li>Wednesday:<span class='ticket-price'>$15.50</span><span class='ticket-price'>12pm $11</span></li>
            <li>Thursday:<span class='ticket-price'>$15.50</span><span class='ticket-price'>12pm $11</span></li>
            <li>Friday:<span class='ticket-price'>$15.50</span><span class='ticket-price'>12pm $11</span></li>
            <li>Saturday:<span class='ticket-price'>$15.50</span></li>
            <li>Sunday:<span class='ticket-price'>$15.50</span></li>
          </ul>
        </div>

      </div>

      <h1>First Class tickets</h1>
      <div class="flex-container-price">

        <div class="price-box">
          <h2>Adult</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$25</span></li>
            <li>Tuesday:<span class='ticket-price'>$25</span></li>
            <li>Wednesday:<span class='ticket-price'>$30</span> <span class='ticket-price'>12pm $25</span></li>
            <li>Thursday:<span class='ticket-price'>$30</span><span class='ticket-price'>12pm $25</span></li>
            <li>Friday:<span class='ticket-price'>$30</span><span class='ticket-price'>12pm $25</span></li>
            <li>Saturday:<span class='ticket-price'> $30</span></li>
            <li>Sunday:<span class='ticket-price'> $30</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Concession</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$23</span></li>
            <li>Tuesday:<span class='ticket-price'>$23</span></li>
            <li>Wednesday:<span class='ticket-price'>$27.50</span><span class='ticket-price'>12pm $23</span></li>
            <li>Thursday:<span class='ticket-price'>$27.50</span><span class='ticket-price'>12pm $23</span></li>
            <li>Friday:<span class='ticket-price'>$27.50</span><span class='ticket-price'>12pm $23</span></li>
            <li>Saturday:<span class='ticket-price'> $27.50</span></li>
            <li>Sunday:<span class='ticket-price'> $27.50</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Child</h2>
          <ul>
            <li>Monday:<span class='ticket-price'>$21</span></li>
            <li>Tuesday:<span class='ticket-price'>$21</span></li>
            <li>Wednesday:<span class='ticket-price'>$25</span><span class='ticket-price'>12pm $21</span></li>
            <li>Thursday:<span class='ticket-price'>$25</span><span class='ticket-price'>12pm $21</span></li>
            <li>Friday:<span class='ticket-price'>$25</span><span class='ticket-price'>12pm $21</span></li>
            <li>Saturday:<span class='ticket-price'> $25</span></li>
            <li>Sunday:<span class='ticket-price'> $25</span></li>
          </ul>
        </div>

      </div>
    </section>


    <section id="now-showing">

      <h1 class="section-heading">Now showing</h1>

      <div class="now-showing-grid">

        <div class="movie-box" id="moviePanelACT" onclick=" openSynopsis('synopsisSW');showBookingMovieName('bookingSW')">
          <img src="../../media/sw.jpg" alt="Star Wars: The Rise of Skywalker movie poster">
          <h1>Star Wars: The Rise of Skywalker</h1>
          <div class="movie-rating"><img src="../../media/M-rating.png" alt="M-Rating"></div>
          <div class="overlay">
            <div class="movie-text">
              <ul class="ml">
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
        </div>

        <div class="movie-box" id="moviePanelANM" onclick="openSynopsis('synopsisF2'); showBookingMovieName('bookingF2')">
          <img src="../../media/f2.png" alt="Frozen 2 movie poster">
          <h1>Frozen 2</h1>
          <div class="movie-rating"><img src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class="overlay">
            <div class="movie-text">
              <ul class="ml">
                <li><div>Wed</div><span>9pm</span></li>
                <li><div>Thur</div><span>9pm</span></li>
                <li><div>Fri</div><span>9pm</span></li>
                <li><div>Sat</div><span>6pm</span></li>
                <li><div>Sun</div><span>6pm</span></li>
              </ul>
            </div>
          </div>
        </div>


        <div class="movie-box" id="moviePanelRMC" onclick="openSynopsis('synopsisTA');showBookingMovieName('bookingTA')">
          <img src="../../media/aeronauts-poster.jpg" alt="The Aeronauts movie poster">
          <h1>The Aeronauts</h1>
          <div class="movie-rating"><img src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class="overlay">
            <div class="movie-text">
              <ul class="ml">
                <li><div>Mon</div><span>6pm</span></li>
                <li><div>Tue</div><span>6pm</span></li>
                <li><div>Sat</div><span>3pm</span></li>
                <li><div>Sun</div><span>3pm</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="movie-box" id="moviePanelAHF" onclick="openSynopsis('synopsisJR');showBookingMovieName('bookingJR')">
          <img src="../../media/jojo-rabbit-poster.jpg" alt="JoJo Rabbit movie poster">
          <h1>JoJo Rabbit</h1>
          <div class="movie-rating"><img src="../../media/PG-rating.png" alt="PG-Rating"></div>
          <div class="overlay">
            <div class="movie-text">
              <ul class="ml">
                <li><div>Wed</div><span>12pm</span></li>
                <li><div>Thur</div><span>12pm</span></li>
                <li><div>Fri</div><span>12pm</span></li>
                <li><div>Sat</div><span>9pm</span></li>
                <li><div>Sun</div><span>9pm</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div>




      <div class="synopsis">

        <div id="synopsisSW" class="synopsis-tabs synopsis-container">
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

        <div id="synopsisF2" class="synopsis-tabs synopsis-container">
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

        <div id="synopsisTA" class="synopsis-tabs synopsis-container">
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

        <div id="synopsisJR" class="synopsis-tabs synopsis-container">
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
            <h2 id="bookingSW" class="movie-name">Star Wars: The Rise of Skywalker </h2>
            <h2 id="bookingF2" class="movie-name">Frozen 2 </h2>
            <h2 id="bookingTA" class="movie-name">The Aeronauts </h2>
            <h2 id="bookingJR" class="movie-name">JoJo Rabbit </h2>
            <h3 id="booking-day"></h3>
            <h3 id="booking-hour"></h3>
          </div>

          <form class="booking-grid" target="_blank" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">
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
                <input id="movie[id]" type="hidden" name="movie[id]">
                <input id="movie[day]" type="hidden" name="movie[day]">
                <input id="movie[hour]" type="hidden" name="movie[hour]">
                <div><label for="cust[name]">Name</label><input id="cust[name]" type="text" name="cust[name]" placeholder="John Smith" pattern="^[a-zA-Z \-.']+$" required></div>
                <div><label for="cust[email]">Email</label><input id="cust[email]" type="email" name="cust[email]" placeholder="example@mail.com" required></div>
                <div><label for="cust[mobile]">Mobile</label><input id="cust[mobile]" type="tel" name="cust[mobile]" placeholder="04 12345678" pattern="^(\(04\)|04|\+614)( ?\d){8}$" required></div>
                <div><label for="cust[card]">Credit Card</label><input id="cust[card]" type="text" name="cust[card]" placeholder="0123 4567 8901 2345" pattern="^( ?\d){14,19}$" required></div>
                <div>Expiry<input type="month" name="cust[expiry]" placeholder="YYYY-MM" pattern="^[0-9]{4}\-[0-9]{2}$" required></div>
              </fieldset>



              <div class="grid-item">
                Total: <span id="total-price">$0.00</span>
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
    <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Rahin Farook, s3297352. <a href="https://github.com/RahinF/wp">Github</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    <script src="script.js"></script>
  </footer>

</body>

</html>

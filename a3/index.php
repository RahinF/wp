<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 3</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
  <script src="script.js"></script>

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
            <li>Monday: <span class='ticket-price'> $15 </span></li>
            <li>Tuesday: <span class='ticket-price'> $15</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $15</span>
              <span class='ticket-price'>After 12pm $20.50</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $15</span>
              <span class='ticket-price'>after 12pm $20.50</span></li>
            <li>Friday: <span class='ticket-price'>12pm $15</span>
              <span class='ticket-price'>after 12pm $20.50</span></li>
            <li>Saturday: <span class='ticket-price'> $20.50</span></li>
            <li>Sunday: <span class='ticket-price'>$20.50</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Concession</h2>
          <ul>
            <li>Monday: <span class='ticket-price'>$13</span></li>
            <li>Tuesday: <span class='ticket-price'>$13</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $13</span>
              <span class='ticket-price'>after 12pm $18</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $13</span>
              <span class='ticket-price'>after 12pm $18</span></li>
            <li>Friday: <span class='ticket-price'>12pm $13</span>
              <span class='ticket-price'>after 12pm $18</span></li>
            <li>Saturday: <span class='ticket-price'>$18</span></li>
            <li>Sunday: <span class='ticket-price'>$18</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Child</h2>
          <ul>
            <li>Monday: <span class='ticket-price'>$11</span></li>
            <li>Tuesday: <span class='ticket-price'>$11</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $11</span>
              <span class='ticket-price'>after 12pm $15.50</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $11</span>
              <span class='ticket-price'>after 12pm $15.50</span></li>
            <li>Friday: <span class='ticket-price'>12pm $11</span>
              <span class='ticket-price'>after 12pm $15.50</span></li>
            <li>Saturday: <span class='ticket-price'>$15.50</span></li>
            <li>Sunday: <span class='ticket-price'>$15.50</span></li>
          </ul>
        </div>

      </div> <!-- End of flex-container -->

      <h1>First Class tickets</h1>
      <div class="flex-container-price">

        <div class="price-box">
          <h2>Adult</h2>
          <ul>
            <li>Monday: <span class='ticket-price'>$25</span></li>
            <li>Tuesday: <span class='ticket-price'>$25</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $25</span>
              <span class='ticket-price'>after 12pm $30</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $25</span>
              <span class='ticket-price'>after 12pm $30</span></li>
            <li>Friday: <span class='ticket-price'>12pm $15</span>
              <span class='ticket-price'>after 12pm $30</span></li>
            <li>Saturday: <span class='ticket-price'> $30</span></li>
            <li>Sunday: <span class='ticket-price'> $30</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Concession</h2>
          <ul>
            <li>Monday: <span class='ticket-price'>$23</span></li>
            <li>Tuesday: <span class='ticket-price'>$23</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $23</span>
              <span class='ticket-price'>after 12pm $27.50</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $23</span>
              <span class='ticket-price'>after 12pm $27.50</span></li>
            <li>Friday: <span class='ticket-price'>12pm $23</span>
              <span class='ticket-price'>after 12pm $27.50</span></li>
            <li>Saturday: <span class='ticket-price'> $27.50</span></li>
            <li>Sunday: <span class='ticket-price'> $27.50</span></li>
          </ul>
        </div>

        <div class="price-box">
          <h2>Child</h2>
          <ul>
            <li>Monday: <span class='ticket-price'>$21</span></li>
            <li>Tuesday: <span class='ticket-price'>$21</span></li>
            <li>Wednesday: <span class='ticket-price'>12pm $21</span>
              <span class='ticket-price'>after 12pm $25</span></li>
            <li>Thursday: <span class='ticket-price'>12pm $21</span>
              <span class='ticket-price'>after 12pm $25</span></li>
            <li>Friday: <span class='ticket-price'>12pm $21</span>
              <span class='ticket-price'>after 12pm $25</span></li>
            <li>Saturday: <span class='ticket-price'> $25</span></li>
            <li>Sunday: <span class='ticket-price'> $25</span></li>
          </ul>
        </div>

      </div>
    </section>


    <section id="now-showing">

      <h1 class="section-heading">Now showing</h1>

      <div class="now-showing-grid">

        <div class="movie-box" id="moviePanelACT" onclick="inputMovieID(this), openSynopsis('synopsisSW')">
          <img src="../../media/SW-poster.png" alt="Star Wars: The Rise of Skywalker movie poster">

          <div class="movie-text">
            <h3>Star Wars: The Rise of Skywalker</h3>
            <h5>Rating: M</h5>
            <p>
              Monday 12:00pm <br>
              Tuesday 12:00pm <br>
              Wednesday 6:00pm <br>
              Thursday 6:00pm <br>
              Friday 6:00pm <br>
              Saturday 12:00pm <br>
              Sunday 12:00pm
            </p>
          </div>
        </div>

        <div class="movie-box" id="moviePanelANM" onclick="inputMovieID(this), openSynopsis('synopsisF2')">
          <img src="../../media/f2.jpg" alt="Frozen 2 movie poster">
          <h1>Frozen 2</h1>
          <h5>Rating: PG</h5>
          <div class="overlay">
            <div class="movie-text">
              <p>
                Wednesday 9:00pm <br>
                Thursday 9:00pm <br>
                Friday 9:00pm <br>
                Saturday 6:00pm <br>
                Sunday 6:00pm
              </p>
            </div>
          </div>
        </div>


        <div class="movie-box" id="moviePanelRMC" onclick="inputMovieID(this), openSynopsis('synopsisTA')">
          <img src="../../media/aeronauts-poster.jpg" alt="The Aeronauts movie poster">
          <div class="movie-text">
            <h3>The Aeronauts</h3>
            <h5>Rating: PG</h5>
            <p>
              Monday 6:00pm <br>
              Tuesday 6:00pm <br>
              Saturday 3:00pm <br>
              Sunday 3:00pm
            </p>
          </div>
        </div>

        <div class="movie-box" id="moviePanelAHF" onclick="inputMovieID(this), openSynopsis('synopsisJR')">
          <img src="../../media/jojo-rabbit-poster.jpg" alt="JoJo Rabbit movie poster">
          <h1>JoJo Rabbit</h1>
          <h5>Rating: PG</h5>
          <div class="overlay">
            <div class="movie-text">
              <p>
                Wednesday 12:00pm <br>
                Thursday 12:00pm <br>
                Friday 12:00pm <br>
                Saturday 9:00pm <br>
                Sunday 9:00pm
              </p>
            </div>
          </div>
        </div>
      </div>




      <div class="synopsis">

        <div id="synopsisSW" class="tabcontent">
          <div>
            <h2>Star Wars: The Rise of Skywalker</h2>
            <h3>Rating: M</h3>
            <p>The surviving Resistance faces the First Order once more as Rey, Finn and Poe Dameron's journey continues. With the power and knowledge of generations behind them, the final battle commences.</p>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button type="button" name="button" onclick="input12pm();inputMonday()">Monday 12:00pm</button>
          <button type="button" name="button" onclick="input12pm();inputTuesday()">Tuesday 12:00pm</button>
          <button type="button" name="button" onclick="input6pm();inputWednesday()">Wednesday 6:00pm</button>
          <button type="button" name="button" onclick="input6pm();inputThursday()">Thursday 6:00pm</button>
          <button type="button" name="button" onclick="input6pm();inputFriday()">Friday 6:00pm</button>
          <button type="button" name="button" onclick="input12pm();inputSaturday()">Saturday 12:00pm</button>
          <button type="button" name="button" onclick="input12pm();inputSunday()">Sunday 12:00pm</button>
        </div>

        <div id="synopsisF2" class="tabcontent">
          <div>
            <h2>Frozen 2</h2>
            <h3>Rating: PG</h3>
            <p>Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery.</p>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button type="button" name="button" onclick="input9pm();inputWednesday()">Wednesday 9:00pm</button>
          <button type="button" name="button" onclick="input9pm();inputThursday()">Thursday 9:00pm</button>
          <button type="button" name="button" onclick="input9pm();inputFriday()">Friday 9:00pm</button>
          <button type="button" name="button" onclick="input6pm();inputSaturday()">Saturday 6:00pm</button>
          <button type="button" name="button" onclick="input6pm();inputSunday()">Sunday 6:00pm</button>
        </div>

        <div id="synopsisTA" class="tabcontent">
          <div>
            <h2>The Aeronauts</h2>
            <h3>Rating: PG</h3>
            <p>In 1862 headstrong scientist James Glaisher and wealthy young widow Amelia Wren mount a balloon expedition to fly higher than anyone in history. As their perilous ascent reduces their chances of survival, the unlikely duo soon discover things about themselves -- and each other -- that help both of them find their place in the world.</p>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button type="button" name="button" onclick="input6pm();inputMonday()">
            <div>Monday<div><span>6:00pm</span>
          </button>
          <button type="button" name="button" onclick="input6pm();inputTuesday()">Tuesday 6:00pm</button>
          <button type="button" name="button" onclick="input3pm();inputSaturday()">Saturday 3:00pm</button>
          <button type="button" name="button" onclick="input3pm();inputSunday()">Sunday 3:00pm</button>
        </div>

        <div id="synopsisJR" class="tabcontent">
          <div>
            <h2>JoJo Rabbit</h2>
            <h3>Rating: PG</h3>
            <p>Jojo is a lonely German boy who discovers that his single mother is hiding a Jewish girl in their attic. Aided only by his imaginary friend -- Adolf Hitler -- Jojo must confront his blind nationalism as World War II continues to rage on.</p>
          </div>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button type="button" name="button" onclick="input12pm();inputWednesday()">Wednesday 12:00pm</button>
          <button type="button" name="button" onclick="input12pm();inputThursday()">Thursday 12:00pm</button>
          <button type="button" name="button" onclick="input12pm();inputFriday()">Friday 12:00pm</button>
          <button type="button" name="button" onclick="input9pm();inputSaturday()">Saturday 9:00pm</button>
          <button type="button" name="button" onclick="input9pm();inputSunday()">Sunday 9:00pm</button>
        </div>
      </div>


      <div class="grid-box">
        <div>
          <div>
            <p>movie 1</p>
          </div>
          <div>
            <p>movie 2</p>
          </div>
          <div>
            <p>movie 3</p>
          </div>
          <div>
            <p>movie 4</p>
          </div>
          <form target="_blank" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">

            <fieldset class="grid-item">
              <legend>Standard</legend>
              Adults
              <select id="seats[STA]" name="seats[STA]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              consession
              <select id="seats[STP]" name="seats[STP]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              children
              <select id="seats[STC]" name="seats[STC]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
            </fieldset>

            <fieldset class="grid-item">
              <legend>First Class</legend>
              adults
              <select id="seats[FCA]" name="seats[FCA]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              consession
              <select id="seats[FCP]" name="seats[FCP]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              children
              <select id="seats[FCC]" name="seats[FCC]">
                <option value="0">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
            </fieldset>

            <fieldset class="grid-item">
              <legend>Customer</legend>
              <input id="movie[id]" type="text" name="movie[id]">
              <input id="movie[day]" type="text" name="movie[day]">
              <input id="movie[hour]" type="text" name="movie[hour]">
              <label for="cust[name]">Name</label><input id="cust[name]" type="text" name="cust[name]">
              <label for="cust[email]">Email</label><input id="cust[email]" type="email" name="cust[email]">
              <label for="cust[mobile]">Mobile</label><input id="cust[mobile]" type="tel" name="cust[mobile]" pattern="^04+[0-9]{8}">
              <label for="cust[card]">Credit Card</label><input id="cust[card]" type="text" name="cust[card]">
              Expiry<input type="month" name="cust[expiry]" placeholder="YYYY-MM">
            </fieldset>

<div class="grid-item">
  total<span></span>
</div>

            <input type="submit" value="Order">
          </form>

        </div>
      </div>
      <!------------------------------------------------------------------------------------------->



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
  </footer>

</body>

</html>

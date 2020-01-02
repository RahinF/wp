<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

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
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#prices">Ticket Prices</a></li>
        <li><a href="#now-showing">Now Showing</a></li>
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
      <div>




        <div class="chairs-info">
          <h1 class="section-heading">New and improved seating</h1>
          <p>Now introducing our brand new seating options. Experience different levels of comfort with our latest standard and premium seating options.</p>


          <div class="flex-container">

            <div class="chair-box">
              <img src="../../media/538.png" alt="Standard seats">
              <div class="chair-text">
                <h2>Paragon 538</h2>
                <p>With a distinctive headrest and a contoured backrest, the Paragon 538 cinema seat delivers outstanding comfort.</p>
              </div>
            </div>

            <div class="chair-box">
              <img src="../../media/Verona-Twin.png" alt="Premium seats">
              <div class="chair-text">
                <h2>Verona Zero Wall</h2>
                <p>Performance, practicality and style are beautifully combined to enhance the cinematic experience and exceed the expectations of even the most demanding movie-goers.</p>
              </div>
            </div>

          </div>
        </div>

        <div class="dolby-systems">


          <h1 class="section-heading">Dolby systems</h1>
          <p>The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound.</p>
          <div class="dolby-1">
            <div>
              <h1>Moving Audio</h1>
              <p>Dolby Atmos® is an industry-leading audio technology that delivers powerful, moving audio that flows all around you, even from above and behind. Up to 128 individual sounds can be precisely placed and moved throughout the cinema with
                lifelike depth, detail, and clarity, putting you at the center of the story.</p>
            </div>
            <img src="../../media/s.jpg" alt="Dolby Moving Audio image">

          </div>


          <div class="dolby-2">
            <div>
              <h1>Dramatic Imaging</h1>
              <p>Dolby Vision™ was designed for the cinema to deliver incredible color, a million-to-one contrast ratio, and twice the brightness of standard screens. Powered by dual-laser projection technology and engineered for a consistent
                experience, Dolby Vision lets you see more of the story.</p>
            </div>

            <img src="../../media/v.jpg" alt="Dolby Dramatic Imaging image">
          </div>

        </div>


    </section>

    <section id="prices">
      <div class="price-text">
        <h1 class="section-heading">Prices</h1>
        <p>On x days ticket prices are discounted!</p>
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

      <div class="flex-container-movies">

        <div class="movie-box">
          <img src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">

          <div class="movie-text">
            <h4>Star Wars: The Rise of Skywalker</h4>
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

        <div class="movie-box">
          <img width="200px" src="../../media/Frozen-2.jpg" alt="Frozen 2 movie poster">

          <div class="movie-text">
            <h4>Frozen 2</h4>
            <h5>Rating: PG</h5>
            <p>
              Monday - <br>
              Tuesday - <br>
              Wednesday 9:00pm <br>
              Thursday 9:00pm <br>
              Friday 9:00pm <br>
              Saturday 6:00pm <br>
              Sunday 6:00pm
            </p>
          </div>
        </div>

        <div class="movie-box">
          <img src="../../media/Aeronauts.jpg" alt="The Aeronauts movie poster">
          <div class="movie-text">
            <h4>The Aeronauts</h4>
            <h5>Rating: PG</h5>
            <p>
              Monday 6:00pm <br>
              Tuesday 6:00pm <br>
              Wednesday - <br>
              Thursday - <br>
              Friday - <br>
              Saturday 3:00pm <br>
              Sunday 3:00pm
            </p>
          </div>
        </div>

        <div class="movie-box">
          <img src="../../media/Jojo_Rabbit.jpg" alt="JoJo Rabbit movie poster">
          <div class="movie-text">
            <h4>JoJo Rabbit</h4>
            <h5>Rating: PG</h5>
            <p>
              Monday - <br>
              Tuesday - <br>
              Wednesday 12:00pm <br>
              Thursday 12:00pm <br>
              Friday 12:00pm <br>
              Saturday 9:00pm <br>
              Sunday 9:00pm
            </p>
          </div>
        </div>


      </div> <!-- end of flex-container -->

      <!--large display-->


      <div class="synopsis">
        <div class="flex-container">

          <div class="movie-text">
            <h2>Star Wars: The Rise of Skywalker</h2>
            <h3>Rating: M</h3>
            <p>The surviving Resistance faces the First Order once more as Rey, Finn and Poe Dameron's journey continues. With the power and knowledge of generations behind them, the final battle commences.</p>


          </div>

          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>


        </div>
        <ul>
          <li>Monday 12:00pm</li>
          <li>Tuesday 12:00pm</li>
          <li>Wednesday 6:00pm</li>
          <li>Thursday 6:00pm</li>
          <li>Friday 6:00pm</li>
          <li>Saturday 12:00pm</li>
          <li>Sunday 12:00pm</li>
        </ul>
      </div>




    </section>
  </main>

  <footer>
    <ul>
      <li>Contact email: lunardocinema@lundaro.com.au</li>
      <li>Phone: (03) 9123 4567</li>
      <li>Address: 123 dummy st, dummy, Australia</li>
    </ul>
    <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Rahin Farook, s3297352. <a href="https://github.com/RahinF/wp">Github</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>

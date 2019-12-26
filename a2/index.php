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
          <li><a href="#About_Us">About Us</a></li>
          <li><a href="#Prices">Prices</a></li>
          <li><a href="#Now_Showing">Now Showing</a></li>
        </ul>
      </div>
    </nav>

    <main>

      <section id="About_Us">

        <div class="hero">
          <div class="hero-text">
            <h1>Lunardo cinema grand reopening</h1>
            <p>reopening Lunardo Cinema now sport powerful dolby sound system, advanced stuff</p>
          </div>
        </div>
        <div >




        <div class="chairs-info">
          <h1>New and improved seating</h1>
          <p>Now introducing our brand new seating options. Experience different levels of comfort with our latest standards and premium seating options.</p>
        </div>

        <div class="flex-container">

          <div class="chairs-standard">
            <img height= '400px' src="../../media/538.jpg" alt="Standard seats">
            <div class="chair-text">
              <h2>Standard seats</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

            <div class="chairs-premium">
              <img  height= '400px' src="../../media/Verona-Twin.png" alt="Standard seats">
              <div class="chair-text">
                <h2>Premium seats</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

          </div>

        <div class="projection-system">
          <div class="projection-system-text">
            <h1>projection system</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </section>

      <section id="Prices">
        <h1>Prices</h1>
        <p>On x days ticket prices are discounted!</p>




      <ul>
        <li>Standard Adult</li>
        <li>Standard Concession</li>
        <li>Standard Child</li>
        <li>First Class Adult</li>
        <li>First Class Concession</li>
        <li>First Class Child</li>
      </ul>

      <table>
        <tr>
          <th>Seat Type</th>

all day Monday
all day Tuesday
after 12pm Wednesday
after 12pm Thursday
after 12pm Friday
all day Saturday
all day Sunday

          <th>All day Monday & Tuesday AND 12pm on Wednesday, Thursday & Friday.</th>
          <th>All day Saturday & Sunday and after 12pm on Wednesday, Thursday & Friday.</th>
        </tr>
        <tr>
          <th>Standard Adult</th>

          <td>$15.00</td>
          <td>$20.50</td>
        </tr>
        <tr>
          <th>Standard Concession</th>

          <td>$13.00</td>
          <td>$18.00</td>
        </tr>
        <tr>
          <th>Standard Child</th>

          <td>$11.00</td>
          <td>$15.50</td>
        </tr>
        <tr>
          <th>First Class Adult</th>

          <td>$25.00</td>
          <td>$30.00</td>
        </tr>
        <tr>
          <th>First Class Concession</th>

          <td>$23.00</td>
          <td>$27.50</td>
        </tr>
        <tr>
          <th>First Class Child</th>

          <td>$21.00</td>
          <td>$25.00</td>
        </tr>
      </table>
        </section>






          <section id="Now_Showing">

            <h1>Now showing</h1>

            <div class="flex-container-movies">

              <div class="movie-box">
                <img height= '300px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
              </div>
              <div>
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

              <div class="movie-box">
                <img height= '300px'  width="200px" src="../../media/Frozen-2.jpg" alt="Star Wars: The Rise of Skywalker movie poster">
              </div>
              <div>
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

              <div class="movie-box">
                <img height= '300px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
              </div>
              <div>
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

              <div class="movie-box">
                <img height= '300px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
              </div>
                <div>
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

            </div> <!-- end of flex-container -->

          <!--large display-->


              <div class="showcase-details">
                <div class="flex-container">

                <div class="showcase-text">
                  <h4>Star Wars: The Rise of Skywalker</h4>
                  <h5>Rating: M</h5>
                  <p>The surviving Resistance faces the First Order once more as Rey, Finn and Poe Dameron's journey continues. With the power and knowledge of generations behind them, the final battle commences.</p>
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

                <div>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/14EztMXh5vQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>




          </section>
        </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Rahin Farook, s3297352. <a href="https://github.com/RahinF/wp">Github</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>

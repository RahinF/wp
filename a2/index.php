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
  </head>

  <body>

    <header>
      <div>
        <img src="../../media/Logo.jpg" alt="Lunardo Logo">
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
            <h1>About us</h1>
            <p>reopening Lunardo Cinema now sport powerful dolby sound system, advanced stuff</p>
          </div>
        </div>



        <div class="flex-container">

          <div class="chairs_info">
            <h1>chairs</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="chairs_standard">
            <img  height= '400px' src="../../media/538.jpg" alt="Standard seats">
            <div class="chair-text">
              <h2>Standard seats</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

            <div class="chairs_premium">
              <img  height= '400px' src="../../media/Verona-Twin.png" alt="Standard seats">
              <div class="chair-text">
                <h2>premium seats</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

          </div>

        <div>
          <img src="../../media/Cinema.jpg" alt="temp">
          <h1>projection system</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </section>

      <section id="Prices">
        <h1>Prices</h1>
      On x days ticket prices are discounted!



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

            <div class="flex-container">

              <div class="movie-box">
                <img height= '400px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
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
                <img height= '400px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
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
                <img height= '400px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
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
                <img height= '400px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
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

            </div> <!-- end of flex-container -->

          <!--large display-->
          <div class="flex-container">

            <div class="large-box">
                <img height= '400px' src="../../media/SW_Poster.png" alt="Star Wars: The Rise of Skywalker movie poster">
            </div>
              <div class="showcase-details">
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

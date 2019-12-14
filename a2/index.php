<!DOCTYPE html>
<html lang='en' class="container">
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
        <img href="logo.png" alt="Lunardo Logo"></img>
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
    <section id="About_Us">about us</section>
    <article id="Prices">prices</article>
    <section id="Now_Showing">now showing</section>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>

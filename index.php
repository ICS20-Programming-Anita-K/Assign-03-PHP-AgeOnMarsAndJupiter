<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta name="description" content="Calculate Your Age on Mars and Venus" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Anita Kay" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Title -->
    <title>Calculate Your Age on Mars and Venus</title>
  </head>
	<body>
    <br>
    <!-- MDL Progress Bar with Indeterminate Progress -->
    <center><div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </script></center>
    <?php 
      echo "<center><h1>Calculate Your Age on Mars and Venus</h1></center>"; 
    ?>
    <center><img src="./images/mars.jpeg" width=30%><img src="./images/venus.jpg" width=28.29%></center>
    <?php
      echo "<center><h3>Enter your information here:</h3></center>"; 
    ?>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <!-- Name field -->
      <label for="lblName">Name:</label>
      <input type="text" name="name" placeholder="Name"><br><br>
      <!-- Age field -->
        <label for="lblAge">Age (years)</label>
        <input type="number" name="age" placeholder="Age"><br><br>
      <input type="submit" value="Calculate Ages on Mars and Venus">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">	
	    </iframe>
    <?php 
      echo "<center><h3>Put your age on Mars and Venus here:</h3></center>";
    ?>
    <!-- Table for age on Mars-->
    <center><table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    <thead>
       <tr>
        <th class="mdl-data-table__cell--non-numeric">Age on Mars</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">Child (0-12)</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">Teenager (13-19)</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">Adult (20-39)</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">Middle Age Adult (40-59)</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">Senior Adult (60+)</td>
      </tr>
    </tbody>
    </table>
        </form>
      <br>
    <!-- Table for age on Venus-->
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">Age on Venus</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Child (0-12)</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Teenager (13-19)</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Adult (20-39)</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Middle Age Adult (40-59)</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Senior Adult (60+)</td>
        </tr>
      </tbody>
    </table>
    </form></center>
    <!-- Description of an octahedron -->
    <?php 
      echo "<center><h3>Why is our age different on other planets?</h3></center>";
    ?>
    <?php
       echo"<center><p>Though we don't typically think about it this way, our age is really the number of times the Earth has orbited the Sun since we were born. Since each planet takes a different amount of time to orbit the sun, and therefore a different year length. So, if we were to live on another planet, such as Mars or Venus, our age would be different.</p></center>"; 
    ?>
    <?php 
      echo "<center><h3>Watch this video to see the planets in our Solar System orbiting the Sun ↓</h3></center>";
    ?>
    <br></br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/z8aBZZnv6y8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </body>
</html>
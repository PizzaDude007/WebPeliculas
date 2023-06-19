<!DOCTYPE html>
<html>

<script src="js/script.js"></script>

<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'header.php';?>
    <div id="main" class="main">
        <div class="imagen" style="display: flex; justify-content: center;">
          <img src="src/taquilleras.jpg" alt="Top 9 peliculas más taquilleras" usemap="#mapa">
    
          <map name="mapa">
            <area shape="rect" coords="0,0,115,400" href="https://www.youtube.com/watch?v=svLSGZkTzC0" alt="Vengadores: Endgame">
            <area shape="rect" coords="115,0,230,400" href="https://www.youtube.com/watch?v=Xg8kYk6uHN0&t" alt="Avatar">
            <area shape="rect" coords="230,0,345,400" href="https://www.youtube.com/watch?v=29N8fmFISkA&t" alt="Titanic">
            <area shape="rect" coords="345,0,460,400" href="https://youtu.be/V8qlIZsutAQ" alt="Star Wars: El despertar de la fuerza">
            <area shape="rect" coords="460,0,575,400" href="https://www.youtube.com/watch?v=-f5PwE_Q8Fs" alt="Vengadores: Infinity War">
            <area shape="rect" coords="575,0,690,400" href="https://www.youtube.com/watch?v=z3w554ktnqo" alt="Jurassic World">
            <area shape="rect" coords="690,0,805,400" href="https://www.youtube.com/watch?v=7rxwEfFMbaY" alt="El Rey León">
            <area shape="rect" coords="805,0,920,400" href="https://www.youtube.com/watch?v=HQIiYqOVTWo" alt="Los Vengadores">
            <area shape="rect" coords="920,0,1040,400" href="https://www.youtube.com/watch?v=rtegqF0ek8A" alt="Fast and Furious 7">
          </map>
      </div>
      <br>
      <!-- Contenedor de películas -->
      <div class="container">

          <?php
          // Your database connection code
          $host = "localhost";
          $username = "root";
          $password = "negocios123";
          $database = "Eq8Peliculas";

          $conn = mysqli_connect($host, $username, $password, $database);

          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // Query the "peliculas" table to retrieve the movie data
          $sql = "SELECT * FROM peliculas";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  $movieID = $row['id'];
                  $movieName = $row['nombre'];
                  $description = $row['sinopsis'];
                  $imageFilename = $row['imagen_nombre'];

                  // Generate HTML code for each movie card dynamically
                  ?>
                  <!-- Película -->
                  <div class="box">
                      <div class="card">
                          <a href="sinopsis.php?id=<?php echo $movieID; ?>">
                              <img src="src/<?php echo $imageFilename; ?>" alt="<?php echo $movieName; ?>">
                              <div class="text"><?php echo $movieName; ?></div>
                          </a>
                      </div>
                  </div>
                  <?php
              }
          } else {
              echo "No movies found.";
          }

          mysqli_close($conn);
          ?>
      </div>


    </div>

    <?php include 'inicio_sesion.php';?>

    

</body>

</html>

<!DOCTYPE html>
<html>

<script src="js/script.js"></script>

<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <!-- Barra Superior -->
    <header class="header">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
        <div class="left-icon">
          <!-- Icono izquierdo -->
          <img src="src/icon_movie.png" height="45" alt="Menú Principal">
        </div>
        <div class="right-icon">
          <!-- Icono derecho -->
          <img src="src/icon_user.png" height="45" alt="Perfil">
        </div>
    </header>
    
    <br>

    <!-- Barra lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- div class="container" -->
            <div class="menuBox">
                <a href="index.php">Inicio</a>
            </div>
            <div class="menuBox">
                <a href="#">Géneros</a>
            </div>
            <div class="menuBox">
                <a href="#">Búsqueda</a>
            </div>
            <div class="menuBox">
                <a href="#">Perfil</a>
            </div>
        <!-- /div -->
    </div>
    
    <br>
    
    <div id="main" class="main">

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
                    $movieName = $row['nombre'];
                    $description = $row['sinopsis'];
                    $imageFilename = $row['imagen_nombre'];

                    // Generate HTML code for each movie card dynamically
                    ?>
                    <!-- Película -->
                    <div class="box">
                        <div class="card">
                            <img src="src/<?php echo $imageFilename; ?>" alt="<?php echo $movieName; ?>">
                            <div class="text"><?php echo $movieName; ?></div>
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

    <!-- Contenodr del popup-->
    <div class="popup" id="myPopup">
        <div class="popup-content">
          <span class="close" onclick="closePopup()">&#10006;</span>
          <h3>Inicio de Sesión</h3>
          <form action="/login" method="post">
            <label for="username">Usuario</label><br>
            <input type="text" id="username" class="input" required><br><br>
            <label for="password">Contraseña</label><br>
            <input type="password" id="password" class="input" required><br><br>
          <button type="submit" class="button">Ingresar</button>
        </form>

        </div>
      </div>

</body>

</html>
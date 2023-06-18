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
          <a href="index.php">
            <img src="src/icon_movie.png" height="45" alt="Menú Principal">
          </a>
        </div>
        <p id="bienvenida">Bienvenid@ Desconocid@</p>
        <?php include 'popup.php';?>
        <div class="right-icon">
          <!-- Icono derecho -->
          <img src="src/icon_user.png" height="45"  onclick="openPopup()" alt="Perfil" style="cursor: pointer;">

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
                <a href="usuario.php">Perfil</a>
            </div>
        <!-- /div -->
    </div>
    
    <br>
    
    <div id="main" class="main">
        <!-- Barra de búsqueda -->
        <form action="/busqueda.php" method="POST">
                <div class="search-bar">
                <input type="text" id="search" class="input" name="search" placeholder="Buscar...">
                <input type="submit" value="Buscar" class="button">
            </div>
        </form>

        <br>
        <!-- Contenedor de películas -->
        <div class="container">

            <?php
            if($_POST){
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
                //$sql = "SELECT * FROM peliculas WHERE nombre LEVENSHTEIN('" . $_POST['search'] . "', nombre) < 3";
                $sql = "SELECT * FROM peliculas WHERE nombre LIKE '%" . $_POST['search'] . "%'";
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
            }
            ?>
        </div>


    </div>

    <!-- Contenodr del popup-->
    <div class="popup" id="myPopup">
        <div class="popup-content">
          <span class="close" onclick="closePopup()">&#10006;</span>
          <h3>Inicio de Sesión</h3>
          <form action="#" method="POST" >
            <label for="email">Usuario</label><br>
            <input type="text" id="email" class="input" name="email" required><br><br>
            <label for="password">Contraseña</label><br>
            <input type="password" id="password" class="input" name="password" required><br><br>
          <button type="submit" class="button">Ingresar</button>
        </form>

        </div>
      </div>

</body>

</html>

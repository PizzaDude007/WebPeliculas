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
          <img src="src/icon_user.png" height="45"  onclick="openPopup('inicio')" alt="Perfil" style="cursor: pointer;">

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
                <a href="busqueda.php">Búsqueda</a>
            </div>
            <div class="menuBox">
                <a href="usuario.php">Perfil</a>
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

    <!-- Contenedor del popup Inicio de Sesion-->
    <div class="popup" id="inicio">
        <div class="popup-content">
          <span class="close" onclick="closePopup('inicio')">&#10006;</span>
          <h3>Inicio de Sesión</h3>
          <form action="#" method="POST" >
            <label>Usuario</label><br>
            <input type="text" id="email" class="input" name="email" required><br><br>
            <label>Contraseña</label><br>
            <input type="password" id="password" class="input" name="password" required><br><br>
          <button type="submit" class="button">Ingresar</button>
        </form>
        <br>
        <u style="cursor: pointer;" id="newuser" onclick="newUser()">Crear Nuevo Usuario</u>
        </div>
      </div>

    <!-- Contenedor del popup Creacion de Usuario-->
    <div class="popup" id="nuevo">
        <div class="popup-content">
          <span class="close" onclick="closePopup('nuevo')">&#10006;</span>
          <h3>Nuevo Usuario</h3>
          <form action="#" method="POST" >
            <label>Nombre</label><br>
            <input type="text" id="nombre" class="input" name="nombre" required><br><br>
            <label>Apellidos</label><br>
            <input type="text" id="apellidos" class="input" name="apellidos" required><br><br>
            <label>Correo Electrónico</label><br>
            <input type="email" id="correo" class="input" name="correo" required><br><br>
            <label>Contraseña</label><br>
            <input type="password" id="contra" class="input" name="contra" required><br><br>
          <button type="submit" class="button">Registrar</button>
        </form>
        </div>
      </div>

</body>

</html>

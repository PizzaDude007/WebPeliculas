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
                <a href="busqueda.php">Búsqueda</a>
            </div>
            <div class="menuBox">
                <a href="usuario.php">Perfil</a>
            </div>
        <!-- /div -->
    </div>
    
    <br>
    
    <div id="main" class="main">
        <?php $movieDir = $_GET['dir']; ?>
        <!-- Mostrar video en tarjeta -->
        <div class="iframe-container">
            <iframe width="100%" height="100%" src="<?php echo $movieDir; ?>" frameborder="0" allowfullscreen>Video</iframe>
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

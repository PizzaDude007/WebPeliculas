<html>
    <!-- Barra Superior -->
    <header class="header">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
        <p>Creado por Osvaldo Ibañez y Pieter van der Werff</p>
        <div class="left-icon">
          <!-- Icono izquierdo -->
          <a href="index.php">
            <img class="invert-image" src="src/icon_movie.png" height="45" alt="Menú Principal">
          </a>
        </div>
        <p id="bienvenida">Invitado</p>
        <?php include 'popup.php';?>
        <div class="right-icon">
          <!-- Icono derecho -->
          <?php if (isset($_COOKIE['sessionID'])) {
          ?>
            <a href="usuario.php">
              <img class="invert-image" src="src/icon_user.png" height="45" alt="Perfil" style="cursor: pointer;">
            </a>
            <?php
          } else {
          ?>
            <img class="invert-image" src="src/icon_user.png" height="45"  onclick="openPopup('inicio')" alt="Perfil" style="cursor: pointer;">
            <?php
          } 
          ?>
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
                <a href="busqueda.php">Búsqueda</a>
            </div>
            <div class="menuBox">
            <?php if (isset($_COOKIE['sessionID'])) {
            ?>
                <a href="usuario.php">Perfil</a>
                <?php
            } else {
            ?>
                <a  onclick="openPopup('inicio')">Perfil</a>
                <?php
            } 
            ?>
            </div>
        <!-- /div -->
    </div>
    
    <br>
</html>
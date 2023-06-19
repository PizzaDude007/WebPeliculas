<!DOCTYPE html>
<html>

<script src="js/script.js"></script>

<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="no-scroll">
    <?php include 'header.php';?>
    
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

    <?php include 'inicio_sesion.php';?>

</body>

</html>

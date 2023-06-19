<!DOCTYPE html>
<html>

<script src="js/script.js"></script>
<script>


</script>
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'header.php';?>
    
    <div id="main" class="main">
        <br>
        <!-- Perfil de usuario -->
        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="box" style="text-align: center">
                        <div class="card">
                            <img src="src/icon_user.png" alt="Perfil" style="width: 240px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="box">
                        <div class="card" style="text-align: center">
                            <h2>Bienvenido de nuevo</h2>
                        </div>
                    </div>
                </div>
                <br>
                <div class="column">
                    <div class="box">
                        <div class="card">
                            <p>Nombre: <?php echo $nombre; ?></p>
                            <p>Correo: <?php echo $correo; ?></p>
                            <p>Contraseña: <?php echo $contrasena; ?></p>
                            <p style="text-align: center">
                            <form action="/usuario.php" method="POST">
                                <div class="search-bar">
                                <button class="button" id="cerrarSesion" name="cerrarSesion" type="submit">Cerrar sesión</button>
                                </div>
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
         if($_POST){
            $host = "localhost";
            $username = "root";
            $password = "negocios123";
            $database = "Eq8Peliculas";
            $session_id = $_COOKIE['sessionID'];
                                        
            $conn = mysqli_connect($host, $username, $password, $database);
                                        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
    
            $sql = "DELETE FROM sessions WHERE session_id = '$session_id'";
            $result = mysqli_query($conn, $sql);
    
            // Eliminar cookie
            setcookie('sessionID', '', time() - 3600, '/');

            header("Location: index.php");
            exit();
        }
        ?>

       <?php include 'inicio_sesion.php';?>


</body>

</html>

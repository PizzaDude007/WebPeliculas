<!DOCTYPE html>
<html>

<script src="js/script.js"></script>

<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/busqueda.css">
</head>
<body>
    <?php include 'header.php';?>

    <!-- Barra lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- div class="container" -->
            <div class="menuBox">
                <a href="index.php">Inicio</a>
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
        <div class="box" style="text-align: center">
            <form action="/busqueda.php" method="POST">
                    <div class="search-bar">
                    <input type="text" id="search" class="input" name="search" placeholder="Buscar...">
                    <button type="submit" value="Buscar" class="busqueda">
                    <img src="src/search.png" width="10px" alt="" >
                    </button>
                </div>
            </form>
        </div>

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
                                <img src="src/<?php echo $imageFilename; ?>" alt="<?php echo $movieName; ?>"><br><br>
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
            }
            ?>
        </div>


    </div>

    <?php include 'inicio_sesion.php';?>

</body>

</html>

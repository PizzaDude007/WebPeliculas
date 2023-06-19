<!DOCTYPE html>
<html>

<script src="js/script.js"></script>

<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/sinopsis.css">
</head>
<body>
    <?php include 'header.php';?>
    
    <div id="main" class="main">

        <?php
        // Your database connection code
        $host = "localhost";
        $username = "root";
        $password = "negocios123";
        $database = "Eq8Peliculas";

        $movieID = $_GET['id'];

        $conn = mysqli_connect($host, $username, $password, $database);

        // Query the "peliculas" table to retrieve the movie data
        $sql = "SELECT * FROM peliculas WHERE id = '$movieID'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $movieName = $row['nombre'];
                $description = $row['sinopsis'];
                $imageFilename = $row['imagen_nombre'];
                $movieDir = $row['directorio_pelicula'];

                // Generate HTML code for each movie card dynamically
                ?>
                <!-- Película -->
                <div class="grid-container">
                    <div class="tarjeta">
                        <div class="tarjeta-image">
                            <!-- Movie Image and Name -->
                            <img src="src/<?php echo $imageFilename; ?>" alt="<?php echo $movieName; ?>">
                            <h2><?php echo $movieName; ?></h2>
                        </div>
                    </div>

                    <div class="tarjeta">
                        <div class="tarjeta-dropdown">
                            <!-- Language and Subtitles Dropdown Menus -->
                            <label for="language">Idioma:</label>
                            <select id="language">
                                <option value="english">English</option>
                                <option value="spanish">Spanish</option>
                            <!-- Add more options as needed -->
                            </select>
                            <label for="subtitles">Subtítulos:</label>
                            <select id="subtitles">
                                <option value="none">None</option>
                                <option value="english">English</option>
                                <option value="spanish">Spanish</option>
                            <!-- Add more options as needed -->
                            </select>
                            <a href="pelicula.php?dir=<?php echo $movieDir; ?>">
                            <!--a href="< php echo $movieDir; ?>"-->
                                <button class="button">Ver película</button>
                            </a>
                        </div>
                    </div>
                    
                    <div class="tarjeta-synopsis">
                        <div class="tarjeta">
                            <!-- Movie Synopsis -->
                            <h2>Sinopsis</h2>
                            <?php echo $description; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No se encontró la película.";
        }

        mysqli_close($conn);
        ?>


    </div>

    <?php include 'inicio_sesion.php';?>

</body>

</html>

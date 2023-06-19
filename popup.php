<?php
function generateSessionID($length = 32) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $sessionID = '';

    $charLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $sessionID .= $characters[rand(0, $charLength - 1)];
    }

    return $sessionID;
}

// Revise si el usuario ya inició sesión
if (isset($_COOKIE['sessionID'])) {
    // Si ya inició sesión, cargar datos de la sesión
    $host = "localhost";
    $username = "root";
    $password = "negocios123";
    $database = "Eq8Peliculas";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM users WHERE session_ID = '".$_COOKIE['sessionID']."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nombre = $row['nombre']." ".$row['apellido'];
            $correo = $row['email'];
            $contrasena = $row['password'];
            $id = $row['id'];
            $genero = $row['genero'];
?>
            <script type="text/javascript">
                var nombre = "<?php echo $nombre; ?>";
                var genero = "<?php echo $genero; ?>";
                if(genero == 'F'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenida " + nombre ;
                }
                if(genero == 'M'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenido " + nombre ;
                }
                if(genero == 'O'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenid@ " + nombre ;
                }
            </script>
        
<?php
        }
    }
}

if($_POST['email']){
    $host = "localhost";
    $username = "root";
    $password = "negocios123";
    $database = "Eq8Peliculas";
    $sessionID = generateSessionID();
    $expiration = time() + (86400 * 30); // 30 días

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nombre = $row['nombre']." ".$row['apellido'];
            $id = $row['id'];
            $genero = $row['genero'];
            $sql = "INSERT INTO sessions (session_ID, user_ID, expiration) VALUES ('".$sessionID."', '".$id."', '".$expiration."')";
            $result = mysqli_query($conn, $sql);
            $sql = "UPDATE users SET session_ID = '".$sessionID."' WHERE id = '".$id."'";
            $result = mysqli_query($conn, $sql);
            setcookie("sessionID", $sessionID, $expiration, "/");
?>
            <script type="text/javascript">
                var nombre = "<?php echo $nombre; ?>";
                var genero = "<?php echo $genero; ?>";
                if(genero == 'F'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenida " + nombre ;
                    window.alert("Bienvenida "+nombre);
                }
                if(genero == 'M'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenido " + nombre ;
                    window.alert("Bienvenido "+nombre);
                }
                if(genero == 'O'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenid@ " + nombre ;
                    window.alert("Bienvenid@ "+nombre);
                }
            </script>

<?php
        header('Location: usuario.php');
        exit();
        }
    }else{
        if (!isset($_COOKIE['sessionID'])) {
?>
    <script>window.alert("Usuario o Contraseña Incorrecta");</script>
<?php
        }
    }                   
}

if($_POST['nombre']){
    $host = "localhost";
    $username = "root";
    $password = "negocios123";
    $database = "Eq8Peliculas";
    $sessionID = generateSessionID();
    $expiration = time() + (86400 * 30); // 30 días

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo $_POST['apellidos'];
    $sql = "INSERT INTO users VALUES (NULL, '".$_POST['correo']."', '".$_POST['contra']."', '".$_POST['nombre']."', '".$_POST['apellidos']."','".$_POST['genero']."',NULL)"; 
    $result = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM users WHERE email = '".$_POST['correo']."' AND password = '".$_POST['contra']."'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre = $row['nombre']." ".$row['apellido'];
        $id = $row['id'];
        $genero = $row['genero'];
        $sql = "INSERT INTO sessions (session_ID, user_ID, expiration) VALUES ('".$sessionID."', '".$id."', '".$expiration."')";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE users SET session_ID = '".$sessionID."' WHERE id = '".$id."'";
        $result = mysqli_query($conn, $sql);
        setcookie("sessionID", $sessionID, $expiration, "/");
?>
            <script type="text/javascript">
                var nombre = "<?php echo $nombre; ?>";
                var genero = "<?php echo $genero; ?>";
                if(genero == 'F'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenida " + nombre ;
                    window.alert("Bienvenida "+nombre);
                }
                if(genero == 'M'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenido " + nombre ;
                    window.alert("Bienvenido "+nombre);
                }
                if(genero == 'O'){
                    document.getElementById("bienvenida").innerHTML = "Bienvenid@ " + nombre ;
                    window.alert("Bienvenid@ "+nombre);
                }
            </script>

<?php
header('Location: usuario.php');
exit();

}
                     
}


?>
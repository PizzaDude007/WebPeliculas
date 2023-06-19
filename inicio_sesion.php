<html>
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
            <input type="text" id="apellidos" class="input" name="apellidos"><br><br>
            <label>Correo Electrónico</label><br>
            <input type="email" id="correo" class="input" name="correo" required><br><br>
            <label>Elija su sexo</label><br>
            <input type="radio" id="masculino" name="genero" value="M" required>Masculino
            <input type="radio" id="femenino" name="genero" value="F" required>Femenino<br>
            <input type="radio" id="otro" name="genero" value="O" required>Otro<br><br>
            <label>Contraseña</label><br>
            <input type="password" id="contra" class="input" name="contra" required><br><br>
            <input type="checkbox" id="terminos" name="terminos" required>Acepto los terminos y condiciones <br><br>

          <button type="submit" class="button">Registrar</button>
        </form>
        </div>
      </div>
</html>
<div class="d1">
<form class="form" action="/proyecto/?C=controladorlogin&M=registrar" method="POST" id="Registro">
    <h2>REGISTRO</h2><br><br>
      <center>
      <img src="img/AgregarUsuario.png" alt="Imagen"  class="img23">
      </center><br><br>

      <label for="Nombre">Nombre:</label>
      <input type="text" id="Nombre" name="txtNombre"  placeholder="Nombre del cliente"  maxlength="30" required><br><br>

      <label for="Apaterno">Apellido Paterno:</label>
      <input type="text" id="Apaterno" name="txtApaterno" placeholder="Apellido paterno"  maxlength="50" required><br><br>

      <label for="Amaterno">Apellido Materno:</label>
      <input type="text" id="Amaterno" name="txtAmaterno" placeholder="Apellido materno" pattern="[a-zA-Z]+" maxlength="50"required><br><br>

      <label for="Telefono">Telefono:</label>
      <input type="number" id="Telefono" name="txtTelefono"  placeholder="Telefono"  minlength="10" maxlength="10" required><br><br>
    
      <label for="Colonia">Colonia:</label>
      <select name="txtColonia" id="Colonia" required>
            <option value="">Selecciona Tu Colonia</option>
            <?php while($filas=$consultacolonia->fetch_object()){ ?>
                <option value="<?php echo $filas->idcolonia; ?>"><?php echo $filas->colonia; ?></option>
            <?php } ?>
        </select><br><br>

      <label for="txtCalle">Calle y No.Casa:</label>
      <input type="text" id="Calle" name="txtCalle" required><br><br>

      <label for="CorreoE">Correo Electronico:</label>
      <input type="email" id="CorreoE" name="txtCorreoE" required><br><br>

      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="txtusuario" placeholder="Usuario" pattern="[a-zA-Z-0-9]+" maxlength="20" required><br><br>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="txtpassword" placeholder="Cotraseña" pattern="[a-zA-Z-0-9]" minlength="8" maxlength="8" required><br><br>

      <label for="password2">Confirma Contraseña:</label>
      <input type="password" id="password2" name="txtpassword2" placeholder="Cotraseña" pattern="[a-zA-Z-0-9]" minlength="8" maxlength="8" required><br><br>
   
      <button type="submit" onclick="Validar()">Registrar</button>

  </form>
  </div>
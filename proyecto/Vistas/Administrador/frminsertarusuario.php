<div class="d1">
<form class="form" action="/proyecto/?C=controladorlogin&M=CrearUsuario" method="POST" id="Registro">
    <h2>Alta De Empleados</h2><br><br>
      <center>
      <img src="img/AgregarUsuario.png" alt="Imagen" class="img23">
      </center><br><br>

      <label for="Nombre">Nombre:</label>
      <input type="text" id="Nombre" name="txtNombre" placeholder="Nombre del empleado"  maxlength="30" required><br><br>

      <label for="Apaterno">Apellido Paterno:</label>
      <input type="text" id="Apaterno" name="txtApaterno" placeholder="Apellido paterno" pattern="[a-zA-Z]+" maxlength="50" required><br><br>

      <label for="Amaterno">Apellido Materno:</label>
      <input type="text" id="Amaterno" name="txtAmaterno" placeholder="Apellido materno" pattern="[a-zA-Z]+" maxlength="50" required><br><br>

      <label for="Curp">Curp:</label>
      <input type="text" id="Curp" name="txtCurp" pattern="^[A-Z]{4}\d{6}[H,M][A-Z]{5}[A-Z0-9]{2}$" minlength="18" maxlength="18" required><br><br>

      <label for="Telefono">Telefono:</label>
      <input type="number" id="Telefono" name="txtTelefono" pattern="[0-9]+" minlength="10" maxlength="10" required><br><br>

      <label for="Colonia">Colonia:</label>
      <select name="txtColonia" id="Colonia" required>
            <option value="">Selecciona Tu Colonia</option>
            <?php while($filas=$consultacolonia->fetch_object()){ ?>
                <option value="<?php echo $filas->idcolonia; ?>"><?php echo $filas->colonia; ?></option>
            <?php } ?>
        </select><br><br>

      <label for="Calle">Calle y NO.Casa:</label>
      <input type="text" id="Calle" name="txtCalle" required>
      <br><br>

      <label for="CorreoE">Correo Electronico:</label>
      <input type="email" id="CorreoE" name="txtCorreoE" required><br><br>

      <label for="selectTipoPuesto">Tipo De Empleado:</label>
      <select name="selectTipoPuesto" required>
          <option value="">Selecciona El Tipo de Empleado</option>
          <?php while($filas=$consultaPuesto->fetch_object()){ ?>
                <option value="<?php echo $filas->idpuesto; ?>"><?php echo $filas->Puesto; ?></option>
            <?php } ?>
      </select><br><br>
   
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="txtusuario" placeholder="Usuario" pattern="[a-zA-Z-0-9]+" maxlength="20" required><br><br>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="txtpassword" placeholder="Cotraseña" pattern="[a-zA-Z-0-9]" minlength="8" maxlength="8" required><br><br>

      <label for="password2">Confirma Contraseña:</label>
      <input type="password" id="password2" name="txtpassword2" placeholder="Cotraseña" pattern="[a-zA-Z-0-9]" minlength="8" maxlength="8" required><br><br>

      <label for="selectTipoUsuario">Tipo Usuario:</label>
      <select name="selectTipoUsuario" required>
          <option value="">Selecciona El Tipo de Usuario</option>
          <option value="Administrador">Normal</option>
          <option value="Administrador">Cajero</option>
          <option value="Administrador">Administrador</option>
      </select><br><br>
 
      <button type="submit" onclick="ValidarEmpleado()">Registrar</button>

  </form>
  </div>
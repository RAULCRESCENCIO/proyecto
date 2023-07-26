<center>
<h2>Reporte De Los Empleado</h2>
<div class="centro2">
  <table border="1">
    <thead>
      <tr>
      <th> ID </th>
        <th>Nombre Completo</th>
        <th>Curp</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Puesto</th>
        <th>Correo Electronico</th>
        <th>Usuario</th>
        <th>Edicción</th>
      </tr>
    </thead>
    <tbody>
    
      <?php
            while ($prod= $ConsultaE->fetch_object()) {
              echo '<form class="form" action="/proyecto/?C=controladorlogin&M=ConsultaEmpleado2" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtCodigo" value="'.$prod->idempleado.'" readonly style="width: 80px;background-color:  #e1ab8a; border: 1px solid #a7673f;" ></td>';
                echo '<td> <input type="text" name="txtNombre" value="'.$prod->E_nombre.' '.$prod->E_apaterno.' '.$prod->E_amaterno.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtCurp" value="'.$prod->E_curp.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtTel" value="'.$prod->E_telefono.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtDireccion" value="'.$prod->colonia.','.$prod->calle_No_casa.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtPuesto" value="'.$prod->Puesto.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtCorreo" value="'.$prod->E_correo.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtUsuario" value="'.$prod->E_usuario.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td width=>';
                echo '<center>';
                echo '  <button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button" onclick="return eliminarEmpleado()" >Eliminar</button> <br><br>';
                echo '</td>';
                echo '</tr>';
                
                echo '</form>';
            }
      
      ?>
    
    </tbody>
  </table>
  </div>
  </center>
<center>
<h2>Reporte De Los Clientes</h2><br><br>
<div>
  <table>
    <thead>
      <tr>
        <th>Nombre Completo</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Direccion</th>
        <th>Usuario</th>
      </tr>
    </thead>
    <tbody>
    
      <?php
            while ($prod= $ConsultaC->fetch_object()) {
              echo '<form class="form" action="/proyecto/?C=controladorlogin&M=ConsultaCliente2" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtusuario" value="'.$prod->cli_nombre.' '.$prod->cli_apaterno.' '.$prod->cli_amaterno.'" readonly></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$prod->cli_telefono.'" readonly></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$prod->cli_correo.'" readonly></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$prod->colonia.','.$prod->calle_No_casa.'" readonly></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$prod->cli_usuario.'" readonly></td>';
                echo '<td width=250>';
                echo '&nbsp;';
                echo '</td>';
                echo '</tr>';
                
                echo '</form>';
            }
      
      ?>
    
    </tbody>
  </table>
  </div>
  </center>
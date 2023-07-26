
    <h2>CONSULTA USUARIOS</h2><br><br>
  <table>
    <thead>
      <tr>
        <th>Código Usuario</th>
        <th>Usuario</th>
        <th>Tipo De Usuario</th>
      </tr>
    </thead>
    <tbody>
    
      <?php
            while ($prod= $Consulta->fetch_object()) {
              echo '<form class="form" action="/proyecto/?C=controladorlogin&M=ConsultaUsuario" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtidusuario" value="'.$prod->idusuario.'" readonly> </td>';
                echo '<td> <input type="text" name="txtusuario" value="'.$prod->usuario.'" readonly></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$prod->Tipo.'" readonly></td>';
                echo '<td width=250>';
                echo '&nbsp;';
                echo '</td>';
                echo '</tr>';
                
                echo '</form>';
            }
      
      ?>
    
    </tbody>
  </table>
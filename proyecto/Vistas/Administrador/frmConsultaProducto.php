
<h2>CONSULTA PRODUCTOS</h2>
<div class="centro2">
  <center>
  <table border="1">
    <thead>
      <tr>
      <th>Codigo</th>
        <th>Nombre del Producto</th>
        <th>Tipo de Harina</th>
        <th>Precio Publico</th>
        <th>Existencia</th>
        <th>Costo</th>
        <th>Detalles Producto</th>
        <th>Imagen</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
      <?php
            while ($prod= $Consultaproductos->fetch_object()) {
              $imagenData=$prod->imagen;
              $imagenSrc= 'data:image/*;base64,' . base64_encode($imagenData);
                echo '<form class="form" action="/proyecto/?C=controladorproductos&M=ConsultaProducto" method="POST" enctype="multipart/form-data" id="Registro3" "> ';
                echo '<tr>';
                echo '<td> <input type="text" name="txtcodigo" value="'.$prod->idtp.'" readonly style="width: 80px;background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtnombre" value="'.$prod->P_nombre.'" readonly style="background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtharina" value="'.$prod->TP_tipodeHarina.'" readonly style="width: 120px;background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtprecio" value="'.$prod->precio.'" style="width: 120px;background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtstock" value="'.$prod->stock.'" style="width: 80px;background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtcosto" value="'.$prod->costo.'" style="width: 80px;background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td> <input type="text" name="txtdetalle" value="'.$prod->detalles.'" style="width: 140px; background-color:  #e1ab8a; border: 1px solid #a7673f;"></td>';
                echo '<td width=350>';
                echo '<center>';
                echo '<img src=" '.$imagenSrc.' " alt="Imagen" style="width: 70px; height: 50px; margin-top: 3%;" > ';
                echo '<br><br>';
                echo '&nbsp;';
                echo '<input type="file" name="txtimagen" id="imagen" accept="image/*" style="background-color:  #e1ab8a;">';
                echo '</center>';
                echo '</td>';
                echo '<td width=350>';
                echo '<center>';
                echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button" onclick="return alertaActualizar()" >Actualizar</button>';
                echo '&nbsp;';
                echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button" onclick="return alertaeliminar()" >Eliminar</button>';
                echo '</center>';
                echo '</td>';
                echo '</tr>';
                echo '</form>';
            }
      
      ?>
    
    </tbody>
  </table>
  </center>
  </div>
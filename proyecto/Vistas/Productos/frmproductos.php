<div class="d1">
<form class="form" action="/proyecto/?C=controladorproductos&M=insertarproductos" method="POST" enctype="multipart/form-data">
    <h2>Altas De Productos</h2><br><br>
      <label for="Nombre">Nombre Del Pan:</label><br>
      <select name="txtNombre" id="Nombre" required>
            <option value="">Selecciona El Nombre del Pan</option>
            <?php while($filas=$nombrep->fetch_object()){ ?>
                <option value="<?php echo $filas->idproducto; ?>"><?php echo $filas->P_nombre; ?></option>
            <?php } ?>
        </select><br><br>
        <label for="TipoArina">Tipo De Harina:</label>
      <select name="txtTipoArina" id="TipoArina" required>
            <option value="">Selecciona El Nombre del Pan</option>
            <?php while($filas=$arinaP->fetch_object()){ ?>
                <option value="<?php echo $filas->idTipoProducto; ?>"><?php echo $filas->TP_tipodeHarina; ?></option>
            <?php } ?>
        </select><br><br>
      <label for="precio">Precio Al Publico:</label>
      <input type="text" id="precio" name="txtprecio" required><br><br>
      <label for="cantidad">Cantidad De producto:</label>
      <input type="text" id="cantidad" name="txtcantidad" required><br><br>
      <label for="costo">Costo Produccion:</label>
      <input type="text" id="costo" name="txtcosto" required><br><br>
      <label for="Detalles">Detalles Del Producto:</label>
      <input type="text" name="txtDetalles" id="Detalles"><br><br>
      <label for="categoria">Tipo De Categoria:</label>
      <select name="txtcategoria" id="categoria" required>
            <option value="">Selecciona La Categoria</option>
            <?php while($filas=$categoriacon->fetch_object()){ ?>
                <option value="<?php echo $filas->idcategoria; ?>"><?php echo $filas->nombrecategoria; ?></option>
            <?php } ?>
        </select><br><br>
      <label for="imagen">Imagen Del Producto:</label>
      <input type="file" name="txtimagen" id="imagen" accept="image/*" required><br><br>
      <button type="submit">Guardar</button>
</form>
</div><br></br>
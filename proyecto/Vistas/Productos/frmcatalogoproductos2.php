    <label for="Categorias">Filtrar Por</label>
      <select name="txtCategorias" id="Categorias" onchange="cargarpan()">
            <option value="0">Todos Los Panes</option>
            <?php while($filas=$consultacategorias->fetch_object()){ ?>
                <option value="<?php echo $filas->idcategoria; ?>"><?php echo $filas->nombrecategoria; ?></option>
            <?php } ?>
        </select><br><br>

<div class="container2" id="container2">


<?php
              while ($row= $Consultacatalogo->fetch_assoc()) {
              ?>
              <div class="card2">
              <img src="data:image/*;base64, <?php echo base64_encode($row['imagen']); ?>" ><br>
              <h4><?php echo $row['P_nombre']; ?></h4><br>
              <h5>Tipo De Harina: <?php echo $row['TP_tipodeHarina']; ?></h5><br>
              <h5>Precio: <?php echo $row['precio']; ?> pesos </h5><br>
              <p> <?php echo $row['detalles']; ?></p><br>
              <button>Comprar</button>
              <br><br>
              </div>
              <?php
              }
?>
</div>
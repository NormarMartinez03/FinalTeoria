<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_pago.php") ?>
<?php include_once ("../../models/Pago.php") ?>
<?php include_once ("../../controller/Controller_prestamo.php") ?>
<?php include_once ("../../models/Prestamo.php") ?>

<?php 
    $controller_prestamo = new Controller_prestamo();
    $controller_pago = new Controller_pago();
    
    if(isset($_GET["cod"]))
    {
      $pago_d = new Pago();
      $prestamo_d = new Prestamo();

      $id_pago  = $_GET["cod"];
      $pago_d->parseArray($controller_pago->loadPago($id_pago));
      
      $id = $pago_d->id_prestamo;
      $prestamo_d->parseArray($controller_prestamo->loadPrestamo($id));
    }

    if(isset($_POST["id_pago"])){
      $pago = $_POST;
      $controller_pago->update($pago);
      header("Location: ./index.php");
    }
?>
<script>
  const links_menu = document.querySelectorAll(".links_menu");
  const pagos = document.querySelector(".pagos");

  links_menu.forEach(links => {
    links.classList.remove("selected");
  })
  pagos.classList.add("selected");
</script>

<div class="formulario-prestamo">
  <h2>Información Prestamo:</h2>
  <form method="get">
    <div class="campo">
      <label for="monto">Monto:</label>
      <input type="text" id="monto" name="monto" disabled required value="<?= $prestamo_d->monto_prestamo ?>">
    </div>
    <div class="campo">
      <label for="tasa">Tasa:</label>
      <input type="text" id="tasa" name="tasa" disabled required value="<?= $prestamo_d->tasa_interes ?>">
    </div>

    <div class="campo">
      <label for="id_prestamo">Id Prestamo:</label>
      <input type="text" id="id_prestamo" name="id_prestamo" required value="<?= $prestamo_d->id ?>">
    </div>
    <button type="submit">Buscar Usuario</button>
  </form>

  <h2>Información Pago:</h2>
  <form method="post">
    <input type="hidden" name="cod_prestamo" value="<?= $prestamo_d->id ?>">
    <input type="hidden" name="id_pago" value="<?= $pago_d->id ?>">
    <div class="campo">
      <label for="monto_pago">Monto a pagar:</label>
      <input type="text" id="monto_pago" name="monto_pago" required value="<?= $pago_d->monto_pago ?>">
    </div>
    <div class="campo">
      <label for="metodo_pago">Metodo:</label>
      <select id="metodo_pago" name="metodo_pago" required>
        <?php
            $metodos = ['contado', 'tarjeta de credito', 'tarjeta de debito'];
            foreach ($metodos as $metodo) {
                $selected = ($metodo == $pago_d->metodo_pago) ? "selected" : "";
                print "<option value='".$metodo."' ".$selected." >".$metodo."</option>";
            }
        ?>
      </select>
    </div>

    <div>
      <button type="submit">Actualizar</button>
      <a href="./index.php" class="btn-3 special">Cancelar</a>
    </div>
  </form>
</div>

<?php include ("../../template/footer.php") ?>
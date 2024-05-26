<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_pago.php") ?>
<?php include_once ("../../models/Pago.php") ?>
<?php include_once ("../../controller/Controller_prestamo.php") ?>
<?php include_once ("../../models/Prestamo.php") ?>

<?php
$prestamo_d = new Prestamo();
$pago = new Pago();
$controller_prestamo = new Controller_prestamo();
$controller_pago = new Controller_pago();


if (isset($_GET["id_prestamo"])) {

  $id_prestamo = $_GET["id_prestamo"];
  $prestamo = $controller_prestamo->loadPrestamo($id_prestamo);
  if($prestamo != null) $prestamo_d->parseArray($prestamo);
  else print ("<span class='message'>Prestamo no econtrado</span>");
}

if (isset($_POST["cod_prestamo"])) {
  $pago_array = $_POST;
 /*  print_r($pago_array);exit; */
  $controller_pago->insert($pago_array);
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
    <div class="campo">
      <label for="monto_pago">Monto a pagar:</label>
      <input type="text" id="monto_pago" name="monto_pago" required>
    </div>
    <div class="campo">
      <label for="metodo_pago">Metodo:</label>
      <select id="metodo_pago" name="metodo_pago" required>
        <option value="contado">Contado</option>
        <option value="tarjeta de credito">Tarjeta de credito</option>
        <option value="tarjeta de debito">Tarjeta de debito</option>
      </select>
    </div>

    <div>
      <button type="submit">Registrar</button>
      <a href="./index.php" class="btn-3 special">Cancelar</a>
    </div>
  </form>
</div>

<?php include ("../../template/footer.php") ?>
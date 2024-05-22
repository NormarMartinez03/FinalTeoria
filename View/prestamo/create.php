<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_prestamo.php") ?>
<?php include_once ("../../controller/Controller_cliente.php") ?>
<?php include_once ("../../models/Cliente.php") ?>
<?php include_once ("../../models/Prestamo.php") ?>

<?php
$cliente_d = new Cliente();
$prestamo_d = new Prestamo();
$controller_prestamo = new Controller_prestamo();
$controller_cliente = new Controller_cliente();

if (isset($_GET["cedula_cliente"])) {

  $cedula = $_GET["cedula_cliente"];
  $cliente_d->parseArray($controller_cliente->loadClienteCedula($cedula));
}

if (isset($_POST["id_cliente"])) {
  $prestamo = $_POST;
  if($prestamo["estado_prestamo"] == 'aprobado'){
    print_r($prestamo_d->calcularAmortizacion($prestamo));
  }
 /*  exit; */
  /* print_r($prestamo); exit; */
  $controller_prestamo->insert($prestamo);
  header("Location: ./index.php");
}

?>

<script>
  const links_menu = document.querySelectorAll(".links_menu");
  const prestamo = document.querySelector(".prestamo");

  links_menu.forEach(links => {
    links.classList.remove("selected");
  })

  prestamo.classList.add("selected");
</script>

<div class="formulario-prestamo">
  <h2>Información Cliente:</h2>
  <form>
    <div class="campo">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" disabled required value="<?= $cliente_d->nombre ?>">
    </div>
    <div class="campo">
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" disabled required value="<?= $cliente_d->apellido ?>">
    </div>
    <div class="campo">
      <label for="cedula_cliente">Cédula:</label>
      <input type="text" id="cedula_cliente" name="cedula_cliente" required value="<?= $cliente_d->cedula ?>">
    </div>
    <button type="submit">Buscar Usuario</button>
  </form>
  <h2>Información Préstamo:</h2>
  <form method="post">
    <input type="hidden" name="id_cliente" value="<?= $cliente_d->id ?>">
    <div class="campo">
      <label for="monto_prestamo">Monto:</label>
      <input type="text" id="monto_prestamo" name="monto_prestamo" required>
    </div>
    <div class="campo">
      <label for="tasa_interes">Tasa:</label>
      <input type="text" id="tasa_interes" name="tasa_interes" required>
    </div>
    <div class="campo">
      <label for="fecha_inicio">Fecha Inicio:</label>
      <input type="date" id="fecha_inicio" name="fecha_inicio" required>
    </div>
    <div class="campo">
      <label for="plazo_mes">Plazo (meses):</label>
      <input type="number" id="plazo_mes" name="plazo_mes" required>
    </div>
    <div class="campo">
      <label for="estado_prestamo">Estado Préstamo:</label>
      <select id="estado_prestamo" name="estado_prestamo" required>
        <option value="pendiente">Pendiente</option>
        <option value="aprobado">Aprobado</option>
        <option value="rechazado">Rechazado</option>
      </select>
    </div>
    <div>
      <button type="submit">Registrar</button>
      <a href="./index.php" class="btn-3 special">Cancelar</a>
    </div>
  </form>
</div>

<?php include ("../../template/footer.php") ?>
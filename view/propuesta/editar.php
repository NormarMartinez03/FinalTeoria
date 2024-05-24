<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_prestamo.php") ?>
<?php include_once ("../../controller/Controller_cliente.php") ?>
<?php include_once ("../../models/Prestamo.php") ?>
<?php include_once ("../../models/Cliente.php") ?>

<?php 
    $controller_prestamo = new Controller_prestamo();
    $controller_cliente = new Controller_cliente();
    
    if(isset($_GET["cod"]))
    {
      $cliente_d = new Cliente();
      $prestamo_d = new Prestamo();

      $id_prestamo  = $_GET["cod"];
      $prestamo_d->parseArray($controller_prestamo->loadPrestamo($id_prestamo));
      
      $id = $prestamo_d->id_cliente;
      $cliente_d->parseArray($controller_cliente->loadCliente($id));
    }

    if(isset($_POST["id_cliente"])){
      $prestamo = $_POST;
      $controller_prestamo->update($prestamo);
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
      <input type="text" id="cedula_cliente" name="cedula_cliente" required value="<?= $cliente_d->cedula ?>" disabled>
    </div>
  </form>
  <h2>Información Préstamo:</h2>
  <form method="post">
    <input type="hidden" name="id_cliente" value=<?= $cliente_d->id ?>>
    <input type="hidden" name="id_prestamo" value=<?= $prestamo_d->id ?>>
    <div class="campo">
      <label for="monto_prestamo">Monto:</label>
      <input type="text" id="monto_prestamo" name="monto_prestamo" required value="<?= $prestamo_d->monto_prestamo ?>">
    </div>
    <div class="campo">
      <label for="tasa_interes">Tasa:</label>
      <input type="text" id="tasa_interes" name="tasa_interes" required value="<?= $prestamo_d->tasa_interes ?>">
    </div>
    <div class="campo">
      <label for="fecha_inicio">Fecha Inicio:</label>
      <input type="date" id="fecha_inicio" name="fecha_inicio" required value="<?= $prestamo_d->fecha_inicio ?>">
    </div>
    <div class="campo">
      <label for="plazo_mes">Plazo (meses):</label>
      <input type="number" id="plazo_mes" name="plazo_mes" required value="<?= $prestamo_d->plazo_mes ?>">
    </div>
    <div class="campo">
      <label for="estado_prestamo">Estado Préstamo:</label>
      <select id="estado_prestamo" name="estado_prestamo" required>
        <?php
          $estados = ['pendiente', 'aprobado', 'rechazado'];
          foreach ($estados as $estado) {
            $selected = ($estado == $prestamo_d->estado_prestamo) ? "selected" : "";
            print "<option value=".$estado." ".$selected." >".$estado."</option>";
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
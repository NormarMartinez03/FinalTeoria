<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_cliente.php") ?>
<?php include_once ("../../models/Cliente.php") ?>

<?php 
    $controller_cliente = new Controller_cliente();

    if(isset($_GET["cod"]))
    {
        $cliente_d = new Cliente();
        $id = $_GET["cod"];
        $cliente_d->parseArray($controller_cliente->loadCliente($id));

    }

    if(isset($_POST["cod_cliente"])){
        $cliente_ud = $_POST;
        $controller_cliente->update($cliente_ud);
        header("Location: ./index.php");
    }
?>

<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const cliente =document.querySelector(".cliente");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    cliente.classList.add("selected");
</script>

<div class="box-form">
<div class="form-container">
        <form action="" method="post">
            <h2>REGISTRAR NUEVO CLIENTE</h2>
            
            <div class="form-group">
                <div class="form-item">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required value="<?= $cliente_d->nombre ?>">
                </div>
                <div class="form-item">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required value="<?= $cliente_d->apellido ?>">
                </div>
            </div>

            <input type="hidden" name="cod_cliente" value="<?= $cliente_d->id ?>">
            
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required value="<?= $cliente_d->cedula ?>">
            
            <label for="direccion">Direccion:</label>
            <input type="text" id="direccion" name="direccion" required value="<?= $cliente_d->direccion ?>">
            
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required value="<?= $cliente_d->telefono ?>">

            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" required value="<?= $cliente_d->correo ?>">
            
            <div class="box-btn">
                <button type="submit">Actualizar</button>
                <a href="./index.php" class="btn-3">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include ("../../template/footer.php") ?>
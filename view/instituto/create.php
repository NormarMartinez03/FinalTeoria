<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_cliente.php") ?>

<?php 

    $controller_cliente = new Controller_cliente();

    if(isset($_GET["cedula"])){
        $controller_cliente->insert($_GET);
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
        <form action="" method="get">
            <h2>REGISTRAR NUEVO CLIENTE</h2>
            
            <div class="form-group">
                <div class="form-item">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-item">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
            </div>
            
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required>
            
            <label for="direccion">Direccion:</label>
            <input type="text" id="direccion" name="direccion" required>
            
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" required>
            
            <div class="box-btn">
                <button type="submit">Registrar</button>
                <a href="./index.php" class="btn-3">Cancelar</a>
            </div>
        </form>
    </div>
</div>


<?php include ("../../template/footer.php") ?>
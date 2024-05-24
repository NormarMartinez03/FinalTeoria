<?php include_once ("../../template/header.php") ?>
<?php include_once("../../controller/Controller_user.php") ?>

<?php 

    $controller_user = new Controller_user();

    if(isset($_GET["cedula"])){
        $controller_user->insert($_GET);
        header("Location: ./index.php");
    }
?>
<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const usuario =document.querySelector(".usuario");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    usuario.classList.add("selected");
</script>

<div class="box-form">
<div class="form-container">
        <form action="" method="get">
            <h2>REGISTRAR NUEVO USUARIO</h2>
            
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
            
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
            
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            
            <div class="box-btn">
                <button type="submit">Registrar</button>
                <a href="./index.php" class="btn-3">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include ("../../template/footer.php") ?>
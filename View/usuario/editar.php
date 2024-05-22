<?php include_once ("../../template/header.php") ?>
<?php include_once("../../controller/Controller_user.php") ?>
<?php include_once("../../models/Usuario.php") ?>

<?php 

    $controller_user = new Controller_user();

    if(isset($_GET["cod"]))
    {
        $user = new Usuario();
        $id = $_GET["cod"];
        $user->parseArray($controller_user->loadUser($id));
    }

    if(isset($_POST["cod_user"])){
        $user_ud = $_POST;
        $controller_user->update($user_ud);
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
        <form action="" method="post">
            <h2>EDITAR USUARIO</h2>
            
            <div class="form-group">
                <div class="form-item">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required value="<?= $user->nombre ?>">
                </div>
                <div class="form-item">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required value="<?= $user->apellido ?>">
                </div>
            </div>
            <input type="hidden" name="cod_user" value = <?=$id?> >
            
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required value="<?= $user->cedula ?>">
            
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required value="<?= $user->cargo ?>">
            
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required value="<?= $user->pass ?>">
            
            <div class="box-btn">
                <button type="submit">Actualizar</button>
                <a href="./index.php" class="btn-3">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>

<?php include ("../../template/footer.php") ?>
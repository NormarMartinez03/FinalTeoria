<?php include_once ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_user.php") ?>
<?php include_once ("../../models/Usuario.php") ?>

<?php
    $controller_user = new Controller_user();

    if(isset($_GET["cod_user"]))
    {
        $id = $_GET["cod_user"];

        $controller_user->delete($id);
    }
    
    $all_users = $controller_user->loadData();
    $cout_user = 1;
?>
<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const usuario =document.querySelector(".usuario");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    usuario.classList.add("selected");
</script>

<div class="container_table">
    <h2 class="title_table">DATO DE USUARIO</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVO USUARIO</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Cargo</th>
                <th>Password</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_users as $user){?>
            <?php $datauser = new Usuario(); $datauser->parseArray($user)?>
            <tr class = "<?= ($cout_user % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $datauser->id ?></td>
                <td><?= $datauser->getFullname() ?></td>
                <td><?= $datauser->cedula ?></td>
                <td><?= $datauser->cargo ?></td>
                <td><?= $datauser->pass ?></td>
                <td class="acciones-btn">
                    <a href="./index.php?cod_user=<?= $datauser->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $datauser->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $cout_user++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
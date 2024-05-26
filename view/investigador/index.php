<?php include_once ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_investigador.php") ?>
<?php include_once ("../../models/Investigador.php") ?>

<?php
    $control = new Controller_investigador();

    if(isset($_GET["cod_inv"]))
    {
        $id = $_GET["cod_inv"];

        $control->delete($id);
    }
    
    $all_inv = $control->loadData();
    $cout_inv = 1;
?>
<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const usuario =document.querySelector(".investigador");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    usuario.classList.add("selected");
</script>

<div class="container_table">
    <h2 class="title_table">LISTA DE INVESTIGADORES</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVO INVESTIGADOR</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>id_categoria</th>
                <th>id_instituto</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_inv as $inv){?>
            <?php $datainv = new Investigador(); $datainv->parseArray($inv)?>
            <tr class = "<?= ($cout_inv % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $datainv->id ?></td>
                <td><?= $datainv->nombre ?></td>
                <td><?= $datainv->codigo ?></td>
                <td><?= $datainv->telefono ?></td>
                <td><?= $datainv->email ?></td>
                <td><?= $datainv->id_categoria ?></td>
                <td><?= $datainv->id_instituto ?></td>
                <td class="acciones-btn">
                    <a href="./index.php?cod_user=<?= $datainv->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $datainv->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $cout_inv++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
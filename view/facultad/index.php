<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_cliente.php") ?>
<?php include_once ("../../models/Cliente.php") ?>

<?php
    $controller_cliente = new Controller_cliente();

    if(isset($_GET["cod_cliente"]))
    {
        $id = $_GET["cod_cliente"];

        $controller_cliente->delete($id);
    }
    
    $all_cliente = $controller_cliente->loadData();
    $cout_cliente = 1;
?>
<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const facultad =document.querySelector(".facultad");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    facultad.classList.add("selected");

</script>

<div class="container_table">
    <h2 class="title_table">DATO DE CLIENTE</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVO CLIENTE</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_cliente as $cliente){?>
            <?php $dataCliente = new Cliente(); $dataCliente->parseArray($cliente)?>
            <tr class = "<?= ($cout_cliente % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $dataCliente->id ?></td>
                <td><?= $dataCliente->getFullName() ?></td>
                <td><?= $dataCliente->cedula ?></td>
                <td><?= $dataCliente->direccion ?></td>
                <td><?= $dataCliente->telefono ?></td>
                <td><?= $dataCliente->correo ?></td>
                <td class="acciones-btn">
                    <a href="./index.php?cod_cliente=<?= $dataCliente->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $dataCliente->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $cout_cliente++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
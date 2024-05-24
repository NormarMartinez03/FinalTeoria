<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_pago.php") ?>
<?php include_once ("../../models/Pago.php") ?>

<?php
    $controller_pago = new Controller_pago();

    if(isset($_GET["cod_pago"]))
    {
        $id = $_GET["cod_pago"];

        $controller_pago->delete($id);
    }
    
    $all_pago = $controller_pago->loadData();
    $cout_pago = 1;
?>

<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const pagos =document.querySelector(".fuente");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    pagos.classList.add("selected");
</script>


<div class="container_table">
    <h2 class="title_table">LISTA DE PAGOS</h2>
    <div class="box"><a class="btn-nv" href="./create.php">REALIZAR NUEVO PAGO</a></div>
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cod_pago</th>
                <th>Cambio</th>
                <th>Fecha</th>
                <th>Metodo</th>
                <th>Monto</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_pago as $pago){?>
            <?php $datopago = new Pago(); $datopago->parseArray($pago)?>
            <tr class = "<?= ($cout_user % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $datopago->id ?></td>
                <td><?= $datopago->cod_pago ?></td>
                <td><?= $datopago->cambio ?></td>
                <td><?= $datopago->fecha_pago ?></td>
                <td><?= $datopago->metodo_pago ?></td>
                <td><?= $datopago->monto_pago ?></td>
                <td class="acciones-btn">
                    <a href="./index.php?cod_pago=<?= $datopago->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $datopago->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $cout_pago++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
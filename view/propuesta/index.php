<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_prestamo.php") ?>
<?php include_once ("../../models/Prestamo.php") ?>

<?php
    $controller_prestamo = new Controller_prestamo();

    if(isset($_GET["cod_prestamo"]))
    {
        $id = $_GET["cod_prestamo"];

        $controller_prestamo->delete($id);
    }
    
    $all_prestamo = $controller_prestamo->loadData();
    $cout_prestamo = 1;
?>

<script>
        const links_menu = document.querySelectorAll(".links_menu");
        const prestamo =document.querySelector(".propuesta");

        links_menu.forEach(links => {
            links.classList.remove("selected");
        })

        prestamo.classList.add("selected");
</script>

<div class="container_table">
    <h2 class="title_table">PRESTAMOS</h2>
    <div class="box"><a class="btn-nv" href="./create.php">NUEVO PRESTAMO</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Monto</th>
                <th>Tasa</th>
                <th>Fecha de inicio</th>
                <th>Plazo en meses</th>
                <th>Estado</th>
                <th>Id_cliente</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_prestamo as $prestamo){?>
            <?php $dataPrestamo = new Prestamo(); $dataPrestamo->parseArray($prestamo)?>
            <tr class = "<?= ($cout_prestamo % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $dataPrestamo->id ?></td>
                <td><?= $dataPrestamo->monto_prestamo ?></td>
                <td><?= $dataPrestamo->tasa_interes ?></td>
                <td><?= $dataPrestamo->fecha_inicio ?></td>
                <td><?= $dataPrestamo->plazo_mes ?></td>
                <td><?= $dataPrestamo->estado_prestamo ?></td>
                <td><?= $dataPrestamo->id_cliente ?></td>
                
                <td class="acciones-btn">
                    <a href="./index.php?cod_prestamo=<?= $dataPrestamo->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $dataPrestamo->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $cout_prestamo++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
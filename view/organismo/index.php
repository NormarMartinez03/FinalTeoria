<?php include ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_cuota.php") ?>
<?php include_once ("../../models/Cuota.php") ?>

<?php
    $controller_cuota = new Controller_cuota();

    $all_cuota = $controller_cuota->loadData();
    $cout_cuota = 1;
?>
<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const cuotas = document.querySelector(".organismo");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    cuotas.classList.add("selected");
</script>

<div class="container_table">
    <h2 class="title_table">LISTADO DE CUOTAS</h2>
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Periodo</th>
                <th>Interes</th>
                <th>Amortizacion</th>
                <th>Cuota</th>
                <th>Capital</th>
                <th>Estado</th>
                <th>Prestamo</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_cuota as $cuota){?>
            <?php $dataCuota = new Cuota(); $dataCuota->parseArray($cuota)?>
            <tr class = "<?= ($cout_cuota % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $dataCuota->id ?></td>
                <td><?= $dataCuota->fecha ?></td>
                <td><?= $dataCuota->periodo ?></td>
                <td><?= $dataCuota->interes ?></td>
                <td><?= $dataCuota->amortizacion ?></td>
                <td><?= $dataCuota->cuota ?></td>
                <td><?= $dataCuota->capital_pendiente ?></td>
                <td><?= $dataCuota->estado ?></td>
                <td><?= $dataCuota->id_prestamo ?></td>
            </tr>

        <?php $cout_cuota++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>
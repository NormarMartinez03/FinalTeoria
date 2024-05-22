<?php include ("../../template/header.php") ?>

<script>
    const links_menu = document.querySelectorAll(".links_menu");
    const cuotas =document.querySelector(".cuotas");

    links_menu.forEach(links => {
        links.classList.remove("selected");
    })
    cuotas.classList.add("selected");
</script>

<table class="contenedor-tabla">
    <h2 class="title_table">DATO DE CUOTAS</h2>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre Etiqueta</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>&lt;html&gt;...&lt;/html&gt;</td>
        </tr>
        <tr class="fila-activa">
            <td>2</td>
            <td>&lt;head&gt;...&lt;/head&gt;</td>
        </tr>
        
    </tbody>
</table>


<?php include ("../../template/footer.php") ?>
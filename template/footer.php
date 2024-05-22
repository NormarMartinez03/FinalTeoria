<?php $home = "https://localhost/prestamo/" ?>
</main>

<script src="<?= $home ?>/js/script.js"></script>
<!-- <link rel="stylesheet" href="/DataTables/datatables.css" /> -->
 
<!-- <script src="js/datatables.js"></script> -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
<script>
    $(document).ready(function(){
        $(".contenedor-tabla").DataTable(
            {
                "pageLength": 3,
                lengthMenu:[
                    [3, 5, 10],
                    [3, 5, 10]
                ]
            }
        );
    });
</script>

</body>
</html>
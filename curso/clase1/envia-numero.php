<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario de envío</h1>

        <form action="procesa-numero.php" method="post">
            <input type="number" name="numero">
            <br>
            <button class="btn btn-info mt-3">
                enviar
            </button>
        </form>

    </main>
<?php
    include '../layouts/footer.php';

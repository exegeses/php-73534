<?php
    include '../layouts/header.php';
    $dato = 'asdfg';
    $datoHash = password_hash($dato, PASSWORD_DEFAULT);
    $datoHash2 = password_hash($dato, PASSWORD_DEFAULT);
?>
    <main class="container py-3">
        <h1>función password_hash()</h1>

        <section class="shadow alert my3">
            hash: <?= $datoHash ?>
            <br>
            hash2: <?= $datoHash2 ?>
        </section>
    </main>
<?php
include '../layouts/footer.php';

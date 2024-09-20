<?php
    session_start();

    // capturamos datos enviados
    $nombre = $_POST['nombre'];
    $idioma = $_POST['idioma'];

    // Almacenamos datos en una sesión
    $_SESSION['nombre'] = $nombre;
    $_SESSION['idioma'] = $idioma;


    require 'prefs/prefs.php';
    $lang = mostrarPreferencias();

    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1><?= $lang['h1'] ?> <?= $lang['flag'] ?></h1>

        <section class="shadow alert my3">
            <?= $lang['msg'] ?>
        </section>
    </main>
<?php
include '../layouts/footer.php';

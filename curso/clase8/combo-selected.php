<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Combo selected</h1>

        <section class="shadow alert my3">
            <p class="m4">Para que quede marcada una opción del desplegable debemos agregar el atributo "selected"</p>

            <select name="dato">
                <option value="1">valor 1</option>
                <option value="2">valor 2</option>
                <option value="3">valor 3</option>
                <option selected value="4">valor 4</option>
                <option value="5">valor 5</option>
                <option value="6">valor 6</option>
            </select> 
            
        </section>
    </main>
<?php
include '../layouts/footer.php';

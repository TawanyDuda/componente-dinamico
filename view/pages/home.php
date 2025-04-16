<?php
    $cssPagina = ['../assets/style.css']; 
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <h1>Título da página</h1>
    <?= renderizarBotao('primary', ) ?>
    <br><br>
    <?= renderizarBotao('secondary', ) ?>
    <br><br>
    <?= renderizarBotao('secondary', ) ?>

    <h1>Título da página</h1>
    <br>
    <div class="container">
        <?= textField(true, 'email') ?>

    </div>

</body>

</html>
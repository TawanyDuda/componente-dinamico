<?php
$cssPagina = ['../assets/css/style.css'];
require '../components/button.php';
require '../components/card.php';
require '../components/head.php';
?>

<body>
    <h1>Bem-vindo</h1>
    <div class="container">

        <?= renderizarBotao("Iniciar") ?>

        <h1>Título da página</h1>
    </div>
    <div class="cardes">
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
        <?= criarCard("../img/image.png", "titulo", "Descrição") ?>
    </div>
</body>
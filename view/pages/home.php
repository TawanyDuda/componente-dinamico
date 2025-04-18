<?php
$cssPagina = ['../assets/css/style.css'];
require '../components/button.php';
require '../components/card.php';
require '../components/head.php';
?>

<body>
    <h1 class="titulo">Bem-vindo</h1>
    <!-- <div class="container">

        <?= renderizarBotao("Iniciar") ?>

        <h1>Título da página</h1>
    </div> -->
    <div class="cardes">
        <?= criarCard("../img/nirvana2.jpg", "titulo", "Banda: Nirvana") ?>
        <?= criarCard("../img/baco.jpg", "titulo", "Cantor: Baco Exu") ?>
        <?= criarCard("../img/duzz.jpg", "titulo", "Cantor: Duzz") ?>
        <?= criarCard("../img/greenday.jpg", "titulo", "Banda: Greenday") ?>
        <?= criarCard("../img/nirvana.jpg", "titulo", "Banda: Nirvana") ?>
        <?= criarCard("../img/raibowkitten.jpg", "titulo", "Banda: Raibow Kitten Surprise") ?>
    </div>
</body>
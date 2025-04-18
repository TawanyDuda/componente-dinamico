<?php
require '../components/head.php';
require '../components/formulario.php';
?>


<body>
    <h1>Hora de se cadastrar!</h1>


    <div class="formulario">
        <h2>Dados Pessoais</h2>
    <?= novoFormulario('Nome: ', 'text','escreva seu nome') ?>
    <?= novoFormulario('Email: ', 'text','escreva seu email') ?>
    <?= novoFormulario('CPF: ', 'text','escreva seu cpf') ?>
    <?= novoFormulario('Telefone: ', 'text','escreva telefone') ?>
    <?= novoFormulario('Sujestão: ', 'text','escreva sua sujestão') ?>
    </div>
</body>

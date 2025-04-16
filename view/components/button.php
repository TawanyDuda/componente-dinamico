<?php
require_once '';
function renderizarBotao($tipo,$conteudo){
    switch($tipo){
        case 'primary':
            $class = 'button button-primary';
            break;
        case 'secondary':
            $class = 'button button-secundary';
            break;
        case 'login':
            $class = 'button button-login';
            break;
        default:
            $class = 'button button-primary';
    };
}

?>
<?php

function novoFormulario ($nome,$type,$placeholder){
   return "
    <form class='inputs'>
        <label>$nome</label>
        <input type='$type' placeholder='$placeholder'>
    <form>
   ";
}


?>
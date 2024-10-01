<?php

function imprimirGuions($guions) {
    
    echo "<div class=contenedor>";
    foreach ($guions as $valor) {echo "<span class='guiones'>" . $valor . "\n</span>";}
    echo "</div>";

}

function existeLetra($paraulaEndevinar, $lletraIntroduida, $lletresEndevinades) {


    for ($i = 0; $i < strlen($paraulaEndevinar); $i++) {
        
        if ($paraulaEndevinar[$i] == $lletraIntroduida) {
            
            return true;
        }
    }

    return false;
}


?>
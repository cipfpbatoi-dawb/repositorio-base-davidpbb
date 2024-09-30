<?php


function inicialitzarGraella() {


    $graella = array();

    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 7; $j++) {

            $graella[$i][$j] = 0;
        }

    }

    return $graella;  
}


function pintarGraella($graella) {


    echo "<table border='1px solid black'>";

    for ($i = 0; $i < count($graella); $i++) {

        echo "<tr>";
        
        for ($j = 0; $j < count($graella[$i]); $j++) {
            
            

            if ($graella[$i][$j] == 0) {
                $clase = 'buid';
            } elseif ($graella[$i][$j] == 1) {
                $clase = 'player1';
            } elseif ($graella[$i][$j] == 2) {
                $clase = 'player2';
            } else {
                $clase = 'buid';
            }

            echo "<td class=" . $clase . "></td>";
            
        }


        echo "</tr>";
    }
    
    echo "</table>";
}



function ferMoviment(&$graella, $columna, $jugador) {


    for ($i = 5; $i >= 0; $i--) {

        if ($graella[$i][$columna] == 0) {

            $graella[$i][$columna] = $jugador;
            return true;
        }
    }

    return false;
}







?>
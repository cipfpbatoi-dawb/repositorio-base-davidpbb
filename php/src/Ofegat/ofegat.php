
<?php

include 'funcionsOfegat.php';

$paraulaEndevinar = 'bruixola';

$guions = [];


foreach (str_split($paraulaEndevinar) as $valor) {$guions[] = '_';}


?>



<html>
<head>
    <title>Joc l'Ofegat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
</head>



<body>


<div class="game-text">Joc de l'Ofegat</div>

<form action=<?= $_SERVER['PHP_SELF'] ?> method='POST'>

    <input type=text maxlength=1 name="lletra" id="lletra" required pattern=[a-z] />
    <input type=submit value='Prova' />

</form>

</body>
</html>



<?php

$lletresEndevinades = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $lletraEnviada = $_POST['lletra'];
    
    if (existeLetra($paraulaEndevinar, $lletraEnviada, $lletresEndevinades)) {
        
        for ($i = 0; $i < strlen($paraulaEndevinar); $i++) {

            if (str_split($paraulaEndevinar)[$i] == $lletraEnviada) {
                $guions[$i] = $lletraEnviada;
            } 

        }

        imprimirGuions($guions);

        echo "<p class='win'> Lletra correcta </p>";


    } else {

        echo "<p class='lose'> Lletra incorrecta </p>";

    }

} else {imprimirGuions($guions);}


?>
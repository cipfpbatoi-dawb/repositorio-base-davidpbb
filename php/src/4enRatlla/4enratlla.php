<?php include 'funcions.php'; ?>


<html>
<head>

    <link rel="stylesheet" href="estils.css">

</head>
<body>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Columna:</label>
        <input type="number" id="columna" name="columna" min="0" max="6" required>
        <input type="radio" id="player1" name="ficha" value="1" required>
        <label for="player1">Jugador 1</label>
        <input type="radio" id="player2" name="ficha" value="2" required>
        <label for="player2">Jugador 2</label>
        <button type="submit">Posar fitxa</button>
    </form>


</body>
</html>


<?php


$graella = inicialitzarGraella();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    ferMoviment($graella, $_POST['columna'], $_POST['ficha']);

    pintarGraella($graella);

    
} else {pintarGraella($graella);}



?>
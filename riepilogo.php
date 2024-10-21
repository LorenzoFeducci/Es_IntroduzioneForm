<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $indirizzo = $_GET["indirizzo"];

        echo "<h1>Dati inviati:</h1>";

        echo "<table>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Cognome</th>";
                echo "<th>Email</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$cognome</td>";
                echo "<td>$indirizzo</td>";
            echo "</tr>";
        echo "</table>";
    ?>

</body>
</html>
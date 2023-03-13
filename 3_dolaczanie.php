<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrypt</title>
</head>
<body>
    <h4>Początek strony</h4>
    <?php
        // require, require once, include, include once
        include "./scripts/list.php";
        include_once "./scripts/list.php"; // dodaje jedynie jesli nie byl wczesniej dodawany (plik), jesli jest zła ścieżka, wyskakuje warning
        //@include "./scripts/list.php"; =>  @ - operator ignorowania błędu (nie działa na fatal error)
        echo "Require<br>";
        require "./scripts/list.php"; // gdy jest zła ścieżka przerywa wykonywanie kodu (fatal error)
        require_once "./scripts/list.php";
    ?>
    <h4>Koniec strony</h4>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>
            Poznan
            <ol type="A">
                <li>Polna</li>
                <li>Gnieźnieńska</li>
                <li>Marszałkowska</li>
            </ol>
        </li>
        <li>Gniezno</li>
        <li>Jarocin</li>
    </ul>


    <?php
    $city = "POZNAN";
        echo <<< LIST
        <br>HEREDOC<br>
        <ul>
            <li>
                $city;
                <ol type="A">
                    <li>Polna</li>
                    <li>Gnieźnieńska</li>
                    <li>Marszałkowska</li>
                </ol>
            </li>
            <li>Gniezno</li>
            <li>Jarocin</li>
        </ul>
LIST
    ?>
</body>
</html>

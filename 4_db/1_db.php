<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    
<?php
    require_once "./scripts_db/connect.php";
    echo $conn->connect_errno;
    echo "<br>";
    echo mysqli_connect_errno();
?>

</body>
</html>
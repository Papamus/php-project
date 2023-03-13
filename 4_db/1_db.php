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
    // echo $conn->connect_errno;
    // echo "<br>";
    // echo mysqli_connect_errno();
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);
    // $user = $result->fetch_assoc(); => zamiana wartosci na tablice asocjacyjną
    // print_r($user) => wyswietlenie tablicy
    // var_dump($user) => wyswietlenie tablicy + typ pola
    // echo $user["firstName"]; => wyswietlenie imienia pierwszego usera

    // while($user = $result->fetch_assoc()){
    //    echo "User<br>"; 
    // }
    
    while($user = $result->fetch_assoc()){
        $year = substr($user["birthday"],0,4);
        echo <<< USERS
            Imie i nazwisko: $user[firstName] $user[lastName] <br>
            Data urodzenia: $user[birthday]<br>
            Rok urodzenia: $year
            <hr>
USERS;
    }

?>

</body>
</html>
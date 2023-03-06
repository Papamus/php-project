<?php
    $firstName = "Adam";
    $lastName = "Kusiakiewicz";
    echo "Imię i nazwisko: $firstName $lastName<br>";
    echo 'Imię i nazwisko: $firstName $lastName<br>';
// heredoc do zmiennej
    $data =  <<< DATA
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
DATA;
// heredoc raw po prostu do wyświetlenia
    echo <<< DATA
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
DATA;

echo $data;

//nowdoc (rozni sie apostrofem przy etykiecie)
    echo <<< 'DATA'
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
DATA;

//systemy liczb
$bin = 0b1011;
echo $bin;
$oct = 011;
//$oct = 0o11;
echo $oct;
$hex = 0xA1;
echo $hex;



?>
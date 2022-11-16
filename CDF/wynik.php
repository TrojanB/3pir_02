<?php
    //Trojan Bogacki 3pir
    $imie = $_POST['imie'];
    $tab = array(
        0 => $_POST['a'],
        1 => $_POST['b'],
        2 => $_POST['c'],
        3 => $_POST['d']
    );
    $suma = 0;
    $n = 0;


    echo "<h1>Witaj $imie na mojej stronie!</h1> <br> ";

    var_dump($tab);


    for($i=0;$i<sizeof($tab);$i++){
        (double)$tab[$i];
        if(is_numeric($tab[$i]) && $tab[$i]!=0){
            $suma+=$tab[$i];
            $n++;
        }
    }

    $srednia = $suma/$n;

    echo " <br> Suma to: $suma";
    echo " <br> n to: $n";
    echo " <br> Średnia to: $srednia";


?>
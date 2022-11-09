<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZO4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Zadanie 4</h1>
    <h2>Trojan Bogacki 3pir</h2>
    <p>Napisz program, który oblicza i wyświetla iloraz 2 liczb rzeczywistych z dokładnością do dwóch miejsc po przecinku.</p>

    <form action="" method="post">
        <label for="n1">Podaj a:</label>
        <input type="text" name="n1">

        <label for="n2">Podaj b:</label>
        <input type="text" name="n2">

        <input type="submit" value="oblicz">
    </form>

    <section id="wynik">
        <?php
            if(isset($_POST['n1'])){
                $n1 = (double)$_POST['n1'];
                $n2 = (double)$_POST['n2'];

                if($n2!=0){
                    $wynik = round($n1/$n2,2);
                    echo "$n1 : $n2 = $wynik";
                }
                else{
                    echo "NIE MOŻNA DZIELIĆ PRZEZ ZERO!";
                }
            }
        ?>
    </section>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZO3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Zadanie 03</h1>
    <h2>Trojan Bogacki 3pir</h2>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>

    <form method="post" action="">
        <label for="n1">Podaj a:</label>
        <input type="text" name="n1">

        <label for="n2">Podaj b:</label>
        <input type="text" name="n2">

        <label for="n3">Podaj c:</label>
        <input type="text" name="n3">

        <label for="n4">Podaj d:</label>
        <input type="text" name="n4">

        <input type="submit" value="wyślij">
    </form>

    <section id="wynik">
        <?php

        if(isset($_POST['n1'])) {

            $n1 = (double)$_POST['n1'];
            $n2 = (double)$_POST['n2'];
            $n3 = (double)$_POST['n3'];
            $n4 = (double)$_POST['n4'];

            $wynik = pow(($n1 * $n2 * $n3 * $n4), 0.25);
            $wynik_round = round($wynik,3);

            echo "a: $n1 <br>";
            echo "b: $n2 <br>";
            echo "c: $n3 <br>";
            echo "d: $n4 <br>";

            echo "Średnia geometryczna: $wynik <br>";
            echo "Średnia geometryczna zaokrąglona: $wynik_round";
        }
        ?>
    </section>

</body>
</html>
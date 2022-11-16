<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZO5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Zadanie 5</h1>
    <h2>Trojan Bogacki 3pir</h2>
    <p>Napisz program, który oblicza sumę, różnicę, iloczyn i iloraz (całkowity - jak w C++) liczb całkowitych A i B.</p>
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

            $suma = $n1 + $n2;
            $roznica = $n1 - $n2;
            $iloczyn = $n1 * $n2;
            $iloraz_c = 0;
            $reszta = $n1%$n2;



            echo "suma: $n1 + $n2 = $suma <br>";
            echo "różnica: $n1 - $n2 = $roznica <br>";
            echo "iloczyn: $n1 * $n2 = $iloczyn <br>";
            echo "iloraz: $n1 : $n2 = $iloraz_c <br>";
            echo "reszta z dzielenia: $reszta <br>";

            while($n1>=$n2){
                $n1-=$n2;
                $iloraz_c++;
            }

        }
    ?>
    </section>

</body>
</html>
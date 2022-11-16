<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: deeppink;
            color: #04e8e8;
        }
        input{
            background-color: #c60d71;
        }
    </style>
</head>
<body>
    <!--Trojan Bogacki 3pir !-->
    <h1>Zadanie 1</h1>
    <h1>Trojan Bogacki 3pir</h1>
    <p>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona.</p>

    <form action="" method="post">
        <label for="n1">Podaj a:</label>
        <input type="text" name="n1">

        <label for="n2">Podaj b:</label>
        <input type="text" name="n2">

        <label for="n3">Podaj c:</label>
        <input type="text" name="n3">

        <input type="submit" value="oblicz">
    </form>

    <?php
    if(isset($_POST['n1'])) {
        $a = (double)$_POST['n1'];
        $b = (double)$_POST['n2'];
        $c = (double)$_POST['n3'];

        echo "a = $a <br>";
        echo "b = $b <br>";
        echo "c = $b <br>";
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $heron = pow(($a + $b + $c) * ($a + $b - $c) * ($a - $b + $c) * (-$a + $b + $c), 0.5) / 4;
            echo "Pole trójkąta to: $heron";
        }
        else echo "Nie da się stworzyć trójkąta z takich odcinków.";
    }
    ?>


</body>
</html>

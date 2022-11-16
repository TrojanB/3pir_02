<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 32</title>
</head>
<body>

    <h1>Zadanie 32</h1>
    <h2>Trojan Bogacki 3pir</h2>
    <p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>

    <form method = "post" action="">
        <label for="a">Podaj a(minimalna wartość):</label>
        <input type="text" name="a">
        <label for="b">Podaj b(maksymalna wartość):</label>
        <input type="text" name="b">

        <input type="submit" value="wykonaj">
    </form>

    <?php
    if(isset($_POST['a'])) {


        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];

        echo "Zakres to: <$a, $b>";

        $los1 = rand($a, $b);
        $los2 = rand($a, $b);

        echo "<br>";
        echo "$los1<br>";
        echo "$los2<br>";

        if ($los1 > $los2) echo " $los1 > $los2";
        else if ($los2 > $los1) echo " $los1 < $los2";
        else echo "$los1 = $los2";
    }
    ?>

</body>
</html>
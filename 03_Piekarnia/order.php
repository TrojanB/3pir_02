<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie zamówienia</title>
</head>
<body>
    
<?php
    $paczki = $_POST['paczki'];
    $grzebienie = $_POST['grzebienie'];
    $cena_paczki=$paczki * 0.99;
    $cena_grzebieni=$grzebienie * 1.29;
    $suma = $cena_paczki + $cena_grzebieni;

echo<<<END

    <h2>Podsumowanie zamówienia</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Pączek(0.99 PLN/szt)</td><td>$paczki</td>
        </tr>
        <tr>
            <td>Grzebień(1.29 PLN/szt)</td><td>$grzebienie</td>
        </tr>
        <tr>
            <td>SUMA</td><td>$suma PLN</td>
        </tr>
    </table>
    <br>
    <a href="index.html">Strona główna</a>

END;
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona powitania</title>
</head>
<body>
    
    <section>
        <h1>Zadanie 1</h1>
        <h2>Autor: Trojan Bogacki 3pir_2</h2>
        <hr>
    </section>

    <div id="blok-wprowadzania-danych">
        <form action="wynik.php" method="post">
            <label for="imie">Podaj imie: </label>
            <input type="text" id="imie"name="imie">
            <label for="wiek">Podaj wiek: </label>
            <input type="number" id="wiek" name="wiek">
            <input type="submit" value="wyślij">
            <br>
            <label>...</label>
        </form>
    </div>

</body>
</html>
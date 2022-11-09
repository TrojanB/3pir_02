<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekarnia</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Zamówienie online</h1>

    <form action="order.php" method="post">
            <label for="paczki">Ile pączków (0.99 PLN/szt) </label>
            <input type="number" name="paczki"> <br>

            <label for="grzebienie">Ile grzebieni (1.29 PLN/szt)</label>
            <input type="number" name="grzebienie">

            <br><br>

            <input type="submit" value="zamów" id="sub"/>

            <br><br><br>

            <img src="https://th.bing.com/th/id/R.3e4fe464be411f9743b7fbd09816a75a?rik=XoWhc8Nl1Wd99Q&pid=ImgRaw&r=0" width="20%" height="5%">
    </form>
</div>
</body>
</html>
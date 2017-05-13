<!doctype html>
<!--
team: 7
author: Rick Bouma, Jeroen Mager
gemaakt op: 12-12-2016
-->
<html lang="nl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betalen1</title>
</head>
<body>
    <form>
        <p>Prijs in bitcoin is: <script>document.write(bitcoin)</script></p>
        <input type="text" id="email" placeholder="email"><br>

        <?php
        function generateRandomNumber($length) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        echo generateRandomNumber(10);
        ?><br>
        <input type="submit" value="betalen">

    </form>
</body>
</html>
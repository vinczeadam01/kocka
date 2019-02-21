<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kockadobás</title>
    </head>
    <body>
        <?php
            $szam=$_GET["szam"];
            include("kockadobas.php");
            $friss=new kockadobas($szam);
            $friss->kiiras();
        ?>
    </body>
</html>

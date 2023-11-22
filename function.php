<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>

    <?php

        function Irdki($x){
            echo $x;
        }

        function masikline(){
            echo "<br/>";
        }

        function Osszeadas($egy,$ketto){
            return $egy + $ketto;
        }

        Irdki("andsadsayad");
        masikline();
        Irdki("andsa");
        masikline();
        Irdki("andsadd");
        masikline();
        Irdki("asadad");
        masikline();
        Irdki("dsa");

        masikline();

        echo Osszeadas(1,3);

    ?>

</body>
</html>
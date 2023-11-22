<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>

    <?php
        $jelenlegi = getdate();
        echo $jelenlegi['mday'] . " ";
        echo $jelenlegi['mon']. " ";
        echo $jelenlegi['year']. " ";

        echo "<br/>";
        echo time(); 
        echo "<br/>";
        echo date ("m/d/y G:i:s<br>", time()) . '<br/>';


    ?>
</body>
</html>
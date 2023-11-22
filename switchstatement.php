<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Switch</h1>


    <?php

        $grade = 'B';

        switch($grade){

            case "A":
                echo "Ötös";
                break;
            case "B":
                echo "Négyes";
                break;
            case "C":
                echo "Hármas";
                break;
            case "D":
                echo "Kettes";
                break;
        }

    ?>
</body>
</html>
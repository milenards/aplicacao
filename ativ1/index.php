<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros pares</title>
</head>

<body>
    <title>Números pares entre 175 e 310</title>
    <?php
            for ($num = 175; $num <= 310; $num++) {
                if ($num % 2 == 0) {
                    echo $num . ", ";
                }
            }
        ?>



</body>

</html>
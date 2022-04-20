<?php 
    $randomNumber = [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < 15; $i++){ ?>
            <?php
                $randomGenerator = random_int(1,100);
                if (!in_array($randomGenerator , $randomNumber )){
                    $randomNumber[] = $randomGenerator;}
                echo $randomNumber[$i]
            ?>
        <?php } ?>

    </ul>
</body>
</html>
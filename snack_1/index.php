<?php 
    $match = [
        [
            'casa' => 'Milano',
            'puntiCasa' => 60,
            'ospite' => 'Roma',
            'puntiOspite' => 54,
        ],
        [
            'casa' => 'Brescia',
            'puntiCasa' => 65,
            'ospite' => 'Bologna',
            'puntiOspite' => 53,
        ]
        
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo Snack</title>
</head>
<body>
    <div>
        <ul>
            <?php for ($i = 0; $i < count($match); $i++) { ?>
            <li>
                <?php echo ($match[$i]['casa']) ?> - <?php echo($match[$i]['ospite'])?> |
                <?php echo($match[$i]['puntiCasa'])?> - <?php echo($match[$i]['puntiOspite'])?>
            </li> 
            <?php } ?>
        </ul> 
    </div>
</body>
</html>
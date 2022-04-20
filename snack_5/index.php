<?php 
    $paragraph = 'Netflix crolla di quasi il 40% a Wall Street e brucia 58 miliardi di capitalizzazione di mercato.
    Un tonfo che appesantisce anche Disney, titolare di Disney+, con i titoli di Topolino che cedono il 5%.    Netflix esplora la possibilità di un abbonamento a basso prezzo con della pubblicità per evitare un fuga di abbonati e attirarne dei nuovi.Lo riporta il Wall Street Journal, sottolineando come l apertura all ipotesi rappresenta una svolta per il colosso della tv in streaming che, fin dal suo lancio, si è proposto come paradiso senza pubblicità.';
    $newArray = explode('.', $paragraph);
    // var_dump($newArray)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php  for ($i = 0; $i < count($newArray); $i++){ ?>
            <p><?php var_dump($newArray[$i])?></p>
        <?php } ?>
    </div>
</body>
</html>
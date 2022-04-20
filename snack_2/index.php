<?php 
    $params = $_GET;

    if (strlen('name' > 3) && (strpos('mail' , '.', '@')) && (is_numeric('age'))) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>
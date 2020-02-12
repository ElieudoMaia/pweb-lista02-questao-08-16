<?php

    $limit = $_GET['top'];

    $soma = 0;

    if($limit < 0) {
        $passo = -1;
        for($i=0; $i>=$limit; $i--) {
            $soma += $i;
        }
    }

    for($i=0; $i<=$limit; $i++) {
        $soma += $i;
    }

    echo "Soma de 0 até $limit = $soma";

?>
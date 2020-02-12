<?php

    $soma = 0;

    for($i=0; $i<=10000; $i++) {

        if($i%7 == 0) {
            $soma += $i;
        }

    }

    echo "Soma: $soma";

?>
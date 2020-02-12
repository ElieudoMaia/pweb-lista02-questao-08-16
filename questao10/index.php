<?php

    $soma = 0;

    do {

        $rand_number = rand(0, 100);

        $soma += $rand_number;

        echo "Soma: $soma<br />";

    } while($soma < 1000);

?>